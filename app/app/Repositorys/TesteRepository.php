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

    public function testeApi($request)
    {
        return $this->repository->create($request);
    }

    public function pdf($url)
    {
        $uuid = $url[1] ? $url[1] : false;
        $protocolo = $url[2] ? $url[2] : false;
        if (empty($uuid) || empty($protocolo) ) {
            return null;
        } else {
            return $this->repository->where('url', $uuid)->where('protocolo', $protocolo)->first();
        }
    }
}
