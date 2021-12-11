<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
use App\Voting;
use App\Pengaturan;

class VoterController extends Controller
{
    public function voter(){
        $batas = 6;
        $pengaturan = Pengaturan::first(); 
        $voting = Voting::all();
        $kandidat = Kandidat::orderBy('no_urut', 'asc')->paginate($batas);
        $no = $batas * ($kandidat->currentPage() - 1);
        return view('voter/vote', compact('kandidat', 'pengaturan','voting'));

    }

}
