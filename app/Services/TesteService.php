<?php

namespace App\Services;

use App\Repositorys\TesteRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\{getTeste, sendMail, questTest};
use Illuminate\Routing\Route;

class TesteService
{
    protected $repository;
    protected $getTeste;
    protected $sendMail;
    protected $questTest;

    public function __construct(TesteRepository $repository, getTeste $getTeste, sendMail $sendMail, questTest $questTest)
    {
        $this->repository = $repository;
        $this->getTeste = $getTeste;
        $this->sendMail = $sendMail;
        $this->questTest = $questTest;
    }

    public function testeApi($request)
    {
        try {
            $val = $this->getTeste->getTeste($request);

            $response = $this->repository->salvarTeste($val);

            return response()->json($response, 200);
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
        $var = $this->questTest->questTest();

        return view('cliente.index', [
            'dad' => $var
        ]);
    }

    public function store($request)
    {
        try {

            $val = $this->getTeste->getTeste($request);

            $response = $this->repository->salvarTeste($val);

            if (!in_array($response, [null, false])) {

                $send = $this->sendMail->mailResult($response);

                if ($send) {
                    dd($send);
                    return view('cliente.obg', [
                        'resultado' => $response
                    ]);
                } else {
                    return redirect()->back();
                }
            } else {
                return view('404');
            }
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 401);
        }
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

    public function fake()
    {
        $data = file_get_contents('http://dev.3wonline.com/api/public/api/json/fakePessoa');
        $dadosSite = json_decode($data, true);

        foreach ($dadosSite as $key => $value) {
            $val = [-1, 1, 2, 3];
            for ($i = 1; $i <= 84; $i++) {
                $num = rand(0, 3);
                $post["qst$i"] = $val[$num];
            }

            $post["nome"] = $value['nome'];
            $post["email"] = $value['email'];
            $post["fone"] = $value['celular'];

            if ($val = $this->getTeste->getTeste($post)) {
                if ($response = $this->repository->salvarTeste($val)) {
                    $fake[] = $response;
                };
            };
        }

        return redirect()->route('cliente.index');
    }
}
