<?php

namespace App\Http\Requests;

use App\Rules\Minuscula;
use Illuminate\Foundation\Http\FormRequest;

class DepartamentoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre_departamento' => ['required', 'string', 'alpha','min:3', new Minuscula]
        ];
    }

    public function attributes()
    {
        return [
            'nombre_departamento' => 'Departamento'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido',
            'min' =>  'El campo :attribute debe tener como minimo :min caracteres',
            'alpha' => 'El campo :attribute solo puede contener letras',
            'string' => 'El campo :attribute debe ser formato texto.',
        ];
    }
}
