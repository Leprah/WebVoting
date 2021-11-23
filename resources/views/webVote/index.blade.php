@extends('webVote.master')

@section('judul')
<h1>Dashboard</h1>
@endsection

@section('menu')
<div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('webVote.index') }}">
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



@section('content')
      <div class="container-fluid">
          <!-- Card stats -->
          <div class="row">

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">

                <!-- Card body Jumlah Kandidat-->
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                      <div class="icon icon-shape bg-transparent-white text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color:white;">Jumlah Kandidat</h5>
                      <span class="h2 font-weight-bold mb-0" style="color:white;">350,897</span>
                    </div>
                    
                  </div>
                </div>
              
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">

                <!-- Card body Jumlah Pemilih -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                      <div class="icon icon-shape bg-transparent-white text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color:white;">Jumlah Pemilih</h5>
                      <span class="h2 font-weight-bold mb-0" style="color:white;">2,356</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                      <div class="icon icon-shape bg-transparent-white text-white rounded-circle shadow">
                        <i class="ni ni-check-bold"></i>
                      </div>
                    </div>
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color:white;">Sudah Memilih</h5>
                      <span class="h2 font-weight-bold mb-0" style="color:white;">924</span>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Belum Memilih</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-transparent-white text-white rounded-circle shadow">
                      <i class="ni ni-fat-delete"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
    <!-- Page content -->   
    <br>
    <h3>Quick Count</h3>
    <div class='chart' id='liveCount'></div>

</div>

 
 @endsection