<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartamentoRequest;
use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function index()
    {
        return csrf_token();
    }

    public function store(DepartamentoRequest $request)
    {
        $departamento = $request->all();
        return $departamento;
    }
}
