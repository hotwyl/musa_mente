@extends('layout')

@section('title', 'TESTE DAS DEUSAS')

@section('content')

    @include('cliente.nav')

    @include('includes.alerts')

    <form id="testForm" action="{{ route('cliente.store') }}" class="needs-validation" novalidate method="post"
        autocomplete="off">
        @csrf

        <!--Seção 0-->
        <section id="section0" lass="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">QUAL A DEUSA DOMINANTE EM MIM?</h2>
                </div>

                <div class="card-body">
                    <p class="card-text"> Obs.: Por favor, informe o e-mail atual que você está utilizando, o resultado de
                        seu teste será enviado para o e-mail informado... Em um PDF com o mapeamento das porcentagens de
                        enquadramento em cada perfil de arquétipo de personalidade das Deusas e qual a dominante que melhor
                        te representa! FAÇA UM EXCELENTE TESTE...</p>
                    <p class="card-text"> Ao preencher o questionário assinale as respostas segundo o que você percebe ser e
                        não o que você gostaria de ser. O quanto mais sincera você for, mais congruente serão suas respostas
                        e melhor será a aplicação desta instigante e reveladora autoavaliação.</p>
                    <p class="card-text"> Neste sentido é importante que você saiba que não há resposta certa nem errada,
                        apenas há maior ou menor congruência com o que você acredita SER. Considere todos os papéis
                        atualmente em todas as áreas de sua vida, como um todo, não apenas uma parte. </p>
                    <p class="card-text"> Leia atentamente cada um dos conjuntos com seis afirmações. Em seguida atribua um
                        valor a cada afirmação com um desses valores abaixo:</p>
                    <p class="card-text">
                        <ul>
                            <li>3 = a afirmação aplica-se na <u>Maior parte das vezes</u> a mim</li>
                            <li>2 = a afirmação aplica-se <u>De vez em quando</u> a mim</li>
                            <li>1 = a afirmação só se aplica <u>Às vezes</u> a mim</li>
                            <li>-1 = a afirmação aplica-se <u>Raramente</u> a mim</li>
                        </ul>
                    </p>

                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-primary btn-lg mx-5" id="btnAvancar0"> Iniciar Teste </button>
                </div>
            </div>
        </section>

        <!--Seção de 1 a 14-->
        @foreach ($dad['sessao'] as $keySessao => $valueSessao)
            <section id="section{{ $keySessao }}" lass="my-5">
                <div class="card">
                    <div class="card-header py-3">
                        <h2 class="text-center">{{ $valueSessao['titulo'] }}</h2>
                        <p>
                            <br>
                            @foreach ($dad['instrucao'] as $keyInstrucao => $valueInstrucao)
                                {{ $valueInstrucao }}<br>
                            @endforeach
                        </p>
                    </div>

                    <div class="card-body px-5">

                        @foreach ($valueSessao['questoes'] as $keyQuestoes => $valueQuestoes)
                            <div class="pt-3" id="question{{ $valueQuestoes['num'] }}">

                                <div><strong>{{ $valueQuestoes['pergunta'] }}</strong><br></div>

                                @foreach ($dad['opt'] as $keyOpt => $valueOpt)
                                    <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                            id="{{ $valueQuestoes['id'] . 'o' . $keyOpt }}"
                                            name="{{ $valueQuestoes['id'] }}" value="{{ $valueOpt['val'] }}" />

                                        <label class="form-check-label"
                                            for="{{ $valueQuestoes['id'] . 'o' . $keyOpt }}">{{ $valueOpt['text'] }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    <div class="card-footer py-3 text-center">
                        <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar{{ $keySessao }}">
                            Avançar <i class="bi bi-arrow-right-short"></i></button>
                    </div>
                </div>
            </section>
        @endforeach

        <!--Seção 15-->
        <section id="section15" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">Finalização</h2>
                </div>

                <div class="card-body">

                    <div class="pt-3" id="question85">
                        <label for="basic-url" class="form-label">Informe seu Nome.</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            @if (!empty($dad['nome']))
                                <input type="text" class="form-control" name="nome" id="nome"
                                    value="{{ $dad['nome'] }}" placeholder="Como devemos te chamar?" aria-label="nome"
                                    aria-describedby="nome" required>
                            @else
                                <input type="text" class="form-control validated" name="nome" id="nome"
                                    placeholder="Como devemos te chamar?" aria-label="nome" aria-describedby="nome"
                                    required>
                            @endif
                        </div>
                    </div>
                    <div class="pt-3" id="question86">
                        <label for="basic-url" class="form-label">Informe o melhor email para que possamos enviar o
                            resultado do teste.</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-open-fill"></i></span>
                            @if (!empty($dad['email']))
                                <input type="email" class="form-control validated" name="email" id="email"
                                    value="{{ $dad['email'] }}" placeholder="Informe um endereço de email"
                                    aria-label="email" aria-describedby="email" required>
                            @else
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Informe um endereço de email" aria-label="email" aria-describedby="email"
                                    required>
                            @endif
                        </div>
                    </div>
                    <div class="pt-3" id="question87">
                        <label for="basic-url" class="form-label">Informe seu telefone para contato. Preferencialmente
                            WhatsApp.</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-forward-fill"></i></span>
                            @if (!empty($dad['fone']))
                                <input type="text" class="form-control" name="fone" id="fone"
                                    value="{{ $dad['fone'] }}" placeholder="Informe um numero telefone"
                                    aria-label="fone" aria-describedby="fone">
                            @else
                                <input type="text" class="form-control" name="fone" id="fone"
                                    placeholder="Informe um numero telefone" aria-label="fone" aria-describedby="fone">
                            @endif
                        </div>
                    </div>

                </div>

                <div class="card-footer py-3 text-center">
                    <button type="submit" class="btn btn-primary btn-lg mx-5" id="finalizar"> Finalizar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>
    </form>

    <section class="container">
        <div>
            <p><br></p>
        </div>
    </section>

@stop

@section('js1')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/app.js"></script>
@stop

@section('js2')

@stop

@section('css')
    <link rel="stylesheet" href="assets/css/app.css" />
@stop
