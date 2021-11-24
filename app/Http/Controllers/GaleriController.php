<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Kandidat;
use File;
use Image;

class GaleriController extends Controller
{
    // public function index(){
    //     $batas = 4;
    //     $galeri = Galeri::orderBy('id','desc')->paginate($batas);
    //     return view('galeri.index', compact('galeri'));
    // }

    public function create()
    {
        $buku = Buku::all();
        return view('galeri.create', compact('buku'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_galeri' => 'required|string',
            'keterangan' => 'required|string',
            'foto' => 'required|image',
        ]);
        $galeri = New Galeri;
        $galeri->nama_galeri = $request->nama_galeri;
        $galeri->keterangan = $request->keterangan; 
        $galeri->id_buku = $request->id_buku;

        $galeri->nama_seo = Str::slug($request->judul);

        $file = $request->file('foto');
        $folder_tujuan = 'thumb';
        $namafile = time(). ' . '. $file->getClientOriginalExtension();
        $galeri->foto = $file->move($folder_tujuan, $namafile);

        $galeri->save();
        return redirect('/galeri')->with('pesan','Data galeri Berhasil di Ditambah');
        
    }
    Public function delete($id){
        $galeri = Galeri::find($id);
        File::delete($galeri->foto);
        $galeri->galeri();
        return redirect('galeri.index')->with('pesan','Data habis di hapus');
    }
    public function bukus(){
        return $this->belongsTo('App\Kandidat', 'id', 'id');
    }
}