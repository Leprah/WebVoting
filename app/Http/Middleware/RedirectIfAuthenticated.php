<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
          $level = Auth::user()->level; 
      
          switch ($level) {
            case 'admin':
               return redirect('/webVote/index');
               break;
            case 'voter':
               return redirect('/voter/vote');
               break; 
            default:
               return view('/auth/login');
               break;
          }
        }
        return $next($request);
      }
}
