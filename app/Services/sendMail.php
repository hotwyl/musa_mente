<?php

namespace App\Services;

use App\Mail\NewTest;
use App\Repositorys\TesteRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use stdClass;

class sendMail
{
    public function __construct(TesteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function mailResult($dados)
    {
        try {
            $user = new stdClass();
            $user->name = $dados->nome;
            $user->email = $dados->email;
            $user->link = route('cliente.show', ['chave' => $dados->chave, 'protocolo' => $dados->protocolo]);
            Mail::send(new NewTest($user));
            return true;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
