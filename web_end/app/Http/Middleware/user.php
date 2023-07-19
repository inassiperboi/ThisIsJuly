<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user
{
    public function handle(Request $request, Closure $next)
    {
      
        if(auth()->user()->isAdmin){
            abort(403);
        }

        return $next($request);
    }
}
