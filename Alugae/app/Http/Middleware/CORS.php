<?php

namespace App\Http\Middleware;

use Closure;

class CORS
{

    public function handle($request, Closure $next)
    {
        $resposta = $next($request);

        $resposta ->header('Access-Control-Allow-Origin' , 'http://localhost:8000')
                  ->header('Access-Control-Allow-Methods' , 'GET, POST, PUT, DELETE, OPTIONS' )
                  ->header('Access-Control-Allow-Headers' , 'Authorization, Content-Type' );
        
        return $resposta;
    }
}
