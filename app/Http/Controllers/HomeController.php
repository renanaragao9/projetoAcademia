<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\Report;
use App\Models\User;
use App\Models\Exercicio;
use App\Models\gruposmusculare;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user()->id;

        $fichas = Ficha::where('id_users', auth()->user()->id,)->distinct()->get(['id_gpexercicios']);

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('home', ['fichas' => $fichas, 'dash' => $dash]);
    }

    // =-=-=-=-=-=-=-=-  FUNÇÃO DE AQUECIMENTO  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
    public function aquecimento() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 1)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio', 'name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.genericos.aquecimento', ['fichas' => $fichas, 'dash' => $dash]);
    }


        // =-=-=-=-=-=-=-=-  INICIO DE FUNÇOES SOBRE PERNA  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
    public function perna() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 2)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio', 'name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.perna.perna', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function perna_posterior() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 3)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio', 'name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.perna.perna-posterior', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function perna_anterior() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 4)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.perna.perna-anterior', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function perna_gluteo() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 5)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio', 'name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.perna.gluteos', ['fichas' => $fichas, 'dash' => $dash]);
    }

    // =-=-=-=-=-=-=-=-  INICIO DE FUNÇOES SOBRE PEITO  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

    public function peito() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 6)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio', 'name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.peito.peito', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function peito_ombro() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 7)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.peito.peito-ombro', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function peito_triceps_ombro() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 8)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.peito.peito-triceps-ombro', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function peito_triceps() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 9)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.peito.peito-triceps', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function peito_costas() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 10)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.peito.peito-costas', ['fichas' => $fichas, 'dash' => $dash]);
    }

    // =-=-=-=-=-=-=-=-  INICIO DE FUNÇOES SOBRE COSTAS  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

    public function costas() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 11)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.costas.costas', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function costas_biceps() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 12)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.costas.costas-biceps', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function costas_trapezio() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 13)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.costas.costas-trapezio', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function costas_biceps_trapezio() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 14)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.costas.costas-biceps-trapezio', ['fichas' => $fichas, 'dash' => $dash]);
    }

    // =-=-=-=-=-=-=-=-  INICIO DE FUNÇOES SOBRE BICEPS  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

    public function biceps_triceps() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 15)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.biceps.biceps-triceps', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function biceps_triceps_trapezio() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 16)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio', 'name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.biceps.biceps-triceps-trapezio', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function biceps_ombro() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 17)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.biceps.biceps-ombro', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function biceps() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 18)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.biceps.biceps', ['fichas' => $fichas, 'dash' => $dash]);
    }

    // =-=-=-=-=-=-=-=-  INICIO DE FUNÇOES GENERICAS  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

    public function ombro() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 19)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.genericos.ombro', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function triceps() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 20)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.genericos.triceps', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function circuito() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 21)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.genericos.circuito', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function funcional() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 22)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.genericos.funcional', ['fichas' => $fichas, 'dash' => $dash]);
    }

    public function aerobico() {

        $user = auth()->user()->id;

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $fichas = Ficha::where('id_users', auth()->user()->id,)->where('fichas.id_gpexercicios', '=', 23)->orderby('id_gpexercicios', 'ASC')
        ->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')
        ->join('exercicios', 'fichas.id_exercicio', '=', 'exercicios.id_exercicio')
        ->join('users', 'fichas.id_creator', '=', 'users.id')
        ->select('fichas.*','nome_gpexercicios', 'nome_exercicio', 'image_exercicio','name')->get();

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('fichas.genericos.aerobico', ['fichas' => $fichas, 'dash' => $dash]);
    }


    // Funções para as Avaliações
    public function avaliacao_view() {

        // Houve uma hambiguidade (id do gpexercicios é o mesmo do fichas ou seja a foreing key é mesma da primary key usada com o join. Para isso é preciso diferenciar usando o nome da tabela. neste caso fichas)
        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        $avaliacao = Avaliacao::where('id_user', auth()->user()->id)->orderby('id_avaliacao', 'DESC')
        ->join('users', 'avaliacaos.id_user', '=', 'users.id')
        ->select('avaliacaos.*','name')->get();

        return view('avaliacao.avaliacao-view', ['dash' => $dash, 'avaliacao' => $avaliacao]);
    }

    // Funções para elogio, sugestões e críticas
    public function report() {

        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return view('academia.report', ['dash' => $dash]);
    }

    public function store_report(Request $requeste) {

        Report::create($requeste->all());

        $dash = Ficha::where('id_users', auth()->user()->id,)->join('gpexercicios', 'fichas.id_gpexercicios', '=', 'gpexercicios.id_gpexercicios')->orderby('fichas.id_gpexercicios', 'ASC')->distinct()->get(['fichas.id_gpexercicios', 'nome_gpexercicios']);

        return redirect()->route('report', ['dash' => $dash])->with('msg', 'Reporte criado com sucesso!');
    }

}
