<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{

    public function handle($request, Closure $next)
    {
        if(auth()->user()->type == 'admin'){

            return $next($request);

        }else{

        return abort(403,'You Not Allow To Access This Page !');

        }

    }
}
