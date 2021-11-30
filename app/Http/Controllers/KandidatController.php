<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Pemilih;
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
        'nama' => 'required|string',
        // 'visi' => 'required|text',
        // 'misi' => 'required|text',
        // 'foto' => 'required|image|mimes: jpg,png,jpeg',
        ]);
        $data = new Kandidat;
        $data->nama = $request->nama;
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
        $data->nama = $request->nama;
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