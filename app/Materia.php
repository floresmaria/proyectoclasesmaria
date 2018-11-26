<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
   protected $fillable = [
        'nombrem','image',
    ];


    public function clase()
   {
   		return $this ->hasOne('App\Clase'); 
   }


}
