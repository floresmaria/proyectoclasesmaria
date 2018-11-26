<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $fillable = [
        'nombrec','objetivo',
    ];


    public function clase()
   {
   		return $this ->hasOne('App\Clase'); //materia_id
   }

}
