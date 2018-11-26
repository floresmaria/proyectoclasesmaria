<?php   

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $fillable = [
        'materia_id','contenido_id', 'nombreclase', 'profesor', 'cupos',
    ];


     public function materia()
   {
   		return $this ->hasOne('App\Materia'); //materia_id
   }



   }
