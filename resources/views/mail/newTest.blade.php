@component('mail::message')
    <h1>Olá {{ $user->name }}</h1>

    <p>Seu teste foi preenchido corretamentee processado o resultado.</p>

    <p>Segue linke para acesso ao seu resultado.</p>

    @component('mail::button', ['url' => $user->link])
        Acessar Resultado do Teste
    @endcomponent
@endcomponent
