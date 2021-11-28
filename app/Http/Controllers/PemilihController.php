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
        $this->validate($request,[
        'nama' => 'required|string',
        'nim' => 'required|string',
        'jurusan' => 'required|string',
        'angkatan' => 'required|string',
        
        ]);
        $data = new pemilih;
        $data->nama = $request->nama;
        $data->nim = $request->nim; 
        $data->jurusan = $request->jurusan;
        $data->angkatan = $request->angkatan;
        $data->jurusan = $request->jurusan;

        $data->save();
        return redirect('webVote/dataKandidat')->with('pesan','Data Kandidat Berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        $data = Kandidat::find($id);
        $data->nama = $request->nama;
        $data->nim = $request->nim; 
        $data->jurusan = $request->jurusan;
        $data->angkatan = $request->angkatan;
        $data->update();
        return redirect('webVote/dataKandidat')->with('pesan', 'Data Galeri Berhasil diedit');
    }

    public function edit(){
        return view('pemilih.edit');
    }

    public function voting(){
        $data = new Voting;
        $data->kandidat_id= $id;
        $data->user_id = \Auth::users()->id;
        $data->save();

        \Session::flash('sukses','Data berhasil');
        return redirect('voter/vote');
    }
}