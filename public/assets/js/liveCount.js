Highcharts.chart('liveCount', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah Suara Total'
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
        data: [{
            name: 'Ana',
            y: 15
        }, {
            name: 'Alief',
            y: 35
        }, {
            name: 'Aveenda',
            y: 50,
        }]
    }]
});