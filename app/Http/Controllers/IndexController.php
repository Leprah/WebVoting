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

        $title = 'Hasil Voting';
        $hasil = [];

        foreach ($kandidat as $key => $kd){
            $id_kandidat = $kd->id;
            $no_urut = $kd->no_urut;
            $total = Voting::where('kandidat_id', $id_kandidat)->count();

            $a['name'] = $no_urut;
            $a['y'] = $total;
            array_push($hasil,$a);
        }
        return view('webVote/index' , compact('kandidat', 'pengaturan' , 'jumlah_pemilih', 'jumlah_kandidat', 'jumlah_voting', 'belum_voting','hasil','title'));
    }

    public function liveCount(){
        $title = 'Hasil Voting';
        $hasil = [];

        foreach ($kandidat as $key => $kd){
            $id_kandidat = $kd->id;
            $nama = $kd->id;
            $total = Voting::where('kandidat_id', $id_kandidat)->count();
            $nama = Kandidat::where('nama', $id_kandidat)->get();

            $a['name'] = $nama + $id;
            $a['y'] = $total;
            array_push($hasil,$a);
        }
        return view('webVote.index', compact('hasil','title'));
    }
}
