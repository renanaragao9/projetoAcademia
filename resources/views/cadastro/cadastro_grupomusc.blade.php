@extends('layouts.dashboard')

@section('title', 'Painel de controle')


@section('content')

<div class="container-fluid">

    <div id='mensagem'></div>

    <div class="row-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Formulário para criar um novo grupo muscular</strong></label></div>
            </div>

            <hr>

            <div class="panel-body">
                <div class="col-12">
                    <form class="form-horizontal" action="{{ route('grupos-store') }}" method="POST" id="cadastrarAluno" enctype="multipart/form-data">
                    @csrf
                        <div class="row" style="">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label> Nome do grupo muscular <h11>*</h11> </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="nome_grupoMuscular" value="" placeholder="Exemplo - Peito, Perna, Membro supeiro, Membro inferior" required="" >
                                        <br>
                                    </div>

                                <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                                        <button  class="btn btn-dark btn-icon-split" type="submit" name="submit">
                                            <span class="icon text-white-100">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Gravar</span>
                                        </button>
                                    </div>
                                </div>
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
