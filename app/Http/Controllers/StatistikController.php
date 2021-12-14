<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
use App\Pengaturan;
use App\Voting;

class StatistikController extends Controller
{

    public function hasilVoting(){
        $kandidat = Kandidat::all();
        $pengaturan = pengaturan::first();
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
        return view('/webVote/statistik', compact('hasil','title','pengaturan'));
    }
}