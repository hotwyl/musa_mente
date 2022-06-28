<?php

namespace App\Services;

use App\Repositorys\TesteRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\{getTeste, geraResult};
use Illuminate\Routing\Route;

class TesteService
{
    protected $repository;

    public function __construct(TesteRepository $repository, getTeste $getTeste, geraResult $geraResult)
    {
        $this->repository = $repository;
        $this->getTeste = $getTeste;
        $this->geraResult = $geraResult;
    }

    public function testeApi($request)
    {
        try {
            $val = $this->getTeste->getTeste($request);

            //$val['geraResult'] = $this->geraResult->geraResult($val);

            $response = $this->repository->testeApi($val);

            return response()->json($val, 200);
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function pdf()
    {
        $response = $this->repository->pdf(explode('/', $_SERVER["REQUEST_URI"]));

        return view('cliente.resultado', [
            'resultado' => $response
        ]);
    }
}
