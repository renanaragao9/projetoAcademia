@extends('layouts.dashphone')


@section('title', 'Fichas')


@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- srktok vai servir para pegar a primeira palavra da string antes do espaço. Ou seja o primeiro nome. -->
        <h4 class="divH m-0 font-weight-bold text-dark" id="bvs" style="font-size: 30px" ><h4 class="divH m-0 font-weight-bold text-dark" style="font-size: 30px" id="boas-vindas">{{ strtok(Auth::user()->name, " ") }}.</h4></h4>
        <p style="font-size: 20px">Seja bem-vindo(a) de volta!</p>
        @if(count($fichas ) > 0)

        <hr style="width: 100% !important; height: 1px; background-color: #ccc">

        <div class="divH m-0 font-weight-bold text-dark col-xl-3 col-md-6 mb-4" id="titulo-1"><label><strong style="font-size: 30px">Menu inicial</strong></label></div>

        <hr style="width: 100% !important; height: 1px; background-color: #ccc">

            @foreach ($dash as $das)
                <div class="col-xl-3 col-md-6 mb-4">
                    <a class="nav-link" href="/{{$das->nome_gpexercicios}}">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                            <span class="span-title"><strong>Ficha: {{$das->nome_gpexercicios}}</strong></span>
                                    </div>

                                    <div class="col-auto">
                                        <img class="icon-home" src="/img/icon/alter.png" alt="Icon-alters">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <hr style="width: 100% !important; height: 1px; background-color: #ccc">
            @endforeach
        @else
            <p style="text-align: center;"> Você ainda não tem um plano de treino, contate o israel e solicite a sua ficha.</p>
        @endif

        <div class="col-xl-3 col-md-6 mb-4">
            <a class="nav-link" href="/avaliacao-view">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                    <span class="span-title"> <strong>Avaliação</strong> </span>
                            </div>

                            <div class="col-auto">
                                <img class="icon-home" src="/img/icon/avaliacao-1.png" alt="Icon-avaliacao">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <hr style="width: 100% !important; height: 1px; background-color: #ccc">

        <div class="col-xl-3 col-md-6 mb-4">
            <a class="nav-link" href="/report">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <span class="span-title"><strong> Reportar elogios, sugestões ou críticas. </strong></span>
                            </div>

                            <div class="col-auto">
                                <img class="icon-home" src="/img/icon/report.png" alt="Icon-reports">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <hr style="width: 100% !important; height: 1px; background-color: #ccc">

        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                    <span class="span-title"><strong> Dicas. </strong></span> <br>
                                    <span class="span-title"><a href="https://olhardigital.com.br/2017/03/30/dicas-e-tutoriais/como-criar-atalhos-para-sites-na-tela-inicial-do-android/" class="nav-link span-title" target="_blank" rel="noopener noreferrer">Para criar um icone na tela inicial do celular (android)</a></span>
                                    <span class="span-title"><a href="https://tecnoblog.net/responde/como-colocar-um-atalho-de-site-do-chrome-no-inicio-do-iphone/#:~:text=Siga%20os%20passos%20abaixo%3A,em%20%E2%80%9CAdicionar%E2%80%9D%20para%20concluir." class="nav-link span-title" target="_blank" rel="noopener noreferrer">Para criar um icone na tela inicial do celular (Iphone)</a></span>
                                    <span class="span-title"><a href="https://www.techtudo.com.br/noticias/2016/11/como-baixar-sites-para-acessar-offline-no-google-chrome-para-android.ghtml" class="nav-link span-title" target="_blank" rel="noopener noreferrer">Para usar o site offline (Android)</a></span>
                                    <span class="span-title"><a href="https://canaltech.com.br/navegadores/como-salvar-uma-pagina-para-ler-sem-internet-no-celular/" class="nav-link span-title" target="_blank" rel="noopener noreferrer">Para usar o site offline (Iphone)</a></span>
                            </div>
                            <div class="col-auto">
                                <img class="icon-home" src="/img/icon/dicas.png" alt="Icon-dica">
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</div>
<hr>
@endsection
