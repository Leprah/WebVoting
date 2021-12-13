<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
use App\Pengaturan;
use App\Voting;

class StatistikController extends Controller
{
    public function jumlahAngkt(){
        //
    }

    public function suara(){
        // 
    }
    
    public function suaraAngkatan(){
        // 
    }

    public function jumlahJurusan(){
        // 
    }

    public function suaraJurusan(){
        //
    }

    public function hasilVoting(){
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
        return view('webVote.statistik', compact('hasil','title'));
    }
}
