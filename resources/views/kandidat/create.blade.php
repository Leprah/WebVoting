@extends('Pemilih.layout')

@section('judul')
<h1>Data Kandidat</h1>
@endsection
@section('title')
<div class="container-fluid">
<div id ="left">
<h3>Tambah Data Kandidat</h3>
</div>
</div>

@endsection
@section('kembali')
<div class="container-fluid">
<div class ="right">
<a class="btn btn-primary btn-sm" href="{{ route('webVote.dataKandidat') }}"> Kembali</a>
</div>
</div>


@endsection

@section('menu')
<div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('webVote.index') }}">
                <i class="ni ni-tv-2 text-white"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('webVote.dataKandidat') }}">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Data Kandidat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('webVote.dataPemilih') }}">

                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Data Pemilih</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('webVote.statistik') }}">
                <i class="ni ni-chart-bar-32"></i>
                <span class="nav-link-text">Statistik</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('webVote.pengaturan') }}">
                <i class="ni ni-settings-gear-65"></i>
                <span class="nav-link-text">Pengaturan</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <!-- Heading -->
         
          <!-- Navigation -->
      
          
        </div>

@endsection

@section('content')

@if (count($errors) > 0)
  <ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

<div class="container-fluid">
<!-- Form Input Data Kandidat -->
<form action="{{route('kandidat.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-data">
        <div class="form-group row">
            <label for="no_urut" class="col-sm-2 col-form-label">No. Urut :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="no_urut" placeholder="Nomor Urut" value="{{ old('no_urut') }}">
                <span class="text-form">
                Masukkan nomor urut Anda.
                </span>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                <span class="text-form">
                Nama yang diisikan adalah nama sesuai dokumen KTP/KTM.
                </span>
            </div>
        </div>

        <div class="form-group row">
            <label for="nim" class="col-sm-2 col-form-label">NIM :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nim" placeholder="NIM" value="{{ old('nim') }}">
                <span class="text-form">
                NIM yang diisikan adalah NIM sesuai dokumen KTM.
                </span>
            </div>
        </div>
    
        <div class="form-group row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jurusan" placeholder="Jurusan" value="{{ old('jurusan') }}">
                <span class="text-form">
                Silahkan isi jurusan Anda.
                </span>
            </div>
        </div>

        <div class="form-group row">
            <label for="angkatan" class="col-sm-2 col-form-label">Angkatan :</label>
            <div class="col-sm-10">
            <select name="angkatan" class="form-control">
                <option selected>Angkatan</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
            </select>
            </div>
        </div>
    
        <div class="form-group row">
            <label for="visi" class="col-sm-2 col-form-label">Visi :</label>
            <div class="col-sm-10">
            <textarea name="visi" id="summernote2" rows="10" class="form-control">{{ old('visi') }}</textarea>
            <span class="text-form"> Silahkan isikan visi Anda dalam bentuk list angka </span>
            </div>
        </div>
    
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Misi :</label>
            <div class="col-sm-10">
            <textarea name="misi" id="summernote" rows="10" class="form-control">{{ old('misi') }}</textarea>
             <span class="text-form"> Silahkan isikan misi Anda dalam bentuk list angka </span>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Foto :</label>
            <div class="col-sm-10">
            <input type="file" name="foto" class="form-control" placeholder="image">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <br>
              <button type="submit" class="btn btn-success btn-sm">Simpan</button>
              <a class="btn btn-danger btn-sm" href="{{ url()->previous() }}"> Batal</a>
        </div>
    </div>
    </form>
</div>

@endsection
