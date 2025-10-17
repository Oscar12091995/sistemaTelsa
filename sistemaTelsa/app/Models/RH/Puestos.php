<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Puestos extends Model
{
    protected $fillable = [
        'name',
        'descripcion_puesto',
        'num_plazas',
        'departamento_id',
    ];
    //relacion 1 a muchos departamentos
    public function departamentos(){
        return $this->hasMany(Departamentos::class);
    }

}
