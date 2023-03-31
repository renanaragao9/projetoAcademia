@extends('layouts.dashboard')


@section('title', 'Fichas')


@section('content')


<div class="container-fluid">

    <!-- Mensagem de criação de grupo muscular -->
    @if(session('msg'))
    <p class="msg">{{ session('msg') }}</p>
    <br>
    @endif

    <div class="row-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Chamados sobre fichas e avaliações</strong></label></div>
            <hr>

            <div class="panel-body">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>Nº Chamado</th>
                                    <th>Nome</th>
                                    <th>Urgência</th>
                                    <th>Atribuição</th>
                                    <th>Título</th>
                                    <th>Assunto</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chamados as $chamado)
                                    <tr>
                                        <td>{{$chamado->id_report}}</td>
                                        <td>{{$chamado->nome}}</td>
                                        <td>{{$chamado->urgencia}}</td>
                                        <td>{{$chamado->personal}}</td>
                                        <td>{{$chamado->titulo}}</td>
                                        <td>{{$chamado->report}}</td>
                                        <td>
                                            <form action="{{ route('chamados-destroy', ['id'=>$chamado->id_report]) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button id="danger-alert" type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este exercicio da ficha ?')">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nº Chamado</th>
                                    <th>Nome</th>
                                    <th>Urgência</th>
                                    <th>Atribuição</th>
                                    <th>Título</th>
                                    <th>Assunto</th>
                                    <th>Ação</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
