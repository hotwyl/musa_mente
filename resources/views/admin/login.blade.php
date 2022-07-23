@extends('layout')

@section('title', 'Login Admin')

@section('content')

    <div class="body text-center m-5">
        <form class="form-signin m-5" method="POST" autocomplete="off">
            @csrf
            <h1 class="h3 fw-normal">Area Restrita</h1>

            <div class="mt-3">@include('includes.alerts')</div>


            <div class="form-floating my-5">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-5">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Senha">
                <label for="floatingPassword">Senha</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Acessar</button>
        </form>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="assets/css/login.css">
@stop

@section('js1')

@stop

@section('js2')

@stop
