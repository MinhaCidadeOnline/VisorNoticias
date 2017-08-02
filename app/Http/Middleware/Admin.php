<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        if(!auth()->check()){
            return redirect()->route('admin.login'); 
        }

        return $next($request);
    }
}
