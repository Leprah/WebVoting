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