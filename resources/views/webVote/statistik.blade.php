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
    <h2><center> Nama Pemilihan </center></h2>
    <!-- Hasil pemilihan -->
    <!-- <div class="container-fluid"> -->
        <h3>Quick Count</h3>
        <div class='chart' id='liveCount'></div>
    <!-- </div> -->
    <br>
    <div>
        <div class="row justify-content-between" style="position:relative; margin-right:50px margin-left:50px">
            <div class='chart' id='batang' style="width:40%"></div>
            <div class='chart' id='batang' style="width:40%"></div>
        </div>
    </div>
</div>
@endsection