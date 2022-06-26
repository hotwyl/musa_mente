<?php

namespace App\Repositorys;

use App\Models\Teste;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TesteRepository
{
    public function __construct()
    {
        ini_set('max_execution_time', 999);
        ini_set('memory_limit', '256M');
        ini_set('max_input_time', 999);
    }

    public function testeApi($request)
    {
        return $request;
    }
}
