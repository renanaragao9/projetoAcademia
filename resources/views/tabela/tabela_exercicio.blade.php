@extends('layouts.dashboard')

@section('title', 'Exercicios')


@section('content')


    <!-- Iniciar conteúdo da página -->
    <div class="container-fluid">

        <!-- Mensagem de criação de exercicio -->
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif

        <br>

        <!-- Título da página -->

        <!-- Exemplo de DataTales -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Exercicios</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Identificador</th>
                                <th>Nome</th>
                                <th>Grupo muscular</th>
                                <th>Deletar</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Identificador</th>
                                <th>Nome</th>
                                <th>Grupo muscular</th>
                                <th>Deletar</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($exercicio as $exercicio)
                                <tr>
                                    <td>{{$exercicio->id_exercicio}}</td>
                                    <th>{{$exercicio->nome_exercicio}}</th>
                                    <td>{{$exercicio->nome_grupoMuscular}}</td>
                                    <th>
                                        <form action="{{ route('exercicio-destroy', ['id'=>$exercicio->id_exercicio]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button id="danger-alert" type="submit" class="btn-danger" onclick="return confirm('Tem certeza que deseja deletar este exercicio ?')">Excluir</button>
                                        </form>
                                    </th>
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
