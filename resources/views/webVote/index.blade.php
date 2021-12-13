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
      <a class="nav-link" href="{{ route('webVote.statistik') }}">
        <i class="ni ni-chart-bar-32"></i>
        <span class="nav-link-text">Statistik</span>
      </a>
    </li>
    <li class="nav-itemS">
      <a class="nav-link" href="{{ route('webVote.pengaturan') }}">
        <i class="ni ni-settings-gear-65"></i>
        <span class="nav-link-text">Pengaturan</span>
      </a>
    </li>
    </ul>
    <hr class="my-3">
    <!-- Heading -->
    <!-- Navigation -->
    <!-- <ul class="navbar-nav mb-md-3">
      <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
          <i class="ni ni-spaceship"></i>
          <span class="nav-link-text">Getting started</span>
        </a>
      </li>
    </ul> -->
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
                      @if($kandidat != NULL)
                      <span class="h1 font-weight-bold mb-0" style="color:white;">{{ $jumlah_kandidat }}</span>
                      @else
                      <span class="h1 font-weight-bold mb-0" style="color:white;">0</span>
                      @endif
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
                      <span class="h1 font-weight-bold mb-0" style="color:white;">{{ $jumlah_pemilih }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body Sudah Memilih -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                      <div class="icon icon-shape bg-transparent-white text-white rounded-circle shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                          <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                        </svg>
                      </div>
                    </div>
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color:white;">Sudah Memilih</h5>
                      <span class="h1 font-weight-bold mb-0" style="color:white;">{{ $jumlah_voting }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body Belum Memilih-->
                <div class="card-body">
                  <div class="row">
                  <div class="col-auto">
                      <div class="icon icon-shape bg-transparent-white text-white rounded-circle shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                          <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                        </svg>
                      </div>
                    </div>
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color:white;">Belum Memilih</h5>
                      <span class="h1 font-weight-bold mb-0" style="color:white;">{{ $belum_voting }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <!-- Page content -->
          <br> 
          <div class="row"> 
            <div class="card-ds mg-chrt">
              <h3>Quick Count</h3>
              <div class='chart left' id='liveCount' ></div>

              <script src="https://code.highcharts.com/highcharts.js"></script>
              @if($hasil != NULL)
              <script type="text/javascript">
                  Highcharts.chart('liveCount',{
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: {!! json_encode($title) !!}
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                          colors: [
                                '#A12568', 
                                '#FEC260',
                                '#2A0944',
                                '#24CBE5', 
                                '#64E572', 
                                '#FF9655', 
                                '#FFF263', 
                                '#6AF9C4'
                              ],
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                        name: 'Kandidat',
                        colorByPoint: true,
                        data: {!! json_encode($hasil) !!}
                    }]
                  });
              </script>
              @else
              <p>Kandidat Belum ada, Silakan tambahkan kandidat</p>
              @endif
            </div>
            <div class="card-ds mg-cd-pr">
              <h3>Countdown</h3>
              <div class='bdr-ds'>
                <div class="text-countdown">
                @if($pengaturan)
                <script>
                    CountDownTimer('{{$pengaturan->dt_awal}}', 'countdown');
                    function CountDownTimer(dt, id)
                    {
                      var end = new Date('{{$pengaturan->dt_akhir}}');
                      var _second = 1000;
                      var _minute = _second * 60;
                      var _hour = _minute * 60;
                      var _day = _hour * 24;
                      var timer;
                      function showRemaining() {
                        var now = new Date();
                        var distance = end - now;
                        if (distance < 0) {
                          clearInterval(timer);
                          document.getElementById(id).innerHTML = '<b>Pemilihan Berakhir</b> ';
                          return;
                        }
                        var days = Math.floor(distance / _day);
                        var hours = Math.floor((distance % _day) / _hour);
                        var minutes = Math.floor((distance % _hour) / _minute);
                        var seconds = Math.floor((distance % _minute) / _second);

                        document.getElementById(id).innerHTML = days + ' : ';
                        document.getElementById(id).innerHTML += hours + ' : ';
                        document.getElementById(id).innerHTML += minutes + ' : ';
                        document.getElementById(id).innerHTML += seconds + '';
                      }
                      timer = setInterval(showRemaining, 1000);
                    }
                  </script>
                  <div id="countdown"></div>
                @else
                <span id="hari">00</span><span> : </span>
                <span id="jam">00</span><span> : </span>
                <span id="menit">00</span><span> : </span>
                <span id="detik">00</span>
                @endif
                </div>
              </div>
              <br>
              <h3>Perolehan Suara</h3>
              <div class='bdr-ds'>
              @if($hasil != NULL)
                @foreach ($hasil as $hs)
                <table cellpadding="4">
                    <tr>
                        <td>Kandidat {{ $hs['name'] }}</td>
                        <td> : </td>
                        <td>{{ $hs['y'] }}</td>
                        <td>suara</td>
                    </tr>
                </table>
                @endforeach
              @else
              <ul type="none">
                      <li> </li>
                      
                      
              </ul>
              @endif
              </div>
            </div>
          </div>
</div>
@endsection


   