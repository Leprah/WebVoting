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
        <script src="https://code.highcharts.com/highcharts.js"></script>
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
    <br>
    <!-- Penggunaan Hak Pilih -->
    <div class='chart' id='suara'></div>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script type="text/javascript">
            Highcharts.chart('suara', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Penggunaan Hak Pilih'
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
                    name: 'Penggunaan',
                    colorByPoint: true,
                    data: [{
                        name: 'Menggunakan Hak Pilih',
                        y: 15
                    }, {
                        name: 'Tidak Menggunakan Hak Pilih',
                        y: 35
                    }]
                }]
            });
      </script>
    <br>
    <div>
        <div class="row justify-content-between" style="position:relative; margin:2px">
            <div class='chart' id='jmlAngkatan' style="width:48%"></div>
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script type="text/javascript">
                Highcharts.chart('jmlAngkatan', {
                  chart: {
                      type: 'column'
                  },
                  title: {
                      text: 'Jumlah Voter Berdasarkan Angkatan'
                  },
                  
                  accessibility: {
                      announceNewData: {
                          enabled: true
                      }
                  },
                  xAxis: {
                      type: 'category'
                  },
                  yAxis: {
                      title: {
                          text: 'Jumlah Voter'
                      }

                  },
                  legend: {
                      enabled: false
                  },
                  plotOptions: {
                      series: {
                          borderWidth: 0,
                          dataLabels: {
                              enabled: true,
                              format: '{point.y:.1f}'
                          }
                      }
                  },

                  series: [
                      {
                          name: "Voter",
                          colorByPoint: true,
                          data: [
                              {
                                  name: "Angkatan 2019",
                                  y: 32,
                                  drilldown: "Angkatan 2019"
                              },
                              {
                                  name: "Angkatan 2020",
                                  y: 38,
                                  drilldown: "Angkatan 2020"
                              },
                              {
                                  name: "Angkatan 2021",
                                  y: 43,
                                  drilldown: "Angkatan 2021"
                              },
                          ]
                      }
                  ],
                });
              </script>
            <div class='chart' id='jmlJurusan' style="width:48%"></div>
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script type="text/javascript">
                Highcharts.chart('jmlJurusan', {
                  chart: {
                      type: 'column'
                  },
                  title: {
                      text: 'Jumlah Voter Berdasarkan Jurusan'
                  },
                  
                  accessibility: {
                      announceNewData: {
                          enabled: true
                      }
                  },
                  xAxis: {
                      type: 'category'
                  },
                  yAxis: {
                      title: {
                          text: 'Jumlah Voter'
                      }

                  },
                  legend: {
                      enabled: false
                  },
                  plotOptions: {
                      series: {
                          borderWidth: 0,
                          dataLabels: {
                              enabled: true,
                              format: '{point.y:.1f}'
                          }
                      }
                  },

                  series: [
                      {
                          name: "Voter",
                          colorByPoint: true,
                          data: [
                              {
                                  name: "TRI",
                                  y: 32,
                                  drilldown: "TRI"
                              },
                              {
                                  name: "TRPL",
                                  y: 38,
                                  drilldown: "TRPL"
                              },
                              {
                                  name: "TRE",
                                  y: 43,
                                  drilldown: "TRE"
                              },
                              {
                                  name: "TRIK",
                                  y: 43,
                                  drilldown: "TRIK"
                              },
                          ]
                      }
                  ],
                });
              </script>
        </div>
    </div>
    <br>
    <div>
        <div class="row justify-content-between" style="position:relative; margin:2px">
          <div class='chart' id='countAngkatan' style="width:48%"></div>

            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script type="text/javascript">
              Highcharts.chart('countAngkatan', {
                chart: {
                    type: 'column'
                },

                title: {
                    text: 'Jumlah Suara Berdasarkan Angkatan'
                },

                legend: {
                    align: 'right',
                    verticalAlign: 'middle',
                    layout: 'vertical'
                },

                xAxis: {
                    categories: ['Angkatan 2019', 'Angkatan 2020', 'Angkatan 2021'],
                    labels: {
                        x: -10
                    }
                },

                yAxis: {
                    allowDecimals: false,
                    title: {
                        text: 'Jumlah Pemilih'
                    }
                },

                series: [{
                    name: 'Ana',
                    data: [5, 10, 15]
                }, {
                    name: 'Alief',
                    data: [15, 10, 5]
                }, {
                    name: 'Aveenda',
                    data: [10, 10, 10]
                }],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                align: 'center',
                                verticalAlign: 'bottom',
                                layout: 'horizontal'
                            },
                            yAxis: {
                                labels: {
                                    align: 'left',
                                    x: 0,
                                    y: -5
                                },
                                title: {
                                    text: null
                                }
                            },
                            subtitle: {
                                text: null
                            },
                            credits: {
                                enabled: false
                            }
                        }
                    }]
                }
                });
            </script>

          <div class='chart' id='countJurusan' style="width:48%"></div>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script type="text/javascript">
              Highcharts.chart('countJurusan', {
                chart: {
                    type: 'column'
                },

                title: {
                    text: 'Jumlah Suara Berdasarkan Jurusan'
                },

                legend: {
                    align: 'right',
                    verticalAlign: 'middle',
                    layout: 'vertical'
                },

                xAxis: {
                    categories: ['TRI', 'TRPL', 'TRE', 'TRIK'],
                    labels: {
                        x: -10
                    }
                },

                yAxis: {
                    allowDecimals: false,
                    title: {
                        text: 'Jumlah Pemilih'
                    }
                },

                series: [{
                    name: 'Ana',
                    data: [5, 10, 15, 18]
                }, {
                    name: 'Alief',
                    data: [15, 10, 5, 18]
                }, {
                    name: 'Aveenda',
                    data: [10, 10, 10, 18]
                }],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                align: 'center',
                                verticalAlign: 'bottom',
                                layout: 'horizontal'
                            },
                            yAxis: {
                                labels: {
                                    align: 'left',
                                    x: 0,
                                    y: -5
                                },
                                title: {
                                    text: null
                                }
                            },
                            subtitle: {
                                text: null
                            },
                            credits: {
                                enabled: false
                            }
                        }
                    }]
                }
              });
            </script>
        </div>
    </div>
</div>
@endsection