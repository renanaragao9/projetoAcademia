@extends('layouts.dashboard')

@section('title', 'grupo muscular')


@section('content')


    <!-- Iniciar conteúdo da página -->
    <div class="container-fluid">

        <!-- Mensagem de criação de grupo muscular -->
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif

        <br>

        <!-- Título da página -->

        <!-- Exemplo de DataTales -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grupo de Exercicio</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Identificador</th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Identificador</th>
                                <th>Nome</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($gpexercicios as $grupo)
                                <tr>
                                    <td>{{$grupo->id_gpexercicios}}</td>
                                    <td>{{$grupo->nome_gpexercicios}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
