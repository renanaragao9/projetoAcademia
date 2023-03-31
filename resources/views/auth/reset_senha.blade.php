@extends('layouts.dashphone')


@section('title', 'Fichas')


@section('content')
<div class="row-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Cadastrar nova senha!</strong></label></div>
        </div>

        <br>

        <form action="{{ route('reset') }}" method="POST" id="cadastrarAluno" enctype="multipart/form-data">
        @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Senha</label>
                <input type="text" name="senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirmar senha</label>
                <input type="text" name="confirm_senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <button type="submit" class="btn btn-primary" >Alterar senha</button>
        </form>
    </div>
</div>
@endsection

