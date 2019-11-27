<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = [
        'nombre_predio',
        'direccion',
        'cedula_cadastral',
        'municipio_id'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function predios()
    {
        return $this->hasMany(Predio::class);
    }
}
