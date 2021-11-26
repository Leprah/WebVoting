@extends('pemilih.layout')

@section('judul')
<h1>Pengaturan</h1>
@endsection
@section('title')
<div class="container-fluid">
<div id ="left">
<h3>Atur Periode Pemilihan</h3>
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
              <a class="nav-link" href="{{ route('webVote.dataKandidat') }}">
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
              <a class="nav-link active" href="{{ route('webVote.pengaturan') }}">
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
    <div class="container-fluid"> 
        <form action="/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-data">
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Tanggal :</label>
                <div class="col-sm-10">
                <div class="input-control text" data-role="datepicker">
                <input type="text">
                </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <br>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    <a class="btn btn-danger btn-sm" href="/buku"> Batal</a>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
