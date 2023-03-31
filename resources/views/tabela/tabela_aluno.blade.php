@extends('layouts.dashboard')

@section('title', 'Tabelas')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Mensagem de criação de grupo muscular -->
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif

        <br>

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alunos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Cod. Aluno</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Ficha</th>
                                <th>Editar (Usuario)</th>
                                <th>Apagar (Usuario)</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Cod. Aluno</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Ficha</th>
                                <th>Editar (Usuario)</th>
                                <th>Apagar (Usuario)</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($user as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <th>{{$user->name}}</th>
                                    <td>{{$user->email}}</td>
                                    <td> <a href="{{ route('fichas', ['id' => $user->id]) }}"><button class="btn btn-primary">Acessar Ficha</button></a></td>
                                    <td> <a href=""><button class="btn btn-success">Editar usuario</button></a> </td>
                                    <th>
                                        <form action="{{ route('users-destroy', ['id'=>$user->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button id="danger-alert" type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este aluno ?')">Excluir usuario</button>
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
