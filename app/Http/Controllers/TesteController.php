<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreTesteRequest;
use App\Http\Requests\TesteRequest;
use App\Http\Requests\UpdateTesteRequest;
use App\Services\{TesteService, logarService};
use illuminate\Support\Facades\Auth;

class TesteController extends Controller
{
    protected $service;
    protected $logar;

    public function __construct(TesteService $service, logarService $logar)
    {
        /*$this->middleware('auth', ['except'=>[
            'login', 'logar', 'testeApi', 'show', 'index', 'store'
        ]]);*/
        $this->service = $service;
        $this->logar = $logar;
    }

    public function login(){
        return $this->logar->login();
    }

    public function logar(Request $request){
        return $this->logar->logar($request);
    }

    public function logout(){
        return $this->logar->logout();
    }

    public function testeApi(Request $request)
    {
        return $this->service->testeApi($request->all());
    }

    public function show()
    {
        return $this->service->show();
    }

    public function index()
    {
        return $this->service->index();
    }

    public function store(TesteRequest $request)
    {
        return $this->service->store($request->all());
    }

    public function admin()
    {
        return $this->service->admin();
    }

    public function fake()
    {
        return $this->service->fake();
    }
}
