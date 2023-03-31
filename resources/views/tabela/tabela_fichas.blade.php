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
                <h6 class="m-0 font-weight-bold text-primary">Controle de todas as Fichas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Aluno</th>
                                <th>Exercicio</th>
                                <th>Grupo de Exercicio</th>
                                <th>serie</th>
                                <th>repetição</th>
                                <th>peso</th>
                                <th>descanso</th>
                                <th>descrição</th>
                                <th>Ação</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Aluno</th>
                                <th>Exercicio</th>
                                <th>Grupo de Exercicio</th>
                                <th>serie</th>
                                <th>repetição</th>
                                <th>peso</th>
                                <th>descanso</th>
                                <th>descrição</th>
                                <th>Ação</th>
                                <th>Ação</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($fichas as $ficha)
                                <tr>
                                    <td>{{$ficha->name}}</td>
                                    <th>{{$ficha->nome_exercicio}}</th>
                                    <td>{{$ficha->nome_gpexercicios}}</td>
                                    <td>{{$ficha->serie}}</td>
                                    <td>{{$ficha->repeticao}}</td>
                                    <td>{{$ficha->peso}}</td>
                                    <td>{{$ficha->descanso}}</td>
                                    <td>{{$ficha->desc}}</td>
                                    <td> <a href="{{ route('fichas-edit', ['id' => $ficha->id_ficha]) }}"><button class="btn btn-primary">Editar</button></a></td>
                                    <th>
                                        <form action="{{ route('fichas-destroy', ['id'=>$ficha->id_ficha]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button id="danger-alert" type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este exercicio da ficha ?')">Excluir</button>
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
