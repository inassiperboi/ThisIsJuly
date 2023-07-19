<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->guest()){
            abort(403);
        }
        else if(!auth()->user()->isAdmin){
            abort(403);
        }

        return $next($request);
    }
}
