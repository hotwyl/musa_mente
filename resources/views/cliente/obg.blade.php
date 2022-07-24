@extends('layout')

@section('title', 'TESTE DAS DEUSAS')

@section('content')

    @include('cliente.nav')

    <section id="section16" class="my-5">
        <div class="card">
            <div class="px-3 py-5 my-5 text-center">
                <i class="bi bi-emoji-laughing" style="font-size: 5rem;"></i>
                <h1 class="display-5 fw-bold">Teste Finalizado com Sucesso</h1>
                <div class="col-lg-6 mx-auto">

                    <p class="lead mb-4">Em breve você receberá o link do resultado deste teste no email informado.</p>
                    <p class="lead mb-4">Ao acessar seu email Verefique se o email não está no lixo eletrônico ou em span.
                    </p>

                    <div><a class="btn btn-secondary btn-lg mx-5" href="{{ route('cliente.index') }}" role="button"
                            aria-disabled="true"><i class="bi bi-house"></i> Inicio</a></div>

                </div>
            </div>
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
