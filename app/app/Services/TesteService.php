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

            $response = $this->repository->salvarTeste($val);

            return response()->json($val, 200);
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function show()
    {
        try {
            $response = $this->repository->buscarTeste(explode('/', $_SERVER["REQUEST_URI"]));

            if (!in_array($response, [null, false])) {
                return view('cliente.show', [
                    'resultado' => $response
                ]);
            } else {
                return view('404');
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }

    public function index()
    {
        !empty($_GET["nome"]) ? $var['nome'] = strip_tags(addslashes(trim(htmlspecialchars($_GET["nome"])))):'';
        !empty($_GET["email"]) ? $var['email'] = strip_tags(addslashes(trim(htmlspecialchars($_GET["email"])))):'';
        !empty($_GET["fone"]) ? $var['fone'] = strip_tags(addslashes(trim(htmlspecialchars($_GET["fone"])))):'';

        $var['opt1'] = ["text"=>"Raramente", "val"=>-1];
        $var['opt2'] = ["text"=>"As vezes", "val"=>-1];
        $var['opt3'] = ["text"=>"De vez em quando", "val"=>-2];
        $var['opt4'] = ["text"=>"Maior parte das vezes", "val"=>-3];

        return view('cliente.index', [
                    'dad' => $var
                ]);
    }

    public function store($request)
    {

        // try {
        //     $response = $this->repository->salvarTeste($request);

        //     if (!in_array($response, [null, false])) {
        //         return view('cliente.obg', [
        //             'resultado' => $response
        //         ]);
        //     } else {
        //         return view('404');
        //     }
        // } catch (\Exception $ex) {
        //     return response()->json($ex->getMessage(), 401);
        // }
    }

    public function admin()
    {
        try {
            $response = $this->repository->listarTeste();
            // dd($response);
            if (!in_array($response, [null, false])) {
                return view('admin.index', [
                    'resultado' => $response
                ]);
            } else {
                return view('404');
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
    }
}
