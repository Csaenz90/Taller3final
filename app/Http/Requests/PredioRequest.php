<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PredioRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre_predio' => 'required|string|min:3',
            'direccion' => 'required|min:3|alpha_num|max:10',
            'cedula_cadastral' => 'required|integer|min:5',
            'municipio_id' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'nombre_predio' => 'Predio',
            'cedula_cadastral' => '# Cadastral',
            'municipio_id' => 'Municipio'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido',
            'min' =>  'El campo :attribute debe tener como minimo :min caracteres',
            'max' =>  'El campo :attribute debe tener como maximo :max caracteres',
            'alpha_num' => 'El campo :attribute debe puede contener letras y numeros',
            'string' => 'El campo :attribute debe ser formato texto.',
            'integer' => 'Este campo debe ser numerico',
        ];
    }
}
