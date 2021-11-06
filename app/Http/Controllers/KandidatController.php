<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;

class KandidatController extends Controller
{
    public function create(){
        return view('kandidat.create');
    }
}
