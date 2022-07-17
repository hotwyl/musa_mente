@component('mail::message')
<h1>Olá {{$user->name}}</h1>

<p>Seu teste foi preenchido corretamentee processado o resultado.</p>

<p>Segue linke para acesso ao seu resultado.</p>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/a74ccb8b-6311-495b-a752-9bf83ce27cef/62c9159c23a501892731609072022054356'])
Acessar Resultado do Teste
@endcomponent


@endcomponent
