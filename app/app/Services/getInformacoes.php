<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class getInformacoes
{
    public function getInformacoes($dados)
    {
        try {

            $info['nome'] = !empty($dados['nome']) ? $dados['nome'] : '';
            $info['email'] = !empty($dados['email']) ? $dados['email'] : '';
            $info['fone'] = !empty($dados['fone']) ? $dados['fone'] : '';
            $info['protocolo'] = date('z') . date('W') . date('t') . date('w') . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s');
            $info['data'] = date("Y-m-d H:i:s");

            return $info;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
