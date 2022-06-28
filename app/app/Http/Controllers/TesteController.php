<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreTesteRequest;
use App\Http\Requests\UpdateTesteRequest;
use App\Services\TesteService;

class TesteController extends Controller
{
    protected $service;

    public function __construct(TesteService $service)
    {
        $this->service = $service;
    }

    public function testeApi(Request $request)
    {
        return $this->service->testeApi($request->all());
    }

    public function pdf()
    {
        return $this->service->pdf();
    }

}
