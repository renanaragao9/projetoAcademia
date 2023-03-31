@extends('layouts.dashboard')

@section('title', 'Painel de controle')


@section('content')

<div class="container-fluid">

    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif

    <div class="row-fluid">

        <div class="card shadow mb-12">
            <div class="card-header py-3">
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Formulário para criar um novo grupo de exercício</strong></label></div>
            </div>

            <hr>

            <div class="panel-body">
                <div class="col-12">
                    <form class="form-horizontal" action="{{ route('gpexercicio-store') }}" method="POST" id="cadastrarAluno" enctype="multipart/form-data">
                    @csrf
                        <div class="row" style="">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
                                <label id="label-exercicio"> Nome do grupo <h11>*</h11> </label>
                                <input type="text" autofocus="" class="input-xs form-control in" id="input-report" name="nome_gpexercicios" value="" placeholder="Exemplo - Peito-Ombro-Triceps" required="" >
                                <br>
                            </div>

                            <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                                <button  class="btn btn-dark btn-icon-split" type="submit" name="submit">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Gravar</span>
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
