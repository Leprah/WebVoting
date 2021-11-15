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
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
              <a class="nav-link" href="{{ __('Logout') }}" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>

        </div>

@endsection

@section('tambah')
<div class="container-fluid">
<div id ="right">
            <div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahDataKandidat">
Tambah Data
</button>             
            </div>

            </div>
            </div>
@endsection


@section('content')
<div>
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
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Status</th>
                    <th width="280px">Action</th>
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
                        @if($pemilih->status == '1' )
                          <td class='checkmark'>{{ $pemilih-> status }}</td>
                        @else
                          <td class='cross'>{{ $pemilih->status }}</td>
                        @endif
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
      </div>

@endsection