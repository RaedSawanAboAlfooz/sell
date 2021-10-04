<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{

    public function handle(Request $request, Closure $next)
    {
      // rol == 1    ==> admin  else users
      if (Auth::user()->rol){
        return $next($request);
      }
      return redirect('/');
    }
}
