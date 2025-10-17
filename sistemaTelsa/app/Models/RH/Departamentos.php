<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Departamentos extends Model
{
    protected $fillable = [
        'name',
        'area_id'
    ];
    //relacion 1 a muchos
     //relacion de 1 a muchos inversa
    public function departamentos(){
        return $this->belongsTo(Departamentos::class);
    }
}
