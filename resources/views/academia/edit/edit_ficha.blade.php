
@extends('layouts.dashboard')


@section('title', 'Fichas')


@section('content')

<div class="container-fluid">

    <div id='mensagem'></div>
    <a  href="{{ url()->previous() }}">
        <i class="fa fa-arrow-circle-o-left"></i>
        <span>Voltar</span>
    </a>

    <div class="row-fluid">
        <br>
        <div class="card shadow mb-4">

            <div class="card-header py-3">

                <div class="divH m-0 font-weight-bold text-primary"> <label> Formulário de Edição de Ficha </label> </div>

            </div>

            <div class="panel-body">

                <div class="col-12">

                    <form class="form-horizontal" action="{{ route('fichas-update', ['id' => $fichas->id_ficha]) }}" method="POST" id="cadastrarAluno" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="row">

                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 " >

                                <div class="row">

                                    <hr style="width: 100% !important; height: 1px; background-color: #ccc">
                                    <label class="modal-title" style="margin-bottom: 0px; margin-left: 35%;"> <strong> Editar ficha </label> </strong> </label>
                                    <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                        <label for=""> Grupo muscular <h11>*</h11> </label>
                                          <select class="select-search" style="width: 100%" name="id_gpexercicios">

                                            @foreach ($grupos as $grupo)
                                                <option value="{{ $grupo->id_gpexercicios }}">{{ $grupo->nome_gpexercicios }} </option>
                                            @endforeach

                                        </select>

                                        <br> <!-- Espaçamento para nao interferir no css do bootstrap -->

                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                        <br><!-- Espaçamento para nao interferir no css do bootstrap -->

                                        <label> Exercicio <h11>*</h11> </label>
                                        <select class='select-search' style="width: 100%;" name="id_exercicio">
                                            @foreach ($exercicios as $exercicio)
                                                  <option value="{{ $exercicio->id_exercicio }}">{{ $exercicio->nome_exercicio}} ({{ $exercicio->nome_grupoMuscular}})</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                        <label> Série <h11>*</h11> </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" name="serie" maxlength="70" value="{{ $fichas->serie }}" placeholder="Serie" >

                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                        <label> Repetição <h11>*</h11> </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" name="repeticao" maxlength="70" value="{{ $fichas->repeticao }}" placeholder="Repetição" >

                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                        <label> Peso <h11>*</h11> </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" name="peso" maxlength="70" value="{{ $fichas->peso }}" placeholder="Peso">

                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                        <label> Descanso <h11>*</h11> </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" name="descanso" maxlength="70" value="{{ $fichas->descanso }}" placeholder="Descanso" >

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label for="title">Descrição:</label>
                                        <input type="text" name="desc" id="description" class="form-control" value="{{ $fichas->desc }}" placeholder="Alguma descrição? ">

                                    </div>

                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: none;">

                                        <label> Cod do Aluno <h11>*</h11> </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" name="id_users" maxlength="70" value="{{ $fichas->id_users }}">

                                    </div>

                                    <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">

                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                                        <button  class="btn btn-dark btn-icon-split" type="submit" name="submit">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Atualizar</span>
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
<!-- Begin Page Content -->
