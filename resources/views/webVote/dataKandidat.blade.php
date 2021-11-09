@extends('webVote.master')

@section('judul')
<h1>Data Kandidat</h1>
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
<a class="btn btn-success" href="{{ route('kandidat.create') }}"> Tambah Buku</a>
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
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach ($data_kandidat as $kandidat)
                    <tr>
                        <td>{{ ++$no}}</td>
                        <td><img src="/image/{{ $kandidat->image }}" width="100px"></td>
                        <td>{{ $kandidat->nama }}</td>
                        <td>{{ $kandidat->visi }}</td>
                        <td>{{ $kandidat->misi}}</td>
                        <td><center>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDataKandidat">Edit</button>
                        <a href="/webVote/kandidat/delete/{{ $kandidat->id }}"><button type="button" class="btn btn-danger"> Hapus</button></a>
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

