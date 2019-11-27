<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Departamento extends JsonResource
{

    public function toArray($request)
    {
        return [
            'nombre_departamento' => $this->nombre_departamento,
            'municipios' => $this->municipios,
            'predios' => Predio::collection($this->predios)
        ];
    }
}
