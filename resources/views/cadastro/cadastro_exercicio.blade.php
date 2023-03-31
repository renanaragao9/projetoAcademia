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
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Formulário para criar um novo exercício</strong></label></div>
            </div>

            <hr>

            <div class="panel-body">
                <div class="col-12">
                    <form class="form-horizontal" action="{{ route('exercicio-store') }}" method="POST" id="cadastrarAluno" enctype="multipart/form-data">
                    @csrf
                        <div class="row" style="">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label id="label-exercicio"> Nome do exercício <h11>*</h11> </label>
                                        <input type="text" autofocus="" id="input-report" class="input-xs form-control in" name="nome_exercicio" value="" placeholder="Exemplo - Remada, Agachamento, Supino..." required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label id="label-exercicio"> Grupo muscular <h11>*</h11> </label>
                                        <select class='form-control'id="input-report" name="id_grupoMuscular">
                                            @foreach ($grupos as $grupo)
                                                  <option id="teste" value="{{ $grupo->id_grupoMuscular }}">{{ $grupo->id_grupoMuscular }} - {{ $grupo->nome_grupoMuscular }} </option>
                                             @endforeach
                                        </select>
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="campo">
                                            <label> Foto do Exercicio <font color="red">*</font></label></label>
                                          <input name="image_exercicio" id="file" type="file" accept="image/*" onchange="readURL(this);" /><img id="blah" />
                                          </div>
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
