<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Predio extends JsonResource
{

    public function toArray($request)
    {
        return [
            'nombre_predio' => $this->nombre_predio,
            'direccion' => $this->direccion,
            'cedula_cadastral' => $this->cedula_cadastral,
        ];
    }
}
