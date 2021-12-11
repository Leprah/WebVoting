<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
use App\Pengaturan;

class IndexController extends Controller
{
    public function index(){
        $batas = 3;
        $pengaturan = Pengaturan::first(); 
        $kandidat = Kandidat::orderBy('no_urut', 'asc')->paginate($batas);
        $no = $batas * ($kandidat->currentPage() - 1);
        return view('webVote.index' , ['kandidat' => $kandidat, 'pengaturan' => $pengaturan]);
    }

}
