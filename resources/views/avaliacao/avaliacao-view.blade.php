@extends('layouts.dashphone')


@section('title', 'Avaliacao')


@section('content')

<!-- Iniciar conteúdo da página -->
<div class="container-fluid">

    @if(count($avaliacao ) > 0)
        <!-- Mensagem de criação de grupo muscular -->
        <br>
        <!-- Título da página -->
        @foreach ($avaliacao as $avaliacao)
            <!-- Exemplo de DataTales -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><strong>Avaliação de {{$avaliacao->name}}</strong></label></div>
                    <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><i class="fa fa-bullseye"></i> Objetivo: <br> <strong>{{$avaliacao->objetivo}}</strong></label></div>
                    <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><i class="fa fa-calendar"></i> Data de início: <br> <strong>{{date( 'd/m/Y', strtotime($avaliacao->dataInicio))}}</strong></label></div>
                    <div class="divH m-0 font-weight-bold text-dark" id="titulo-1"><label><i class="fa fa-clock"></i> Prazo: <br> <strong>{{$avaliacao->prazo}}</strong></label></div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <div class="divH m-0 font-weight-bold text-dark col-xl-3 col-md-6 mb-4" id="titulo-1"><label><strong >Medidas (circunferência)</strong></label></div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-secondary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                                <span class="font-weight-bold span-title-2"><strong>Peso: {{$avaliacao->peso}} Kg</strong></span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <img class="icon-home" src="/img/icon/peso.png" alt="Icon-fita">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Altura: {{$avaliacao->altura}}m</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/altura.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Braço: {{$avaliacao->braco}}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Antebraço: {{$avaliacao->antebraco}}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Ombro: {{$avaliacao->ombro }}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Peitoral: {{$avaliacao->peitoral}}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Cintura: {{$avaliacao->cintura}}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Abdômen: {{$avaliacao->abdomen}}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Quadril: {{$avaliacao->quadril}}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Coxa: {{$avaliacao->coxa}}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong>Panturrilha: {{$avaliacao->panturrilha}}cm</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/medindo.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="divH m-0 font-weight-bold text-dark col-xl-3 col-md-6 mb-4" id="titulo-1"><label><strong> Bioimpedância </strong></label></div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong> Gordura: {{$avaliacao->gordura}}%</strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/gordura.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong> Massa magra: {{$avaliacao->massa}} Kg </strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/massa-magra.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                            <span class="font-weight-bold span-title-2"><strong> IMC: {{$avaliacao->imc}} Kg/m² </strong></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="icon-home" src="/img/icon/balanca.png" alt="Icon-fita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p style="text-align: center;"> Você ainda não tem nehuma avaliação no momento, contate o israel e solicite a sua avaliação.</p>
    @endif
</div>
    <!-- /.container-fluid -->

<hr>

@endsection
