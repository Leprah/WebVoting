<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
use App\Galeri;

class KandidatController extends Controller
{
    public function create(){
        return view('kandidat.create');
    }

    public function store(Request $request){
        $this->validate($request,[
        'ju' => 'required|string',
        'penulis' => 'required|string|max:30',
        'harga' => 'required|numeric',
        'terbit' => 'required|date',
        ]);
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis; 
        $buku->harga = $request->harga;
        $buku->terbit = $request->terbit;
        $buku->save();
        return redirect('/buku')->with('pesan','Data Buku Berhasil di Simpan');
    }
    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with('pesan','Data Buku Berhasil di Hapus');;
    }
    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('buku.update', ['buku'=>$buku]);
    }
    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku-> judul = $request-> judul;
        $buku-> penulis = $request-> penulis;
        $buku-> harga = $request-> harga;
        $buku-> terbit = $request-> terbit;
        
        $buku->update();
        return redirect('buku')->with('pesan','Data Buku Berhasil di Edit');
    }
}