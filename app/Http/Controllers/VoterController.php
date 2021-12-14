<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Kandidat;
use App\Pemilih;
use App\Voting;
use App\Pengaturan;

class VoterController extends Controller
{
    public function voter(){
        $batas = 3;
        $skrg = Carbon::now();
        $pengaturan = Pengaturan::first(); 
        // $voting = Voting::all();
        $kandidat = Kandidat::orderBy('no_urut', 'asc')->paginate($batas);
        $no = $batas * ($kandidat->currentPage() - 1);

        $hasil = [];

        foreach ($kandidat as $key => $kd){
            $id_kandidat = $kd->id;
            $no_urut = $kd->no_urut;
            $total = Voting::where('kandidat_id', $id_kandidat)->count();

            $a['name'] = $no_urut;
            $a['y'] = $total;
            array_push($hasil,$a);
        }

        return view('voter/vote' , compact('kandidat', 'pengaturan', 'skrg', 'hasil'));

    }

}
