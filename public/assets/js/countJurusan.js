var chart = Highcharts.chart('countJurusan', {

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