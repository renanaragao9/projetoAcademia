<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\AcademiaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    Route::get('/index', [AcademiaController::class, 'index']);

    // INICIO de Rotas para conteudo principal
    Route::get('painel', [AcademiaController::class, 'painel'])->middleware('auth');
    Route::get('alunos', [AcademiaController::class, 'alunos'])->middleware('auth')->name('alunos');
    Route::get('fichas/{id}', [AcademiaController::class, 'fichas'])->name('fichas')->middleware('auth');
    Route::get('avaliacao/{id}', [AcademiaController::class, 'avaliacao'])->name('avaliacao')->middleware('auth');

    //Rota para elogios, sugestões e críticas
    Route::get('/report', [HomeController::class, 'report'])->name('report')->middleware('auth');
    Route::post('report', [HomeController::class, 'store_report'])->name('report-store')->middleware('auth');
    Route::get('/chamado', [AcademiaController::class, 'chamados'])->name('chamados')->middleware('auth');
    Route::delete('tabela_chamados/{id}', [AcademiaController::class, 'chamados_destroy'])->name('chamados-destroy')->middleware('auth');
    // ROTAS SOBRE FICHAS, EXERCICIOS, GP MUSCULAR, GP EXERCICIOS

    // CRUD FICHAS
    Route::post('fichas', [AcademiaController::class, 'store_fichas'])->name('fichas-store')->middleware('auth');
    Route::delete('tabela_fichas/{id}', [AcademiaController::class, 'fichas_destroy'])->name('fichas-destroy')->middleware('auth');
    Route::get('edit/{id}', [AcademiaController::class, 'fichas_edit'])->name('fichas-edit')->middleware('auth');
    Route::put('/{id}', [AcademiaController::class, 'fichas_update'])->name('fichas-update')->middleware('auth');

    // CRUD AVALIACAO
    Route::post('avaliacao', [AcademiaController::class, 'store_avaliacao'])->name('avaliacao-store');
    Route::delete('tabela_avaliacao/{id}', [AcademiaController::class, 'avaliacao_destroy'])->name('avaliacao-destroy')->middleware('auth');
    // Avaliacao view
    Route::get('avaliacao-view', [HomeController::class, 'avaliacao_view'])->name('avaliacao-view');

    // CRUD ALUNOS
    Route::get('cadastro_aluno', [AcademiaController::class, 'cadastro_aluno'])->middleware('auth');
    Route::get('reset_senha', [AcademiaController::class, 'reset_senha'])->name('reset-senha')->middleware('auth');
    Route::post('reset', [AcademiaController::class, 'resetPassword'])->name('reset')->middleware('auth');
    Route::delete('tabela_alunos/{id}', [AcademiaController::class, 'users_destroy'])->name('users-destroy')->middleware('auth');
    Route::get('changepassword/{email}', [AcademiaController::class, 'changepassword'])->name('changepassword')->middleware('auth');

    // CRUD EXERCICIOS
    Route::get('cadastro_exercicio', [AcademiaController::class, 'cadastro_exercicio'])->middleware('auth');
    Route::post('cadastro_exercicio', [AcademiaController::class, 'store_exercicio'])->name('exercicio-store')->middleware('auth');
    Route::delete('tabela_exercicios/{id}', [AcademiaController::class, 'exercicio_destroy'])->name('exercicio-destroy')->middleware('auth');

    // CRUD GP MUSCULAR
    Route::get('cadastro_grupomusc', [AcademiaController::class, 'cadastro_grupomusc'])->middleware('auth');
    Route::post('cadastro_grupomusc', [AcademiaController::class, 'store_grupomuscular'])->name('grupos-store')->middleware('auth');
    Route::delete('tabela_grupomuscular/{id}', [AcademiaController::class, 'grupoMuscular_destroy'])->name('grupoMusc-destroy')->middleware('auth');

    // CRUD GP EXERCICIOS
    Route::get('cadastro_gpexercicios', [AcademiaController::class, 'cadastro_gpexercicio'])->middleware('auth');
    Route::post('cadastro_gpexercicios', [AcademiaController::class, 'store_gpexercicio'])->name('gpexercicio-store')->middleware('auth');
    Route::delete('tabela_exercicio/{id}', [AcademiaController::class, 'exercicio_destroy'])->name('exercicio-destroy')->middleware('auth');


    // INICIO de Rotas para o conteudo tabela
    Route::get('tabela_aluno', [AcademiaController::class, 'tabela_aluno'])->name('tabela_aluno')->middleware('auth');
    Route::get('tabela_exercicio', [AcademiaController::class, 'tabela_exercicio'])->name('tabela_exercicio')->middleware('auth');
    Route::get('tabela_grupomuscular', [AcademiaController::class, 'tabela_grupomuscular'])->name('tabela_grupomuscular')->middleware('auth');
    Route::get('tabela_gpexercicios', [AcademiaController::class, 'tabela_gpexercicio'])->name('tabela_gpexercicios')->middleware('auth');
    Route::get('tabela_fichas', [AcademiaController::class, 'tabela_fichas'])->name('tabela_fichas')->middleware('auth');

    Auth::routes();

    Route::get('');

    // Rota de teste
    Route::get('teste', [AcademiaController::class, 'showData']);

    // ROTAS EXCLUSIVAS PARA A HOME E USUARIOS COMO FICHA E ETC

    // Rotas da Autenticação do usuario (LOGIN)
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


        // Rotas para acessar as fichas de treino conforme selecionado

        // Aquecimento
        Route::get('/aquecimento', [HomeController::class, 'aquecimento'])->middleware('auth');

        // INICIO DE ROTAS PARA FICHAS DE PERNA
        Route::get('/perna', [HomeController::class, 'perna'])->middleware('auth');
        Route::get('/perna-posterior', [HomeController::class, 'perna_posterior'])->middleware('auth');
        Route::get('/perna-anterior', [HomeController::class, 'perna_anterior'])->middleware('auth');
        Route::get('/gluteos', [HomeController::class, 'perna_gluteo'])->middleware('auth');

        // INICIO DE ROTAS PARA FICHAS DE PERNA
        Route::get('/peito', [HomeController::class, 'peito'])->middleware('auth');
        Route::get('/peito-ombro', [HomeController::class, 'peito_ombro'])->middleware('auth');
        Route::get('/peito-triceps-ombro', [HomeController::class, 'peito_triceps_ombro'])->middleware('auth');
        Route::get('/peito-triceps', [HomeController::class, 'peito_triceps'])->middleware('auth');
        Route::get('/peito-costas', [HomeController::class, 'peito_costas'])->middleware('auth');

        // INICIO DE ROTAS PARA FICHAS DE COSTAS
        Route::get('/costas', [HomeController::class, 'costas'])->middleware('auth');
        Route::get('/costas-biceps', [HomeController::class, 'costas_biceps'])->middleware('auth');
        Route::get('/costas-trapezio', [HomeController::class, 'costas_trapezio'])->middleware('auth');
        Route::get('/costas-biceps-trapezio', [HomeController::class, 'costas_biceps_trapezio'])->middleware('auth');

        // INICIO DE ROTAS PARA FICHAS DE BICEPS
        Route::get('/biceps-triceps', [HomeController::class, 'biceps_triceps'])->middleware('auth');
        Route::get('/biceps-triceps-trapezio', [HomeController::class, 'biceps_triceps_trapezio'])->middleware('auth');
        Route::get('/biceps-ombro', [HomeController::class, 'biceps_ombro'])->middleware('auth');
        Route::get('/biceps', [HomeController::class, 'biceps'])->middleware('auth');

        // INICIO DE ROTAS PARA FICHAS GENERICAS
        Route::get('/ombro', [HomeController::class, 'ombro'])->middleware('auth');
        Route::get('/triceps', [HomeController::class, 'triceps'])->middleware('auth');
        Route::get('/circuito', [HomeController::class, 'circuito'])->middleware('auth');
        Route::get('/funcional', [HomeController::class, 'funcional'])->middleware('auth');
        Route::get('/aerobico', [HomeController::class, 'aerobico'])->middleware('auth');
