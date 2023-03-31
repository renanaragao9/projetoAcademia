@extends('layouts.dashphone')

@section('title', 'Reporte')

@section('content')

<div class="container-fluid">

    @if(session('msg'))
        <div class="alert alert-success">
            <p style="text-align: center;">{{session('msg')}}</p>
        </div>
    @endif

    <div class="row-fluid">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Formulário para reportar um elogio, critíca ou sugestão</strong></label></div>
            </div>

            <hr>

            <div class="panel-body">

                <div class="col-12">

                    <form class="form-horizontal" action="{{ route('report-store') }}" method="POST" id="cadastrarAluno" enctype="multipart/form-data">
                    @csrf
                        <div class="row" style="">

                            <td class="input-tam">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "">
                                    <label> Nome <h11>*</h11> </label>
                                    <input type="text" id="input-report" autofocus="" readonly class="input-xs form-control in" name="nome" maxlength="70" value="{{Auth::user()->name}}">
                                    <br>
                                </div>
                            </td>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <label> Urgência </label>
                                <select class="form-select" id="input-report" aria-label="Default select example" name="urgencia" style="width: 100%">
                                    <option selected value="null">Grau de urgência (não obrigatório)</option>
                                    <option value="Baixa">Baixa</option>
                                    <option value="Media">Média</option>
                                    <option value="Alta">Alta</option>
                                    <option value="Urgente">Urgente</option>
                                  </select>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <br>
                                <label> Atribuir a um personal ? </label>
                                <select class="form-select" id="input-report" aria-label="Default select example" name="personal" style="width: 100%">
                                    <option selected value="Todos">Personal (não obrigatório)</option>
                                    <option value="Israel" id="input-report">Israel</option>
                                  </select>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <br>
                                <label> Titulo <h11>*</h11> </label>
                                <select class="form-select" id="input-report" aria-label="Default select example" name="titulo" style="width: 100%" required>
                                    <option selected value="null">Selecionar</option>
                                    <option value="Elogio">Elogio</option>
                                    <option value="Solicitação">Solicitação</option>
                                    <option value="Crítica">Crítica</option>
                                    <option value="Problema">Problema</option>
                                    <option value="Sugestão">Sugestão</option>
                                  </select>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <textarea name="report" id="description" class="form-control" placeholder="Faça um breve resumo do que deseja! " required></textarea>
                                     </div>

                                    <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                                        <button  class="btn btn-dark btn-icon-split" type="submit" name="submit">
                                            <span class="icon text-white-50">
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
