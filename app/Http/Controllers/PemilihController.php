<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilihController extends Controller
{
    public function create(){
        return view('pemilih.create');
    }

    public function destroy($id){
        $users = Buku::find($id);
        $users->delete();
        return redirect('webVote.dataPemilih')->with('Pesan','User Berhasil di Hapus');;
    }

    public function store(Request $request){

    }
}
