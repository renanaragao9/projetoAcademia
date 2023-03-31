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
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Formulário de Avaliação</strong></label></div>
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label>Aluno: <strong>{{$user->name}}</strong></label></div>
            </div>
            <hr>
            <div class="panel-body">

                <div class="col-12">

                    <form action="{{ route('avaliacao-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row" style="">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
                                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Metas</strong></label></div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <label> Objetivo <h11>*</h11> </label>
                                        <select class="input-xs form-control in" aria-label="Default select example" name="objetivo" style="width: 100%" required>
                                            <option selected value="null">Selecionar</option>
                                            <option value="Hipertrofia">Hipertrofia</option>
                                            <option value="Emagrecimento">Emagrecimento</option>
                                            <option value="Condicionamento">Condicionamento</option>
                                        </select>
                                    <br>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <label> Observação </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="observacao" value="" required="" placeholder="Não obrigatorio">
                                        <br>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <label> Data de início </label>
                                        <input type="date" autofocus="" class="input-xs form-control in" name="dataInicio" value="" required="" placeholder="dd/mm/aaaa">
                                        <br>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <label> Prazo  </label>
                                        <select class="input-xs form-control in" aria-label="Default select example" name="prazo" style="width: 100%" required>
                                            <option selected value="null">Selecionar</option>
                                            <option value="1 mês">1 mês</option>
                                            <option value="1 mês e 2 semanas">1 mês e 2 semanas</option>
                                            <option value="2 meses">2 meses</option>
                                            <option value="2 meses e 2 semanas">2 meses e 2 semanas</option>
                                            <option value="3 meses">3 meses</option>
                                            <option value="3 meses e 2 semanas">3 meses e 2 semanas</option>
                                            <option value="4 meses">4 meses</option>
                                        </select>
                                    <br>
                                    </div>
                                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Medidas</strong></label></div>
                                   </div>
                                    <hr>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Altura </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="altura" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Peso </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="peso" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Braço </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="braco" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Antebraço </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="antebraco" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Ombro </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="ombro" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Peitoral </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="peitoral" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Cintura </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="cintura" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Abdomên </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="abdomen" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Quadril </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="quadril" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Coxa </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="coxa" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Panturilha </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="panturrilha" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Gordura (Não obrigatorio)</label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="gordura" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> Massa (Não obrigatorio)</label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="massa" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <label> IMC (Não obrigatorio)</label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="imc" value="" placeholder=" 00,00 " required="" >
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: none;">
                                        <label> Cod do Aluno <h11>*</h11> </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" name="id_user" maxlength="70" value="{{$user->id}}">
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

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ficha de {{$user->name}}</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>Ação</th>
                            <th>Objetivo</th>
                            <th>Observação</th>
                            <th>Prazo</th>
                            <th>data inicio</th>
                            <th>Peso</th>
                            <th>Altura</th>
                            <th>Braço</th>
                            <th>Antebraço</th>
                            <th>Ombro</th>
                            <th>Peitoral</th>
                            <th>Cintura</th>
                            <th>Abdomên</th>
                            <th>Quadril</th>
                            <th>Coxa</th>
                            <th>Panturrilha</th>
                            <th>Gordura</th>
                            <th>Massa</th>
                            <th>IMC</th>
                            <th>IC</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <<th>Ação</th>
                            <th>Objetivo</th>
                            <th>Observação</th>
                            <th>Prazo</th>
                            <th>data inicio</th>
                            <th>Peso</th>
                            <th>Altura</th>
                            <th>Braço</th>
                            <th>Antebraço</th>
                            <th>Ombro</th>
                            <th>Peitoral</th>
                            <th>Cintura</th>
                            <th>Abdomên</th>
                            <th>Quadril</th>
                            <th>Coxa</th>
                            <th>Panturrilha</th>
                            <th>Gordura</th>
                            <th>Massa</th>
                            <th>IMC</th>
                            <th>IC</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($avaliacao as $avaliacao)
                            <tr>
                                <th>
                                    <form action="{{ route('avaliacao-destroy', ['id'=>$avaliacao->id_avaliacao]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button id="danger-alert" type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluír esta avaliação ?')">Excluir</button>
                                    </form>
                                </th>
                                <th>{{$avaliacao->objetivo}}</th>
                                <th>{{$avaliacao->observacao}}</th>
                                <th>{{date( 'd/m/Y', strtotime($avaliacao->dataInicio))}}</th>
                                <th>{{$avaliacao->prazo}}</th>
                                <th>{{$avaliacao->altura}}</th>
                                <th>{{$avaliacao->peso}}</th>
                                <th>{{$avaliacao->braco}}</th>
                                <th>{{$avaliacao->antebraco}}</th>
                                <th>{{$avaliacao->ombro}}</th>
                                <th>{{$avaliacao->peitoral}}</th>
                                <th>{{$avaliacao->cintura}}</th>
                                <th>{{$avaliacao->abdomen}}</th>
                                <th>{{$avaliacao->quadril}}</th>
                                <th>{{$avaliacao->coxa}}</th>
                                <th>{{$avaliacao->panturrilha}}</th>
                                <th>{{$avaliacao->gordura}}</th>
                                <th>{{$avaliacao->massa}}</th>
                                <th>{{$avaliacao->imc}}</th>
                                <th>{{$avaliacao->ic}}</th>
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


