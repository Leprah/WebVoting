@extends('Pemilih.layout')

@section('judul')
<h1>Data Kandidat</h1>
@endsection
@section('title')
<div class="container-fluid">
<div id ="left">
<h3>Edit Data Kandidat</h3>
</div>
</div>
@endsection
@section('kembali')
<div class="container-fluid">
<div id ="right">
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
              <a class="nav-link" href="profile.html">
              <a class="nav-link" href="{{ route('webVote.statistik') }}">
                <i class="ni ni-chart-bar-32"></i>
                <span class="nav-link-text">Statistik</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.html">
              <a class="nav-link" href="{{ route('webVote.pengaturan') }}">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Laporan</span>
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
<form action="{{route('kandidat.update', $kandidat->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-data">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $kandidat->nama}}">
            </div>
            <span class="text-form">
              Nama yang diisikan adalah nama sesuai dokumen KTP/KTM.
            </span>
        </div>
    
        <div class="form-group row">
            <label for="visi" class="col-sm-2 col-form-label">Visi :</label>
            <div class="col-sm-10">
            <textarea name="visi" id="summernote2" rows="10" class="form-control">{{ $kandidat->visi}}</textarea>
            </div>
            <span class="text-form kotak-plus color-pth"><br>
              +
            </span><span class="text-form pd-fm"> Tambah visi </span>
        </div>
    
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Misi :</label>
            <div class="col-sm-10">
            <textarea name="misi" id="summernote" rows="10" class="form-control">{{ $kandidat->misi}}</textarea>
            </div>
            <span class="text-form kotak-plus color-pth"><br>
              +
            </span><span class="text-form pd-fm"> Tambah misi </span>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Foto :</label>
            <div class="col-sm-10">
            <input type="file" name="foto" class="form-control" placeholder="image">
            <img src="/thumb/{{ $kandidat->foto }}" width="200px">  
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
