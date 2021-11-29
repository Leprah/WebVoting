<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;

class WebVoteController extends Controller
{
    public function index(){
        $jumlah_kandidat = Kandidat::count();
        return view('webVote.index', compact('jumlah_kandidat'));
    }

    public function dataKandidat(){
        $batas = 6;
        $jumlah_kandidat = Kandidat::count();
        $data_kandidat = Kandidat::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($data_kandidat->currentPage() - 1);
        return view('webVote.dataKandidat', compact('data_kandidat', 'no'));
    }

    public function dataPemilih(){
        $batas = 10;
        $data_pemilih = Pemilih::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($data_pemilih->currentPage() - 1);
        return view('webVote.dataPemilih', compact('data_pemilih', 'no'));
    }

    public function pengaturan(){
        return view('webVote.pengaturan');
    }

    public function statistik(){
        return view('webVote.statistik');
    }

    public function master(){
        return view('webVote.master');
    }
    public function voter(){
        $batas = 6;
        $data_kandidat = Kandidat::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($data_kandidat->currentPage() - 1);
        return view('voter.vote', compact('data_kandidat', 'no'));
    }

    public function visi($id){
        $dt = Kandidat::find($id);

        return response()->json([
            'hasil' => $dt
        ]);
        
    }

}
