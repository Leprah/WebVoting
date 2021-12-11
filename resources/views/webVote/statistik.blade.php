@extends('webVote.master')

@section('judul')
<h1>Statistik</h1>
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
                <i class="ni ni-single-02 "></i>
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
              <a class="nav-link active" href="{{ route('webVote.statistik') }}">
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
<div class="container-fluid">
    @if($pengaturan)
    <h1 style="font-family:Montserrat;"><center>{{ $pengaturan->nama_kegiatan }}</center></h1>
    @else
    <h1 style="font-family:Montserrat;"><center> Statistik Pemilihan</center></h1>
    @endif
    <br>
    <!-- Hasil pemilihan -->
    <div class='chart' id='liveCount'></div>
    <br>
    <!-- Penggunaan Hak Pilih -->
    <div class='chart' id='suara'></div>
    <br>
    <div>
        <div class="row justify-content-between" style="position:relative; margin:2px">
            <div class='chart' id='jmlAngkatan' style="width:48%"></div>
            <div class='chart' id='jmlJurusan' style="width:48%"></div>
        </div>
    </div>
    <br>
    <div>
        <div class="row justify-content-between" style="position:relative; margin:2px">
            <div class='chart' id='countAngkatan' style="width:48%"></div>
            <div class='chart' id='countJurusan' style="width:48%"></div>
        </div>
    </div>
</div>
@endsection