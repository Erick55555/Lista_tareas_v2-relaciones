<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    use HasFactory;
    protected $filable = [
        "nombre",
        "usuario_id"
    ];

    public function usuario(){
        return $this->belongsTo('App\Models\usuario')->withTimestamps();
    }

}
