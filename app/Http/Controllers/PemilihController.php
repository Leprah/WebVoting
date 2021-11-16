<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilihController extends Controller
{
    public function create(){
        return view('pemilih.create');
    }
}
