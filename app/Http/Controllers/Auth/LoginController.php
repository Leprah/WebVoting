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
                return view('webVote.index');
                break;
            case 'voter':
                return view('voter.vote');
                break;
            default:
                return view('/'); 
                break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
