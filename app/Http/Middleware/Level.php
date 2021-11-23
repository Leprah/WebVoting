<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class Level{

  public function handle($request, Closure $next, String $level) {
    if (!Auth::check()) // This isnt necessary, it should be part of your 'auth' middleware
      return redirect('/auth.login');

    $user = Auth::user();
    if($user->level == $level)
      return $next($request);

    return redirect('/auth.login');
  }
}