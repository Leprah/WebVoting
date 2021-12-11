<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
use App\Pengaturan;
use App\Voting;

class IndexController extends Controller
{
    public function index(){
        $batas = 3;
        $pengaturan = Pengaturan::first(); 
        $jumlah_pemilih = Pemilih::all()->count(); 
        $jumlah_kandidat = kandidat::all()->count();
        $jumlah_voting = Voting::all()->count();
        $belum_voting = $jumlah_pemilih - $jumlah_voting;
        $kandidat = Kandidat::orderBy('no_urut', 'asc')->paginate($batas);
        $no = $batas * ($kandidat->currentPage() - 1);
        return view('webVote.index' , compact('kandidat', 'pengaturan' , 'jumlah_pemilih', 'jumlah_kandidat', 'jumlah_voting', 'belum_voting'));
    }

}
