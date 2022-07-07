@extends('layout')

@section('title', 'Musa da Mente')

@section('content')

@include('cliente.nav')

    <form id="testForm" action="{{ route('cliente.store') }}" class="needs-validation" novalidate method="post"
        autocomplete="off">

        @csrf

        <!--Seção 0-->
        <section id="section0" lass="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">O primeiro passo para seu autoconhecimento</h2>
                </div>

                <div class="card-body">
                    <p class="card-text"> Como Descobrir e Eliminar a “Força Invisível” Que Domina a Maioria Das Mulheres
                        Após Os 25 Anos.</p>
                    <p class="card-text"> É assustador como a imensa maioria das mulheres acima de 25 anos, desconhecem a
                        “força invisível” que as
                        impede de acreditar e usar seu poder espiritual, intuição, equilíbrio e sensualidade, de como ser
                        uma
                        verdadeira mulher poderosa.</p>
                    <p class="card-text"> Está na hora de uma grande transformação acontecer em sua vida!</p>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-primary btn-lg mx-5" id="btnAvancar0"> Iniciar Teste </button>
                </div>
            </div>
        </section>

        <!--Seção 1-->
        <section id="section1" lass="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">Qual a Deusa predominante em mim?</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 1-->
                    <div class="pt-3" id="question1">
                        <div><strong>A) Como não saio muito, roupas e maquiagem não são tão importantes para
                                mim.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst1o0" name="qst1" value="{{ $dad['opt1']['val'] }}" /> <label
                                class="form-check-label" for="qst1o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst1o1" name="qst1" value="{{ $dad['opt2']['val'] }}" /> <label
                                class="form-check-label" for="qst1o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst1o2" name="qst1" value="{{ $dad['opt3']['val'] }}" /> <label
                                class="form-check-label" for="qst1o2">{{ $dad['opt3']['text'] }}</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst1o3" name="qst1" value="{{ $dad['opt4']['val'] }}" /> <label
                                class="form-check-label" for="qst1o3">{{ $dad['opt4']['text'] }}</label></div>
                    </div>

                    <!--Questão 2-->
                    <div class="pt-4" id="question2">
                        <div><strong>B) Prefiro usar jeans e uma camisa confortável.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst2o0" name="qst2" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst2o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst2o1" name="qst2" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst2o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst2o2" name="qst2" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst2o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst2o3" name="qst2" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst2o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>

                    <!--Questão 3-->
                    <div class="pt-4" id="question3">
                        <div><strong>C) Minha aparência não é nada convencional.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst3o0" name="qst3" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst3o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst3o1" name="qst3" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst3o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst3o2" name="qst3" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst3o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst3o3" name="qst3" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst3o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 4-->
                    <div class="pt-4" id="question4">
                        <div><strong>D) Gosto de me vestir bem, mas de maneira conservadora, e de usar pouca
                                maquiagem.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst4o0" name="qst4" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst4o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst4o1" name="qst4" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst4o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst4o2" name="qst4" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst4o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst4o3" name="qst4" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst4o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 5-->
                    <div class="pt-4" id="question5">
                        <div><strong>E) Gosto de me arrumar e de me mostrar atraente.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst5o0" name="qst5" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst5o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst5o1" name="qst5" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst5o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst5o2" name="qst5" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst5o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst5o3" name="qst5" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst5o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 6-->
                    <div class="pt-4 pb-3" id="question6">
                        <div><strong>F) Estar bem vestida e maquiada me dá segurança para enfrentar o mundo.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst6o0" name="qst6" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst6o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst6o1" name="qst6" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst6o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst6o2" name="qst6" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst6o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst6o3" name="qst6" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst6o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar1"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 2-->
        <section id="section2" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">MEU CORPO (como eu me dou com o corpo)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 7-->
                    <div class="pt-3" id="question7">
                        <div><strong>A) Eu me inclino a não pensar sobre o meu corpo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst7o0" name="qst7" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst7o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst7o1" name="qst7" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst7o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst7o2" name="qst7" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst7o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst7o3" name="qst7" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst7o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 8-->
                    <div class="pt-4" id="question8">
                        <div><strong>B) Meu corpo se sente muito melhor quando estou ativa e fazendo
                                exercícios.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst8o0" name="qst8" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst8o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst8o1" name="qst8" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst8o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst8o2" name="qst8" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst8o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst8o3" name="qst8" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst8o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 9-->
                    <div class="pt-4" id="question9">
                        <div><strong>C) Gosto que meu corpo seja tocado bastante por quem eu amo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst9o0" name="qst9" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst9o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst9o1" name="qst9" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst9o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst9o2" name="qst9" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst9o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst9o3" name="qst9" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst9o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 10-->
                    <div class="pt-4" id="question10">
                        <div><strong>D) Muitas vezes eu absolutamente não me sinto no meu corpo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst10o0" name="qst10" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst10o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst10o1" name="qst10" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst10o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst10o2" name="qst10" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst10o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst10o3" name="qst10" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst10o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 11-->
                    <div class="pt-4" id="question11">
                        <div><strong>E) Acho embaraçoso falar sobre o meu corpo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst11o0" name="qst11" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst11o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst11o1" name="qst11" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst11o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst11o2" name="qst11" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst11o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst11o3" name="qst11" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst11o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 12-->
                    <div class="pt-4 pb-3" id="question12">
                        <div><strong>F) Adora estar grávida/Quero muito engravidar.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst12o0" name="qst12" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst12o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst12o1" name="qst12" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst12o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst12o2" name="qst12" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst12o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst12o3" name="qst12" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst12o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar2"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 3-->
        <section id="section3" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">CASA E LAR (o que tem importância para mim)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 13-->
                    <div class="pt-3" id="question13">
                        <div><strong>A) Gosto que minha casa seja elegante e impressione as pessoas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst13o0" name="qst13" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst13o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst13o1" name="qst13" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst13o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst13o2" name="qst13" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst13o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst13o3" name="qst13" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst13o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 14-->
                    <div class="pt-4" id="question14">
                        <div><strong>B) Prefiro a cidade; para mim um apartamento está ótimo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst14o0" name="qst14" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst14o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst14o1" name="qst14" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst14o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst14o2" name="qst14" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst14o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst14o3" name="qst14" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst14o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 15-->
                    <div class="pt-4" id="question15">
                        <div><strong>C) Minha casa precisa ser aconchegante e ter lugar para todos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst15o0" name="qst15" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst15o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst15o1" name="qst15" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst15o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst15o2" name="qst15" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst15o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst15o3" name="qst15" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst15o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 16-->
                    <div class="pt-4" id="question16">
                        <div><strong>D) Preciso de privacidade e espaço para as coisas que gosto de fazer.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst16o0" name="qst16" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst16o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst16o1" name="qst16" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst16o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst16o2" name="qst16" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst16o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst16o3" name="qst16" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst16o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 17-->
                    <div class="pt-4" id="question17">
                        <div><strong>E) O lugar onde moro tem que ser confortável e bonito.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst17o0" name="qst17" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst17o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst17o1" name="qst17" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst17o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst17o2" name="qst17" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst17o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst17o3" name="qst17" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst17o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 18-->
                    <div class="pt-4 pb-3" id="question18">
                        <div><strong>F) Prefiro viver no campo ou onde eu possa estar perto de parques e espaços
                                abertos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst18o0" name="qst18" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst18o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst18o1" name="qst18" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst18o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst18o2" name="qst18" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst18o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst18o3" name="qst18" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst18o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar3"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 4-->
        <section id="section4" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">Alimentação e comida (a importância para mim)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 19-->
                    <div class="pt-3" id="question19">
                        <div><strong>A) Tomo cuidado com a alimentação afim de manter o meu corpo saudável.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst19o0" name="qst19" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst19o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst19o1" name="qst19" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst19o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst19o2" name="qst19" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst19o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst19o3" name="qst19" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst19o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 20-->
                    <div class="pt-4" id="question20">
                        <div><strong>B) Gosto de jantar fora em algum lugar romântico.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst20o0" name="qst20" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst20o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst20o1" name="qst20" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst20o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst20o2" name="qst20" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst20o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst20o3" name="qst20" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst20o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 21-->
                    <div class="pt-4" id="question21">
                        <div><strong>C) Gosto muito de comer fora onde se possa conversar.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst21o0" name="qst21" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst21o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst21o1" name="qst21" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst21o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst21o2" name="qst21" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst21o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst21o3" name="qst21" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst21o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 22-->
                    <div class="pt-4" id="question22">
                        <div><strong>D) Eu realmente gosto de cozinhar para os outros.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst22o0" name="qst22" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst22o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst22o1" name="qst22" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst22o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst22o2" name="qst22" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst22o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst22o3" name="qst22" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst22o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 23-->
                    <div class="pt-4" id="question23">
                        <div><strong>E) As refeições são momentos familiares importantes.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst23o0" name="qst23" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst23o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst23o1" name="qst23" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst23o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst23o2" name="qst23" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst23o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst23o3" name="qst23" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst23o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 24-->
                    <div class="pt-4 pb-3" id="question24">
                        <div><strong>F) Comer não é uma coisa muito importante para mim.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst24o0" name="qst24" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst24o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst24o1" name="qst24" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst24o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst24o2" name="qst24" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst24o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst24o3" name="qst24" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst24o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar4"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 5-->
        <section id="section5" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">Infância (como eu costumava ser)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 25-->
                    <div class="pt-3" id="question25">
                        <div><strong>A) Eu tinha muitas brincadeiras secretas e muitos mundos imaginários.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q19o0" name="qst25" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst25o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q19o1" name="qst25" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst25o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q19o2" name="qst25" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst25o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q19o3" name="qst25" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst25o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 26-->
                    <div class="pt-4" id="question26">
                        <div><strong>B) Eu sempre dirigia as brincadeiras com as minhas amigas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst26o0" name="qst26" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst26o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst26o1" name="qst26" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst26o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst26o2" name="qst26" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst26o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst26o3" name="qst26" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst26o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 27-->
                    <div class="pt-4" id="question27">
                        <div><strong>C) Eu gostava de brincar basicamente com bonecas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst27o0" name="qst27" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst27o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst27o1" name="qst27" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst27o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst27o2" name="qst27" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst27o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst27o3" name="qst27" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst27o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 28-->
                    <div class="pt-4" id="question28">
                        <div><strong>D) Eu tinha sempre o nariz enfiado num livro, depois de uma certa idade.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst28o0" name="qst28" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst28o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst28o1" name="qst28" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst28o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst28o2" name="qst28" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst28o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst28o3" name="qst28" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst28o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 29-->
                    <div class="pt-4" id="question29">
                        <div><strong>E) Eu adorava estar ao ar livre e entre os animais.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst29o0" name="qst29" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst29o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst29o1" name="qst29" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst29o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst29o2" name="qst29" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst29o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst29o3" name="qst29" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst29o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 30-->
                    <div class="pt-4 pb-3" id="question30">
                        <div><strong>F) Eu adorava me vestir e me arrumar como gente grande.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst30o0" name="qst30" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst30o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst30o1" name="qst30" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst30o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst30o2" name="qst30" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst30o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst30o3" name="qst30" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst30o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar5"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 6-->
        <section id="section6" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">OS HOMENS (o que eu preciso em um)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 31-->
                    <div class="pt-3" id="question31">
                        <div><strong>A) Quero um homem que me excite sexualmente sempre.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst31o0" name="qst31" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst31o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst31o1" name="qst31" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst31o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst31o2" name="qst31" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst31o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst31o3" name="qst31" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst31o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 32-->
                    <div class="pt-4" id="question32">
                        <div><strong>B) Quero um homem que me proteja e me faça mimos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst32o0" name="qst32" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst32o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst32o1" name="qst32" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst32o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst32o2" name="qst32" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst32o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst32o3" name="qst32" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst32o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 33-->
                    <div class="pt-4" id="question33">
                        <div><strong>C) Gosto de um homem que seja independente e me proporcione bastante
                                espaço.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst33o0" name="qst33" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst33o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst33o1" name="qst33" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst33o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst33o2" name="qst33" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst33o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst33o3" name="qst33" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst33o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 34-->
                    <div class="pt-4" id="question34">
                        <div><strong>D) Preciso de um homem que me desafie intelectualmente.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst34o0" name="qst34" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst34o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst34o1" name="qst34" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst34o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst34o2" name="qst34" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst34o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst34o3" name="qst34" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst34o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 35-->
                    <div class="pt-4" id="question35">
                        <div><strong>E) Preciso de um homem que compreenda o meu mundo interior.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst35o0" name="qst35" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst35o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst35o1" name="qst35" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst35o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst35o2" name="qst35" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst35o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst35o3" name="qst35" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst35o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 36-->
                    <div class="pt-4 pb-3" id="question36">
                        <div><strong>F) Quero um homem de cuja posição no mundo eu possa me orgulhar.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst36o0" name="qst36" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst36o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst36o1" name="qst36" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst36o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst36o2" name="qst36" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst36o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst36o3" name="qst36" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst36o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar6"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 7-->
        <section id="section7" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">AMOR E CASAMENTO (o que significa para mim)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 37-->
                    <div class="pt-3" id="question37">
                        <div><strong>A) O casamento só dá certo quando houver uma ligação espiritual maior.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst37o0" name="qst37" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst37o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst37o1" name="qst37" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst37o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst37o2" name="qst37" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst37o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst37o3" name="qst37" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst37o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 38-->
                    <div class="pt-4" id="question38">
                        <div><strong>B) O casamento é o alicerce da sociedade.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst38o0" name="qst38" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst38o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst38o1" name="qst38" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst38o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst38o2" name="qst38" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst38o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst38o3" name="qst38" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst38o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 39-->
                    <div class="pt-4" id="question39">
                        <div><strong>C) O amor é mais importante que tudo; sem ele o meu casamento seria vazio.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst39o0" name="qst39" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst39o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst39o1" name="qst39" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst39o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst39o2" name="qst39" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst39o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst39o3" name="qst39" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst39o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 40-->
                    <div class="pt-4" id="question40">
                        <div><strong>D) Tudo bem com o amor e o casamento, desde que eu tenha bastante
                                liberdade.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst40o0" name="qst40" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst40o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst40o1" name="qst40" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst40o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst40o2" name="qst40" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst40o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst40o3" name="qst40" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst40o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 41-->
                    <div class="pt-4" id="question41">
                        <div><strong>E) O casamento protege os filhos; o amor apenas não é suficiente.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst41o0" name="qst41" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst41o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst41o1" name="qst41" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst41o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst41o2" name="qst41" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst41o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst41o3" name="qst41" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst41o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 42-->
                    <div class="pt-4 pb-3" id="question42">
                        <div><strong>F) Meu casamento às vezes tem que ser sacrificado em função do meu
                                trabalho.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst42o0" name="qst42" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst42o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst42o1" name="qst42" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst42o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst42o2" name="qst42" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst42o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst42o3" name="qst42" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst42o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar7"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 8-->
        <section id="section8" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">SEXUALIDADE (como eu sou na cama)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 43-->
                    <div class="pt-3" id="question43">
                        <div><strong>A) Às vezes é difícil eu me soltar completamente quando faço sexo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst43o0" name="qst43" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst43o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst43o1" name="qst43" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst43o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst43o2" name="qst43" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst43o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst43o3" name="qst43" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst43o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 44-->
                    <div class="pt-4" id="question44">
                        <div><strong>B) Eu me excito facilmente com o homem certo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst44o0" name="qst44" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst44o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst44o1" name="qst44" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst44o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst44o2" name="qst44" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst44o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst44o3" name="qst44" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst44o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 45-->
                    <div class="pt-4" id="question45">
                        <div><strong>C) Às vezes leva um certo tempo até eu de fato entrar no meu corpo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst45o0" name="qst45" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst45o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst45o1" name="qst45" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst45o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst45o2" name="qst45" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst45o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst45o3" name="qst45" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst45o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 46-->
                    <div class="pt-4" id="question46">
                        <div><strong>D) No sexo adoro tanto dar quanto receber.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst46o0" name="qst46" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst46o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst46o1" name="qst46" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst46o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst46o2" name="qst46" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst46o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst46o3" name="qst46" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst46o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 47-->
                    <div class="pt-4" id="question47">
                        <div><strong>E) Eu sou meio tímida sexualmente, mas posso me tornar quase selvagem.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst47o0" name="qst47" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst47o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst47o1" name="qst47" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst47o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst47o2" name="qst47" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst47o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst47o3" name="qst47" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst47o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 48-->
                    <div class="pt-4 pb-3" id="question48">
                        <div><strong>F) O sexo pode ser extático e quase místico para mim.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst48o0" name="qst48" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst48o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst48o1" name="qst48" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst48o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst48o2" name="qst48" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst48o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst48o3" name="qst48" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst48o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar8"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 9-->
        <section id="section9" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">OS FILHOS (o papel deles na minha vida)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 49-->
                    <div class="pt-3" id="question49">
                        <div><strong>A) Sinto-me mais feliz quando estou fazendo alguma coisa ao ar livre com meus
                                filhos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst49o0" name="qst49" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst49o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst49o1" name="qst49" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst49o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst49o2" name="qst49" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst49o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst49o3" name="qst49" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst49o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 50-->
                    <div class="pt-4" id="question50">
                        <div><strong>B) Meus filhos são a maior realização da minha vida.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst50o0" name="qst50" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst50o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst50o1" name="qst50" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst50o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst50o2" name="qst50" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst50o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst50o3" name="qst50" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst50o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 51-->
                    <div class="pt-4" id="question51">
                        <div><strong>C) Eu espero que meus filhos venham a ser um grande crédito a meu favor.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst51o0" name="qst51" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst51o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst51o1" name="qst51" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst51o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst51o2" name="qst51" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst51o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst51o3" name="qst51" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst51o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 52-->
                    <div class="pt-4" id="question52">
                        <div><strong>D) Prefiro não ter filhos para me dedicar à minha carreira.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst52o0" name="qst52" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst52o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst52o1" name="qst52" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst52o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst52o2" name="qst52" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst52o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst52o3" name="qst52" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst52o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 53-->
                    <div class="pt-4" id="question53">
                        <div><strong>E) Eu amo os meus filhos, mas a minha vida amorosa é igualmente
                                importante.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst53o0" name="qst53" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst53o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst53o1" name="qst53" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst53o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst53o2" name="qst53" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst53o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst53o3" name="qst53" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst53o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 54-->
                    <div class="pt-4 pb-3" id="question54">
                        <div><strong>F) Eu amo os meus filhos e quero sempre saber o que estão pensando ou
                                sentindo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst54o0" name="qst54" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst54o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst54o1" name="qst54" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst54o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst54o2" name="qst54" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst54o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst54o3" name="qst54" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst54o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar9"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 10-->
        <section id="section10" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">PASSATEMPOS (coisas que eu gosto de fazer)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 55-->
                    <div class="pt-3" id="question55">
                        <div><strong>A) Metafísica, leitura de tarô, astrologia, diário dos sonhos, Seminários da Nova Era,
                                arte
                                e rituais pessoais.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst55o0" name="qst55" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst55o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst55o1" name="qst55" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst55o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst55o2" name="qst55" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst55o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst55o3" name="qst55" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst55o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 56-->
                    <div class="pt-4" id="question56">
                        <div><strong>B) Colecionar joias, objetos de arte e roupas bonitas; moda, música,
                                teatro.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst56o0" name="qst56" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst56o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst56o1" name="qst56" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst56o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst56o2" name="qst56" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst56o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst56o3" name="qst56" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst56o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 57-->
                    <div class="pt-4" id="question57">
                        <div><strong>C) Esportes, atletismo, correr, acampar, pescar, velejar, montar a cavalo.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst57o0" name="qst57" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst57o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst57o1" name="qst57" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst57o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst57o2" name="qst57" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst57o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst57o3" name="qst57" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst57o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 58-->
                    <div class="pt-4" id="question58">
                        <div><strong>D) Serviços comunitários, clubes sociais, grupos de voluntários, igrejas
                                paroquiais.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst58o0" name="qst58" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst58o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst58o1" name="qst58" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst58o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst58o2" name="qst58" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst58o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst58o3" name="qst58" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst58o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 59-->
                    <div class="pt-4" id="question59">
                        <div><strong>E) Campanhas políticas, apoio a minorias, museus, séries de conferências,
                                leituras.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst59o0" name="qst59" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst59o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst59o1" name="qst59" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst59o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst59o2" name="qst59" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst59o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst59o3" name="qst59" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst59o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 60-->
                    <div class="pt-4 pb-3" id="question60">
                        <div><strong>F) Cozinhar, jardinar, bordar, tecer, costurar.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst60o0" name="qst60" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst60o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst60o1" name="qst60" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst60o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst60o2" name="qst60" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst60o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst60o3" name="qst60" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst60o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar10"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 11-->
        <section id="section11" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">FESTAS (como eu me comporto)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 61-->
                    <div class="pt-3" id="question61">
                        <div><strong>A) Eu geralmente me envolvo em discussões políticas ou intelectuais.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst61o0" name="qst61" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst61o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst61o1" name="qst61" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst61o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst61o2" name="qst61" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst61o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst61o3" name="qst61" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst61o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 62-->
                    <div class="pt-4" id="question62">
                        <div><strong>B) Costumo ser atraída por pessoas com problemas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst62o0" name="qst62" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst62o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst62o1" name="qst62" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst62o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst62o2" name="qst62" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst62o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst62o3" name="qst62" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst62o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 63-->
                    <div class="pt-4" id="question63">
                        <div><strong>C) Prefiro ser a anfitriã das minhas próprias festas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst63o0" name="qst63" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst63o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst63o1" name="qst63" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst63o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst63o2" name="qst63" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst63o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst63o3" name="qst63" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst63o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 64-->
                    <div class="pt-4" id="question64">
                        <div><strong>D) Não consigo de deixar de querer localizar o homem mais sensual do
                                lugar.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst64o0" name="qst64" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst64o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst64o1" name="qst64" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst64o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst64o2" name="qst64" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst64o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst64o3" name="qst64" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst64o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 65-->
                    <div class="pt-4" id="question65">
                        <div><strong>E) Gosto de ter a certeza de que todos estão se divertindo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst65o0" name="qst65" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst65o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst65o1" name="qst65" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst65o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst65o2" name="qst65" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst65o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst65o3" name="qst65" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst65o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 66-->
                    <div class="pt-4 pb-3" id="question66">
                        <div><strong>F) Festas me deixam tensas, não vou muito a elas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst66o0" name="qst66" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst65o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst66o1" name="qst66" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst65o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst66o2" name="qst66" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst65o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst66o3" name="qst66" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst65o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar11"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 12-->
        <section id="section12" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">AMIZADES (o lugar que ocupam em minha vida)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 67-->
                    <div class="pt-3" id="question67">
                        <div><strong>A) A maioria das minhas amigas têm filhos da mesma idade que os meus.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst67o0" name="qst67" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst67o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst67o1" name="qst67" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst67o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst67o2" name="qst67" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst67o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst67o3" name="qst67" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst67o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 68-->
                    <div class="pt-4" id="question68">
                        <div><strong>B) Escolho as minhas amizades com muito cuidado, elas são muito importantes para
                                mim.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst68o0" name="qst68" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst68o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst68o1" name="qst68" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst68o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst68o2" name="qst68" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst68o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst68o3" name="qst68" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst68o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 69-->
                    <div class="pt-4" id="question69">
                        <div><strong>C) Gosto de partilhar minha últimas ideias e projetos com minhas amigas e meus
                                amigos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst69o0" name="qst69" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst69o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst69o1" name="qst69" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst69o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst69o2" name="qst69" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst69o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst69o3" name="qst69" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst69o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 70-->
                    <div class="pt-4" id="question70">
                        <div><strong>D) Minhas amizades tendem a ser amizades mágicas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst70o0" name="qst70" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst70o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst70o1" name="qst70" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst70o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst70o2" name="qst70" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst70o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst70o3" name="qst70" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst70o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 71-->
                    <div class="pt-4" id="question71">
                        <div><strong>E) Minhas amigas são basicamente as esposas do meu marido.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst71o0" name="qst71" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst71o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst71o1" name="qst71" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst71o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst71o2" name="qst71" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst71o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst71o3" name="qst71" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst71o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 72-->
                    <div class="pt-4 pb-3" id="question72">
                        <div><strong>F) Meus amigos são geralmente mais importantes para mim do que as minhas
                                amigas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst72o0" name="qst72" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst72o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst72o1" name="qst72" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst72o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst72o2" name="qst72" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst72o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst72o3" name="qst72" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst72o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar12"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 13-->
        <section id="section13" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">LIVROS (que tipo de livros eu trago por perto)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 73-->
                    <div class="pt-3" id="question73">
                        <div><strong>A) Livros de receitas, de artesanato, de como cuidar de crianças.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst73o0" name="qst73" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst73o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst73o1" name="qst73" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst73o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst73o2" name="qst73" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst73o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst73o3" name="qst73" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst73o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 74-->
                    <div class="pt-4" id="question74">
                        <div><strong>B) Literatura séria, biografias, livros de viagens, historia ilustrada.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst74o0" name="qst74" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst74o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst74o1" name="qst74" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst74o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst74o2" name="qst74" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst74o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst74o3" name="qst74" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst74o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 75-->
                    <div class="pt-4" id="question75">
                        <div><strong>C) Livros da Nova Era, psicologia, metafísica, livros de canalização mediunidade
                                contemporânea), I Ching.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst75o0" name="qst75" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst75o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst75o1" name="qst75" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst75o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst75o2" name="qst75" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst75o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst75o3" name="qst75" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst75o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 76-->
                    <div class="pt-4" id="question76">
                        <div><strong>D) Livros de esporte e saúde, manuais de ioga, livros de animais, da vida selvagem, de
                                como
                                fazer coisas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst76o0" name="qst76" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst76o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst76o1" name="qst76" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst76o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst76o2" name="qst76" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst76o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst76o3" name="qst76" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst76o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 77-->
                    <div class="pt-4" id="question77">
                        <div><strong>E) Livros de artes, biografias populares, romances, poesia.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst77o0" name="qst77" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst77o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst77o1" name="qst77" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst77o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst77o2" name="qst77" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst77o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst77o3" name="qst77" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst77o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 78-->
                    <div class="pt-4 pb-3" id="question78">
                        <div><strong>F) Política, sociologia, livros intelectuais, literatura avant-garde, livros
                                feministas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst78o0" name="qst78" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst78o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst78o1" name="qst78" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst78o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst78o2" name="qst78" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst78o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst78o3" name="qst78" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst78o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar13"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 14-->
        <section id="section14" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">O MUNDO AÍ AFORA (minha atitude)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 79-->
                    <div class="pt-3" id="question79">
                        <div><strong>A) Eu sempre procuro me manter informada sobre o que acontece no mundo.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst79o0" name="qst79" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst79o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst79o1" name="qst79" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst79o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst79o2" name="qst79" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst79o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst79o3" name="qst79" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst79o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 80-->
                    <div class="pt-4" id="question80">
                        <div><strong>B) A política só me interessa pelas intrigas de bastidores.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst80o0" name="qst80" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst80o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst80o1" name="qst80" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst80o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst80o2" name="qst80" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst80o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst80o3" name="qst80" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst80o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 81-->
                    <div class="pt-4" id="question81">
                        <div><strong>C) Eu conheço mais o mundo pelos meus sonhos do que pela TV ou pelos
                                jornais.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst81o0" name="qst81" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst81o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst81o1" name="qst81" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst81o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst81o2" name="qst81" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst81o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst81o3" name="qst81" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst81o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 82-->
                    <div class="pt-4" id="question82">
                        <div><strong>D) Eu raramente sei – ou quero saber! – o que está acontecendo no mundo.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst82o0" name="qst82" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst82o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst82o1" name="qst82" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst82o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst82o2" name="qst82" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst82o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst82o3" name="qst82" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst82o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 83-->
                    <div class="pt-4" id="question83">
                        <div><strong>E) O mundo é basicamente dos homens, eles que se virem.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst83o0" name="qst83" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst83o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst83o1" name="qst83" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst83o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst83o2" name="qst83" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst83o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst83o3" name="qst83" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst83o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                    <!--Questão 84-->
                    <div class="pt-4 pb-3" id="question84">
                        <div><strong>F) É importante para mim ter um papel ativo na comunidade.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst84o0" name="qst84" value={{ $dad['opt1']['val'] }} /> <label
                                class="form-check-label" for="qst84o0">{{ $dad['opt1']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst84o1" name="qst84" value={{ $dad['opt2']['val'] }} /> <label
                                class="form-check-label" for="qst84o1">{{ $dad['opt2']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst84o2" name="qst84" value={{ $dad['opt3']['val'] }} /> <label
                                class="form-check-label" for="qst84o2">{{ $dad['opt3']['text'] }} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="qst84o3" name="qst84" value={{ $dad['opt4']['val'] }} /> <label
                                class="form-check-label" for="qst84o3">{{ $dad['opt4']['text'] }} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-success btn-lg mx-5" id="btnAvancar14"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

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
                            <span class="input-group-text"><i class="bi bi-envelope-open-fill"></i></span>
                            <input type="text" class="form-control" name="nome" id="nome"
                                value="{{ $dad['nome'] ?? old('nome') }}" placeholder="Como devemos te chamar?"
                                aria-label="nome" aria-describedby="nome" required>
                        </div>
                    </div>
                    <div class="pt-3" id="question86">
                        <label for="basic-url" class="form-label">Informe o melhor email para que possamos enviar o
                            resultado do teste.</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-open-fill"></i></span>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ $dad['email'] ?? old('email') }}"
                                placeholder="Informe um endereço de email" aria-label="email" aria-describedby="email"
                                required>
                        </div>
                    </div>
                    <div class="pt-3" id="question87">
                        <label for="basic-url" class="form-label">Informe seu telefone para contato. Preferencialmente
                            WhatsApp.</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-open-fill"></i></span>
                            <input type="text" class="form-control" name="fone" id="fone"
                                value="{{ $dad['fone'] ?? old('fone') }}" placeholder="Informe um numero telefone"
                                aria-label="fone" aria-describedby="fone">
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/function.js"></script>
@stop

@section('js2')

@stop

@section('css')
    <link rel="stylesheet" href="assets/css/style.css" />
@stop
