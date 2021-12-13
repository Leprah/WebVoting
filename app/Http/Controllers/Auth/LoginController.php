<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function redirectTo() {
        $level = Auth::user()->level; 
        switch ($level) {
            case 'admin':
                return route('webVote.index');
                break;
            case 'voter':
                return route('voter.vote');
                break;
            default:
                return route('/logout');
                break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
