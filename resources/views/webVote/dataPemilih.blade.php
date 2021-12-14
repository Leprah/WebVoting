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
          <br>
          <br>
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
                    <th style="font-size:12px;" width="30px">No</th>
                    <th style="font-size:12px;">Nama</th>
                    <th style="font-size:12px;">NIM</th>
                    <th style="font-size:12px;">Jurusan</th>
                    <th style="font-size:12px;">Angkatan</th>
                    <th style="font-size:12px;">Status</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <center>
                    @foreach ($voter as $pemilih)
                      <tr>
                        <td>{{ ++$no}}</td>
                        <td>{{ $pemilih->nama }}</td>
                        <td>{{ $pemilih->nim }}</td>
                        <td>{{ $pemilih->jurusan}}</td>
                        <td>{{ $pemilih->angkatan}}</td>
                          <td>
                            @if ($pemilih->status != 0)
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-x" viewBox="0 0 16 16">
                              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            @endif
                          </td>
                        </tr>
                    @endforeach
                  </center>
                </tbody>
              </table>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                {{ $data_pemilih->links() }}
                </ul>
              </nav>
            </div>
          </div>
        </div>
        </div>
        </div>

@endsection