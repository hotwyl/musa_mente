<?php

namespace App\Services;

use App\Mail\NewTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use stdClass;

class sendMail
{
    public function mailResult($dados)
    {
        try {
            $result = false;

            $user = new stdClass();
            $user->name = 'Fulano da Silva';
            $user->email = 'contato@olhavenda.com';

            //$send = Mail::send(new NewTest($user));
            return new NewTest($user);

            return $result;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
