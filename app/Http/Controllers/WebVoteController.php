<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;

class WebVoteController extends Controller
{
    public function index(){
        return view('webVote.index');
    }

    public function dataKandidat(){
        $batas = 5;
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

    public function laporan(){
        return view('webVote.laporan');
    }

    public function statistik(){
        return view('webVote.statistik');
    }


}
