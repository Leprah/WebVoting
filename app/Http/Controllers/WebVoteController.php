<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
use App\Pengaturan;
use App\Voting;


class WebVoteController extends Controller
{

    public function dataKandidat(){
        $batas = 6;
        $data_kandidat = Kandidat::orderBy('no_urut', 'asc')->paginate($batas);
        $no = $batas * ($data_kandidat->currentPage() - 1);
        return view('webVote.dataKandidat', compact('data_kandidat', 'no'));
    }

    public function dataPemilih(){
        $batas = 8;
        $data_pemilih = Pemilih::orderBy('nama', 'asc')->paginate($batas);
        $voting = Voting::all();
        $no = $batas * ($data_pemilih->currentPage() - 1);
        return view('webVote.dataPemilih', compact('data_pemilih', 'no','voting'));
    }

    public function pengaturan(){
        return view('webVote.pengaturan');
    }

    public function store_waktu(Request $request){
        $data =new Pengaturan;
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->dt_mulai = $request->dt_mulai;
        $data->dt_akhir = $request->dt_akhir;
    	$data->save();
    	return redirect('webVote/index'); 
    }

    public function statistik(){
        $pengaturan = Pengaturan::first();
        return view('webVote.statistik' , ['pengaturan' => $pengaturan]);
    }

    public function master(){
        return view('webVote.master');
    }


}
