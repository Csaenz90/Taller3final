<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Departamento as AppDepartamento;
use App\Http\Resources\Predio as AppPredio;
use App\Models\Departamento;
use App\Models\Predio;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();
        return AppDepartamento::collection($departamentos);
    }

    public function show($id)
    {
        $predio = Predio::find($id);
        return new AppPredio($predio);
    }
}
