<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuPermitidos extends Controller
{
    //



    public function autenticar(){
        $this->validate(request(),
            ['NombreUsu' => 'string' | 'required']);
    }
}
