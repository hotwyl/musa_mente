<?php

namespace App\Repositorys;

use App\Models\Teste;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TesteRepository
{
    protected $teste;

    public function __construct(Teste $teste)
    {
        $this->repository = $teste;
    }

    public function buscarTeste($url)
    {
        try {
            $chave = $url[1] ? $url[1] : false;
            $protocolo = $url[2] ? $url[2] : false;
            if (empty($chave) || empty($protocolo)) {
                return null;
            } else {
                return $this->repository->where('deletado', 0)->where('chave', $chave)->where('protocolo', $protocolo)->first();
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function listarTeste()
    {
        try {
            return $this->repository->where('deletado', 0)->orderBy('data', 'desc')->get();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function salvarTeste($request)
    {
        try {
            return $this->repository->create($request);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function psq_mail($request)
    {
        try {
            return $this->repository->where('deletado', 0)->where('email', $request)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // public function send_mail($request)
    // {
    //     try {
    //         return $this->repository->where('deletado', 0)->where('email', $request)->first();
    //     } catch (\Throwable $th) {
    //         throw $th;
    //     }
    // }
}
