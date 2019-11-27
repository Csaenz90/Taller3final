<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Municipio extends JsonResource
{

    public function toArray($request)
    {
        return [
          'nombre_municipio' => $this->nombre_municipio,
          'predios' => Predio::collection($this->predios),
        ];
    }
}
