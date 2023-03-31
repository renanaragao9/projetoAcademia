@extends('layouts.dashphone')


@section('title', 'Fichas')


@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-xl-16 col-xs-6 col-md-5 mb-5 shadow h-100 py-2" style="display: colum;">
            <div class="card-header py-3">
                <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label class="titulo-ficha">Biceps e Triceps</label></div>
            </div>
            <div class="card">
                <div class="card-horizontal">
                    @if(count($fichas ) > 0)

                        @foreach ($fichas as $ficha)

                            <div class="img-square-wrapper">
                                <img class="img-fluid" src="/img/exercicios/{{$ficha->image_exercicio}}" alt="Card image cap">
                            </div>

                            <div class="card-body">
                                <h3 class="card-title">{{$ficha->nome_exercicio}}</h4>
                                <hr>
                                <p class="card-text"><strong> Série: {{$ficha->serie}} </strong></p>
                                <hr>
                                <p class="card-text"><strong> Repetição: {{$ficha->repeticao}} </strong></p>
                                <hr>
                                <p class="card-text"><strong> Carga: {{$ficha->peso}}Kg </strong></p>
                                <hr>
                                <p class="card-text"><strong> Descanso: 00:{{$ficha->descanso}}s </strong></p>
                                <hr>
                                <p class="card-text"><strong> OBS: {{$ficha->desc}} </strong></p>
                                <hr>
                                <p class="card-text" id="criador">Feito por: {{$ficha->name}}</p>
                                <hr>
                            </div>
                            <hr style="width: 100% !important; height: 5px; background-color: #ccc">
                        @endforeach
                    @else
                        <p style="text-align: center;"> Você ainda nao tem uma ficha de treino. <a href="/home"> (Voltar) </a></p>
                    @endif
                </div>
            </div>


        </div>





</div>
<!-- /.container-fluid -->


@endsection
