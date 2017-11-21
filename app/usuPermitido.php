<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuPermitido extends Model
{
    //
    protected $table = 'controlAcceso';
    protected $fillable = ['NombreUsu', 'permiso'];

    public function siPermiso($permiso){
        if ($permiso == 1){

        }
    }

}
