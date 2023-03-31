@extends('layouts.dashboard')

@section('title', 'Painel de controle')


@section('content')

<div class="container-fluid">

    <div id='mensagem'></div>

    <div class="row-fluid">

        <div class="card shadow mb-4">

            <div class="card-header py-3">

                <div class="divH m-0 font-weight-bold text-primary"><label>Formulário de Cadastro de Alunos</label></div>

            </div>

            <div class="panel-body">

                <div class="col-12">

                    <form class="form-horizontal" action="{{ route('aluno-store') }}" method="POST" id="cadastrarAluno" enctype="multipart/form-data">
                    @csrf
                        <div class="row" style="">

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                <div class="row">

                                    <div class="col-12">

                                        <img id="output" src="img/cadastro/user.webp" class="img-responsive col-12" ></<img>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-12">

                                        <div class="col-12">

                                            <label for="url_foto" class="custom-file-label">Selecione a Foto</label>

                                            <input type="file" accept="image/*" class="form-control custom-file-input in" id="url_foto" name="url_foto" onchange="loadFile(event)">

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 " >

                                <div class="row">
                                    <hr style="width: 100% !important; height: 1px; background-color: #ccc">
                                    <label class="modal-title" style="margin-bottom: 0px;"> <strong> Dados Pessoais </strong> </label>
                                    <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label> Nome <h11>*</h11> </label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="nome_aluno" maxlength="70" value="" placeholder="Nome" required="" >

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label>Data de nascimento <h11>*</h11> </label>
                                        <input type="date" class="input-xs form-control in" name="datanasc_aluno" value="" placeholder="Data de nascimento" required="">
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label>Tipo de documento</label>
                                        <select class="input-xs form-control in" name="tipo_documento">

                                            <option readonly="">Tipo de documento</option>
                                            <option value="CPF" >CPF</option>
                                            <option value="RG" >RG</option>
                                            <option value="Carteira de Estudante" >Carteira de estudante</option>

                                        </select>

                                    </div>


                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label>Número do documento</label>
                                        <input type="text" class="input-xs form-control in" name="nr_documento" value="" maxlength="13" placeholder="Número do documento">
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label>Sexo <h11>*</h11> </label>
                                        <select class="input-xs form-control in" name="sexo_aluno">

                                            <option> Sexo </option>
                                            <option value="Masculino"> Masculino </option>
                                            <option value="Femenino"> Femenino </option>

                                        </select>

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label> Possui restrição médica <h11>*</h11> </label>
                                        <select class="input-xs form-control in" name="restsaude_aluno">

                                            <option>Opção</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Nao">Não</option>

                                        </select>
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Se a resposta for sim, qual ?</label>
                                        <input type="text" class="input-xs form-control in" name="descsaude_aluno" value="" placeholder="">
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label> Telefone <h11>*</h11></label>
                                        <input type="tel" class="input-xs form-control in" name="telefone_aluno" value="" placeholder="xx xxxxx xxxx">
                                        <br>
                                    </div>

                                    <hr style="width: 100% !important; height: 1px; background-color: #ccc">
                                    <label class="modal-title" style="margin-bottom: 0px;"> <strong> Responsáveis </strong> (não obrigatório)</label>
                                    <hr style="width: 100% !important; height: 1px; background-color: #ccc">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label> Parentesco </label>
                                        <select class="input-xs form-control in" name="tipo_parentesco">

                                            <option readonly=""> Grau de parentesco </option>
                                            <option value="mae"> Mãe </option>
                                            <option value="pai"> Pai </option>
                                            <option value="irmao"> Irmão/Irmã </option>
                                            <option value="tio"> Tio/Tia </option>
                                            <option value="avo"> Avõ/Avó </option>

                                        </select>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label> Nome </label>
                                        <input type="text" class="input-xs form-control in" name="nome_parentesco" value="" placeholder="Nome">
                                        <br>
                                    </div>

                                    <hr style="width: 100% !important; height: 1px; background-color: #ccc">
                                    <label style="margin-bottom: -15px;"> <strong> Endereço </strong> (não obrigatório)</label>
                                    <br>
                                    <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label>Bairro</label>
                                        <input type="text" class="input-xs form-control in" id="bairro" name="bairro_aluno" maxlength="25" value="" placeholder="Bairro">

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <label>Rua/Avenida</label>
                                        <input type="text" class="input-xs form-control in" name="rua_aluno" maxlength="50" value="" placeholder="Rua/Avenida">

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <label>Nº Casa</label>
                                        <input type="number" class="input-xs form-control in" id="casa" name="casa_aluno" value="" placeholder="número" >
                                        <br>
                                    </div>

                                    <hr style="width: 100% !important; height: 1px; background-color: #ccc">
                                    <label style="margin-bottom: 0px;"> <strong> Dados da Inscrição </strong> </label>
                                    <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label> Data Depósito <h11>*</h11> </label>
                                        <input type="date" class="input-xs form-control in" id="data_deposito" required="" name="data_deposito" value="" placeholder=""  >

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <label> Plano <h11>*</h11> </label>
                                        <select class="input-xs form-control in" name="plano">

                                            <option readonly="">Selecione o tipo de plano</option>
                                            <option value="59.90">Tradicional</option>
                                            <option value="69.90" >Premium</option>
                                            <option value="49.99" >Econômico</option>

                                        </select>
                                        <br>
                                    </div>

                                </div>

                                <hr style="width: 100% !important; height: 1.5px; background-color: #ccc">

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                                        <button  class="btn btn-dark btn-icon-split" type="submit" name="cadastrarAluno">
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

<script src="js/cadastro.js"></script>
@endsection
