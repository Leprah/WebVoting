@extends('webVote.master')

@section('judul')
<h1>Data Pemilih</h1>
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
              <a class="nav-link active" href="{{ route('webVote.dataPemilih') }}">
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
              <a class="nav-link" href="{{ route('webVote.laporan') }}">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
            </li>
            
          </ul>
          <hr class="my-3">
          <!-- Heading -->
         
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
              @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
              @endguest
            </li>
          </ul>
          

        </div>

@endsection

@section('tambah')
<div class="container-fluid">
<div id ="right">
<a class="btn btn-success" href="{{ route('pemilih.create') }}"> Tambah Data</a>
</div>
</div>

@endsection

@section('search')
<div class="container-fluid">
    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
    </div>
@endsection


@section('content')
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
 

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-color">
                  <tr>
                    <th style="font-size:12px;">No</th>
                    <th style="font-size:12px;">Nama</th>
                    <th style="font-size:12px;">NIM</th>
                    <th style="font-size:12px;">Jurusan</th>
                    <th style="font-size:12px;">Angkatan</th>
                    <th style="font-size:12px;">Status</th>
                    <th style="font-size:12px;" width="280px">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach ($data_pemilih as $pemilih)
                    <tr>
                        <td>{{ ++$no}}</td>
                        <td>{{ $pemilih->nama }}</td>
                        <td>{{ $pemilih->nim }}</td>
                        <td>{{ $pemilih->jurusan}}</td>
                        <td>{{ $pemilih->angkatan}}</td>
                        <td>{{ $pemilih->status}}</td>

                        <td><center>
                        <a href="/webVote/pemilih/edit/{{ $pemilih->id }}"><button type="button" class="btn btn-primary"> Edit</button></a>
                        <a href="/webVote/pemilih/delete/{{ $pemilih->id }}"><button type="button" class="btn btn-danger"> Hapus</button></a>
                        </center></td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            
          </div>
        </div>

@endsection