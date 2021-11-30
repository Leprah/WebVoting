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

@section('tambah')
<div class="container-fluid">
  <a class="btn btn-success btn-sm" href="{{ route('kandidat.create') }}" id="right"> Tambah Data</a>
  <br>
  <br>
  <br>
</div>

@endsection



@section('content')    
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-color" >
                  <tr style="font-size:12px;">
                    <th style="font-size:12px;">No</th>
                    <th style="font-size:12px;">Foto</th>
                    <th style="font-size:12px;">Nama</th>
                    <th style="font-size:12px;">Visi</th>
                    <th style="font-size:12px;">Misi</th>
                    <th style="font-size:12px;" width="80px">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach ($data_kandidat as $kandidat)
                    <tr>
                        <td>{{ ++$no}}</td>
                        <td><img src="{{asset('thumb/'.$kandidat->foto) }}" width="100px"></td>
                        <td>{{ $kandidat->nama }}</td>
                        <td>{!! $kandidat->visi !!}</td>
                        <td>{!! $kandidat->misi !!}</td>
                        <td>
                          <a href="/kandidat/edit/{{ $kandidat->id }}"><button type="button" class="btn btn-sm btn-ungu"> Edit</button></a>
                          <a href="/kandidat/delete/{{ $kandidat->id }}"><button type="button" class="btn btn-sm btn-danger" onClick="return confirm('Yakin mau dihapus?')"> Hapus</button></a>
                          </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            
          </div>
        </div>
        </div>
        </div>
                               

@endsection

