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
        <!-- Form Input Periode -->
        <form action="{{route('webVote.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-data">
                  <div class="form-group row">
                      <label for="nama_kegiatan" class="col-sm-2 col-form-label">Pemilihan :</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan Pemilihan">
                          <span class="text-form">
                          Masukkan nama kegiatan pemilihan Anda.
                          </span>
                      </div>
                  </div>
                  
                  <div class="form-group row">
                  <label for="mulai_pv" class="col-sm-2 col-form-label">Periode Voting :</label>
                  <div class="col">
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                        <i class="ni ni-watch-time"></i>
                        </div>
                      </div>
                      <input type="datetime-local" class="form-control" name="dt_mulai">
                      <span class="text-form">
                      Masukkan tanggal dan waktu mulainya kegiatan pemilihan Anda.
                    </span>
                    </div>
                  </div>
                  <div class="col">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                          <i class="ni ni-watch-time"></i>
                          </div>
                        </div>
                        <input type="datetime-local"  name="dt_akhir" class="form-control">
                        <span class="text-form">
                        Masukkan tanggal dan waktu berakhirnya kegiatan pemilihan Anda.
                      </span>
                      </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="mulai" class="col-sm-2 col-form-label">Periode Pengumuman :</label>
                  <div class="col">
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                        <i class="ni ni-watch-time"></i>
                        </div>
                      </div>
                      <input type="datetime-local" class="form-control" name="pg_mulai">
                      <span class="text-form">
                      Masukkan tanggal dan waktu mulainya pengumuman hasil kegiatan Anda.
                    </span>
                    </div>
                  </div>
                  <div class="col">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                          <i class="ni ni-watch-time"></i>
                          </div>
                        </div>
                        <input type="datetime-local"  name="pg_akhir" class="form-control">
                        <span class="text-form">
                        Masukkan tanggal dan waktu berakhirnya pengumuman hasil kegiatan Anda.
                      </span>
                      </div>
                  </div>
                </div>

                

                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                    <br>
                      <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                      <a class="btn btn-danger btn-sm" href="{{route('webVote.pengaturan')}}"> Batal</a>
                </div>
            </div>
            </form>
        </div>

@endsection
