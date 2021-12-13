<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Galeri;
use Image;
use File;

class KandidatController extends Controller
{
    public function create(){
        return view('kandidat.create');
    }

    public function store(Request $request){
        $this->validate($request,[
        'no_urut' => 'required|numeric',
        'nama' => 'required|string',
        'nim' => 'required|string',
        'angkatan' => 'required|numeric',
        'visi' => 'required',
        'misi' => 'required',
        'foto' => 'required|mimes:jpeg,jpg,png'
        ]);
        $data = new Kandidat;
        $data->no_urut = $request->no_urut;
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->jurusan = $request->jurusan;
        $data->angkatan = $request->angkatan;
        $data->visi = $request->visi; 
        $data->misi = $request->misi;

        $foto = $request->foto;
        $namafile = time().'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->resize(150,150)->save('thumb/'.$namafile);
        $foto->move('image/', $namafile);
        $data->foto = $namafile;
        $data->save();
        return redirect('webVote/dataKandidat')->with('pesan','Data Kandidat Berhasil disimpan');
    }
    public function destroy($id){
        $data = Kandidat::find($id);
        $data->delete();
        return redirect('webVote/dataKandidat')->with('pesan','Data Kandidat Berhasil dihapus');;
    }

    public function edit($id){
        $kandidat = Kandidat::find($id);
        return view('kandidat.edit', compact('kandidat'));
    }

    public function update(Request $request, $id)
    {
        $data = Kandidat::find($id);
        $data->no_urut = $request->no_urut;
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->jurusan = $request->jurusan;
        $data->angkatan = $request->angkatan;
        $data->visi = $request->visi;
        $data->misi = $request->misi;
        
        if ($request->foto!= NULL) {
            $oldfilename = $data->foto;
            $image_path = "thumb/" . $oldfilename;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $foto = $request->foto;
            $namafile = time() . '.' . $foto->getClientOriginalExtension();

            Image::make($foto)->resize(200, 150)->save('thumb/' . $namafile);
            $foto->move('images/', $namafile);

            $data->foto = $namafile;
        }

        $data->update();
        return redirect('webVote/dataKandidat')->with('pesan', 'Data Galeri Berhasil diedit');
    }

}