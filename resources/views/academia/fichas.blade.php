
@extends('layouts.dashboard')


@section('title', 'Fichas')


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
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Formulário para criação de ficha</strong></label></div>
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label>Aluno: <strong>{{$user->name}}</strong></label></div>
            </div>

            <hr>

            <div class="panel-body">
                <div class="col-12">
                    <form class="form-horizontal" action="{{ route('fichas-store') }}" method="POST" id="cadastrarAluno" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Divisão do treino</strong></label></div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label id="label-exercicio"> Grupo muscular </label>
                                            <select class="select-search" style="width: 100%" name="id_gpexercicios">
                                                <option value="Inválido">Selecione o grupo muscular</option>
                                                @foreach ($grupos as $grupo)
                                                    <option value="{{ $grupo->id_gpexercicios }}">{{ $grupo->nome_gpexercicios }} </option>
                                                @endforeach
                                            </select>
                                        <br> <!-- Espaçamento para nao interferir no css do bootstrap -->
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br><!-- Espaçamento para nao interferir no css do bootstrap -->
                                        <label id="label-exercicio"> Exercicio </label>
                                        <select class='select-search' style="width: 100%;" name="id_exercicio">
                                            <option value="Inválido">Selecione o exercício</option>
                                            @foreach ($exercicios as $exercicio)
                                                  <option value="{{ $exercicio->id_exercicio }}">{{ $exercicio->nome_exercicio}} ({{ $exercicio->nome_grupoMuscular}})</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Especificação do exercicio</strong></label></div>

                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                        <label id="label-exercicio"> Série </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" id="input-report" name="serie" maxlength="70" value="" placeholder="Serie" >
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                        <label id="label-exercicio"> Repetição </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" id="input-report" name="repeticao" maxlength="70" value="" placeholder="Repetição" >
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                        <label id="label-exercicio"> Peso </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" id="input-report" name="peso" maxlength="70" value="" placeholder="Peso">
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                        <label id="label-exercicio"> Descanso </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" id="input-report" name="descanso" maxlength="70" value="" placeholder="Descanso" >
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label id="label-exercicio">Descrição:</label>
                                        <textarea name="desc" id="description" class="form-control" id="input-report" placeholder="Alguma descrição? "></textarea>
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: none;">
                                        <label id="label-exercicio"> Cod do Aluno <h11>*</h11> </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" readonly name="id_users" maxlength="70" value="{{$user->id}}">
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="display: none;">
                                        <label id="label-exercicio"> Cod do professor <h11>*</h11> </label>
                                        <input type="number" autofocus="" class="input-xs form-control in" readonly name="id_creator" maxlength="70" value="{{Auth::user()->id}}">
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
<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ficha de {{$user->name}}</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                    <thead>
                        <tr>
                            <th>Grupo de exercicio</th>
                            <th>Exercicio</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Grupo de exercicio</th>
                            <th>Exercicio</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($fichas as $ficha)
                            <tr>
                                <th>{{$ficha->nome_gpexercicios}}</th>
                                <td>{{$ficha->nome_exercicio}}</td>
                                <td> <a href="{{ route('fichas-edit', ['id' => $ficha->id_ficha]) }}"><button class="btn btn-primary">Editar</button></a></td>
                                <td>
                                    <form action="{{ route('fichas-destroy', ['id'=>$ficha->id_ficha]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button id="danger-alert" type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este exercicio da ficha ?')">Excluir</button>
                                </form> </td>
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
