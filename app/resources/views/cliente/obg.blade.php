@extends('layout')

@section('title', 'Musa da Mente')

@section('content')

@include('cliente.nav')

<section id="section16" class="my-5">
    <div class="card">
        <div class="px-3 py-5 my-5 text-center">
            <i class="bi bi-emoji-laughing" style="font-size: 5rem;"></i>
            <h1 class="display-5 fw-bold">Teste Finalizado com Sucesso</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                    world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
                    grid system, extensive prebuilt components, and
                    powerful JavaScript plugins.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                    impedit, laudantium, dolores atque consectetur quo possimus praesentium ratione blanditiis numquam
                    nam saepe! Facilis corporis
                    eaque amet quam hic dignissimos ratione.</p>
            </div>
        </div>
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
