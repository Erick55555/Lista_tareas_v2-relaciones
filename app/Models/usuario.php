<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $filable = [
        "nombre",
        "apellido"
    ];

    public function tareas(){
        return $this->hasMany('App\Models\tarea')->withTimestamps();;
    }
    
}
