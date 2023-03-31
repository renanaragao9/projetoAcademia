<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercicio;
use App\Models\gruposmusculare;
use App\Models\Ficha;
use App\Models\Gpexercicio;
use App\Models\User;
use App\Models\Avaliacao;
use App\Models\Report;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AcademiaController extends Controller
{

    public function index()
    {
        return view('index');
    }
        // Função teste
    public function showdata()
    {
       $teste = Exercicio::all();

        return view('welcome', ['teste' => $teste]);
    }

    public function painel()
    {
        $user = User::all();
        $exercicio = Exercicio::all();
        $grupo = gruposmusculare::all();
        $ficha = Ficha::all();
        $chamado = Report::all();

        return view('academia.painel', ['user' => $user, 'exercicio' => $exercicio, 'grupo' => $grupo, 'ficha' => $ficha, 'chamado' => $chamado]);
    }

    public function alunos()
    {
       $user = User::all();

       return view('academia.alunos', ['user' => $user]);
    }

    public function reset_senha() {
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);
        return view('auth.reset_senha', ['dash' => $dash]);
    }

    public function resetPassword(Request $request) {
       $senha = $request->senha;

        $user = User::where('email', auth()->user()->email)->first();
        $user->password = Hash::make($senha);
        $user->save();

        return redirect()->route('home');
    }

    public function changepassword($email) {
        $user = User::where('email', $email)->first();
        $user->password = Hash::make('123456');
        $user->save();

        return redirect()->route('alunos')->with('msg', 'Senha resetada com sucesso! Nova pré-senha é 123456');
        }

    // FUNÇÕES SOBRE FICHAS
    public function fichas($id)
    {
        $user = User::where('id', $id)->first();

        if(!empty($user))
        {

        $fichas = Ficha::where('id_users', $user->id)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio')->get();

        $exercicios = Exercicio::orderby('id_grupoMuscular', 'ASC')
        ->join('gruposmusculares', 'exercicios.id_grupoMuscular', '=', 'gruposmusculares.id_grupoMuscular')
        ->select('exercicios.*','nome_grupoMuscular')->get();

        $grupos = Gpexercicio::orderby('id_gpexercicios', 'ASC')->get();

        return view('academia.fichas', [
            'fichas' => $fichas,
            'exercicios' => $exercicios,
            'grupos' => $grupos,
            'user' => $user
        ]);

        } else {
            return redirect()->route('alunos');
        }

    }

    // Função para envio de dados para o banco atraves do store
    public function store_fichas(Request $request)
    {
        $id = $request->id_users;
            Ficha::create($request->all());

            return redirect()->route('fichas', ['id' => $id])->with('msg', 'Ficha criado com sucesso!');
    }

    // Função para edição de fichas atraves do update
    public function fichas_edit($id) {

        $fichas = Ficha::where('id_ficha', $id)->first();

        $exercicios = Exercicio::orderby('id_grupoMuscular', 'ASC')
        ->join('gruposmusculares', 'exercicios.id_grupoMuscular', '=', 'gruposmusculares.id_grupoMuscular')
        ->select('exercicios.*','nome_grupoMuscular')->get();

        $grupos = Gpexercicio::orderby('id_gpexercicios', 'ASC')->get();

        if(!empty($fichas)){
            return view('academia.edit.edit_ficha', ['fichas'=> $fichas, 'exercicios'=> $exercicios, 'grupos'=> $grupos]);
        }
        else {
            return redirect()->back();
        }
    }

    // Função para envio de dados para a atualização da ficha
    public function fichas_update(Request $request, $id) {
        $atualizar = $id;
        $data = [
            'id_gpexercicios' => $request->id_gpexercicios,
            'id_exercicio' => $request->id_exercicio,
            'id_users' => $request->id_users,
            'serie' => $request->serie,
            'repeticao' => $request->repeticao,
            'peso' => $request->peso,
            'descanso' => $request->descanso,
            'desc' => $request->desc
        ];

        $id = $request->id_users;
        Ficha::where('id_ficha', $atualizar)->update($data);
        return redirect()->route('fichas', ['id' => $id])->with('msg', 'Ficha atualizada com sucesso!');
    }

    // Função para deletar o exercicio
    public function fichas_destroy($id) {

        Ficha::where('id_ficha', $id)->delete();

        return redirect()->back()->with('msg', 'Exercicio deletado com sucesso!');
    }

    public function avaliacao($id) {

        $user = User::where('id', $id)->first();

        $avaliacao = Avaliacao::where('id_user', $user->id)
        ->join('users', 'avaliacaos.id_user', '=', 'users.id')
        ->select('avaliacaos.*','name')->get();

        return view('academia.avaliacao', ['user' => $user, 'avaliacao' => $avaliacao]);
    }

    public function store_avaliacao(Request $request)
    {
        $id = $request->id_users;

        Avaliacao::create($request->all());

        return redirect()->route('alunos')->with('msg', 'Avaliacao criada com sucesso!');
    }

    public function avaliacao_destroy($id) {

        Avaliacao::where('id_avaliacao', $id)->delete();

        return redirect()->back()->with('msg', 'Avaliação excluída com sucesso!');
    }

    // INICIO DE FUNÇÕES PARA CADASTROS

    // FUNÇÃO PARA CADASTRO DE USUARIO/ALUNO
    public function cadastro_aluno()
    {
            return view('cadastro.cadastro_aluno');
    }
    // Função para deletar um usuario/aluno
    public function users_destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->route('tabela_aluno')->with('msg', 'Aluno deletado com sucesso!');
    }

    // FUNÇÃO PARA CADASTRO DE EXERCICIOS
    public function cadastro_exercicio()
    {
        $grupos = gruposmusculare::all();

        return view('cadastro.cadastro_exercicio',['grupos' => $grupos]);
    }

    // Função para envio de dados atraves do store
    public function store_exercicio(Request $request)
    {
        $exercicio = new Exercicio;

        $exercicio->nome_exercicio = $request->nome_exercicio;
        $exercicio->id_grupoMuscular = $request->id_grupoMuscular;

        if($request->hasFile('image_exercicio') ** $request->file('image_exercicio')->isvalid()) {

            $requestImage = $request->image_exercicio;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestImage->move(public_path('img/exercicios'), $imageName);

            $exercicio->image_exercicio = $imageName;
        }

        $exercicio->save();

        return redirect()->back()->with('msg', 'Exercicio criado com sucesso!');
    }

    // Função para deletar um exercicio
    public function exercicio_destroy($id) {

        $delete = Exercicio::where('id_exercicio', $id)->first();

        $img = $delete->image_exercicio;

        // para configurar o Storage va em config/filesystems
        Storage::disk('image_exercicio')->delete($img);

        Exercicio::where('id_exercicio', $id)->delete();

        return redirect()->route('tabela_exercicio')->with('msg', 'Exercicio deletado com sucesso!');
    }



    // FUNÇÃO PARA CADASTRO DE GRUPO MUSCULAR
    public function cadastro_grupomusc()
    {
        return view('cadastro.cadastro_grupomusc');
    }

    // Função para envio de dados para o BD
    public function store_grupomuscular(Request $request)
    {
        gruposmusculare::create($request->all());

        return redirect()->route('tabela_grupomuscular')->with('msg', 'Grupo muscular criado com sucesso!');
    }

    // Função para a deletar um grupo muscular
    public function grupoMuscular_destroy($id)
    {
        Gruposmusculare::where('id_grupoMuscular', $id)->delete();

        return redirect()->route('tabela_grupomuscular')->with('msg', 'Grupo muscular deletado com sucesso!');
    }


    // FUNÇÃO PARA CADASTRO DE GRUPO MUSCULAR
    public function cadastro_gpexercicio()
    {
        return view('cadastro.cadastro_gpexercicios');
    }
    // Função para enviar os dados atraves de um store para o BD
    public function store_gpexercicio(Request $request)
    {
        Gpexercicio::create($request->all());

        return redirect()->route('tabela_gpexercicios')->with('msg', 'Grupo de exercicio criado com sucesso!');
    }


    // INICIO DE FUNÇÕES SOBRE TABELAS
    public function tabela_aluno()
    {
        $user = User::all();

        return view('tabela.tabela_aluno',[
            'user' => $user
        ]);
    }


    public function tabela_exercicio()
    {
        /*
            vai chamar todos os parametros da tabela exercicio, apos isso vai
            pegar a chave estrangeira ou seja o id_grupomuscular dela e criar uma relação junto com a tabela Grupomuscular
        */

        $exercicio = Exercicio::join('gruposmusculares', 'exercicios.id_grupoMuscular', '=', 'gruposmusculares.id_grupoMuscular')
         ->select('exercicios.*','nome_grupoMuscular')->get();

        return view('tabela.tabela_exercicio',['exercicio' => $exercicio]);
    }

    public function tabela_grupomuscular()
    {
        $grupos = gruposmusculare::all();

        return view('tabela.tabela_grupomuscular',[
            'grupos' => $grupos
        ]);
    }

    public function tabela_gpexercicio()
    {
        $gpexercicios = Gpexercicio::all();

        return view('tabela.tabela_gpexercicios',['gpexercicios' => $gpexercicios ]);
    }

    public function tabela_fichas()
    {

        $fichas = Ficha::
        join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_users', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'name')->orderBy('id_users', 'ASC')->get();

        return view('tabela.tabela_fichas', ['fichas' => $fichas ]);
    }

    public function chamados() {

        $chamados = Report::all();

        return view('academia.chamado', ['chamados' => $chamados]);
    }

    public function chamados_destroy($id) {

        Report::where('id_report', $id)->delete();

        return redirect()->back()->with('msg', 'Reporte excluído com sucesso!');
    }

}




