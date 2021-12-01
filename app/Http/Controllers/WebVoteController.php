<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
use App\Pengaturan;


class WebVoteController extends Controller
{
    public function index(){
        $jumlah_kandidat = Kandidat::count();
        $data_kandidat = Kandidat:: all();
        $pengaturan = Pengaturan::all();
        return view('webVote.index', compact('jumlah_kandidat', 'data_kandidat', 'pengaturan' ));
    }

    public function dataKandidat(){
        $batas = 6;
        $data_kandidat = Kandidat::orderBy('no_urut', 'asc')->paginate($batas);
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

    public function store_waktu(Request $request){
        $data =new Pengaturan;
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->dt_mulai = $request->dt_mulai;
        $data->dt_akhir = $request->dt_akhir;
    	$data->save();
    	return redirect('webVote/index'); 
    }

    public function statistik(){
        return view('webVote.statistik');
    }

    public function master(){
        return view('webVote.master');
    }

    public function voter(){
        $batas = 6;
        $kandidat = Kandidat::orderBy('no_urut', 'asc')->paginate($batas);
        $no = $batas * ($kandidat->currentPage() - 1);
        $pengaturan = Pengaturan::all();
        return view('voter/vote' , ['kandidat' => $kandidat, 'pengaturan'=>$pengaturan]);
    }

}
