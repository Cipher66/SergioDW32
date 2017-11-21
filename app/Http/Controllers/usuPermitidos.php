<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuPermitidos extends Controller
{
    //



    public function autenticar(){


        $nombreUsu=request()->get('nombreUsu');
        
        $usuPermitido = new usuPermitido();
        $usuPermitido -> nombreUsu = $nombreUsu;
        $usuPermitido->save();
        return (view('/siPermiso'));

    }
}
