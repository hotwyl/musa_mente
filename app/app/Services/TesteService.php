<?php

namespace App\Services;

use App\Repositorys\TesteRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\{getInformacoes, getTeste, geraResult};

class TesteService
{
    protected $repository;

    public function __construct(TesteRepository $repository, getInformacoes $getinfo,  getTeste $getTeste, geraResult $geraResult)
    {
        $this->repository = $repository;
        $this->getinfo = $getinfo;
        $this->getTeste = $getTeste;
        $this->geraResult = $geraResult;
    }

    public function testeApi($request)
    {
        try {
            $val['info'] = $this->getinfo->getInformacoes($request);
            $val['teste'] = $this->getTeste->getTeste($request);
            $val['geraResult'] = $this->geraResult->geraResult($val);

            // $response = $this->repository->testeApi($request);

            return response()->json($val, 200);
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }
}
