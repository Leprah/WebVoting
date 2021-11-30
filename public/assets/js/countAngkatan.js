var chart = Highcharts.chart('countAngkatan', {

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