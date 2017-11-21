<?php

namespace App\Http\Middleware;

use Closure;

class usuPermitido
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $nombre = $request -> $nombreUsu;
        $permiso = $request -> $permiso;

        if ($permiso == 1){
            redirect('siPermiso');
        } else {
            redirect('noPermiso');
        }

        //return $next($request);
    }
}
