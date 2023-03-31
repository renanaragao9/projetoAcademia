@extends('layouts.dashboard')

@section('title', 'Painel de controle')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header py-3">
        <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Atalhos</strong></label></div>
    </div>

    <!-- Content Row -->
    <div class="row">

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-6 col-md-6 mb-6">
            <a class="nav-link" href="/alunos">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-6">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Alunos (fichas)</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total de alunos: {{count($user)}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-6 col-md-6 mb-6">
            <a class="nav-link" href="/register">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cadastrar aluno</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-6">
            <a class="nav-link" href="/chamado">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Chamados</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Numero de chamados: {{count($chamado)}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-comment fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-6">
            <a class="nav-link" href="/cadastro_exercicio">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Criar um exercício</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Total de exercicios: {{count($exercicio)}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-table fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-6">
            <a class="nav-link" href="/cadastro_exercicio">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Criar um grupo muscular</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Total de grupos musculares: {{count($grupo)}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-table fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-6">
            <a class="nav-link" href="/tabela_fichas">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Controle de todas as fichas dos alunos</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Total de fichas criadas: {{count($ficha)}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-table fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Pending Requests Card Example -->
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid -->

@endsection
