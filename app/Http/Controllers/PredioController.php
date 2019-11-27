<?php

namespace App\Http\Controllers;

use App\Http\Requests\PredioRequest;
use Illuminate\Http\Request;

class PredioController extends Controller
{
    public function store(PredioRequest $request)
    {
        $predio = $request->all();
        return $predio;
    }
}
