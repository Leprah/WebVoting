// Create the chart
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
    // drilldown: {
    //     series: [
    //         {
    //             name: "Angkatan 2019",
    //             id: "Angkatan 2019",
    //             data: [
    //                 [
    //                     "v65.0",
    //                     0.1
    //                 ],
    //                 [
    //                     "v64.0",
    //                     1.3
    //                 ],
    //                 [
    //                     "v63.0",
    //                     53.02
    //                 ],
    //                 [
    //                     "v62.0",
    //                     1.4
    //                 ],
    //                 [
    //                     "v61.0",
    //                     0.88
    //                 ],
    //                 [
    //                     "v60.0",
    //                     0.56
    //                 ],
    //                 [
    //                     "v59.0",
    //                     0.45
    //                 ],
    //                 [
    //                     "v58.0",
    //                     0.49
    //                 ],
    //                 [
    //                     "v57.0",
    //                     0.32
    //                 ],
    //                 [
    //                     "v56.0",
    //                     0.29
    //                 ],
    //                 [
    //                     "v55.0",
    //                     0.79
    //                 ],
    //                 [
    //                     "v54.0",
    //                     0.18
    //                 ],
    //                 [
    //                     "v51.0",
    //                     0.13
    //                 ],
    //                 [
    //                     "v49.0",
    //                     2.16
    //                 ],
    //                 [
    //                     "v48.0",
    //                     0.13
    //                 ],
    //                 [
    //                     "v47.0",
    //                     0.11
    //                 ],
    //                 [
    //                     "v43.0",
    //                     0.17
    //                 ],
    //                 [
    //                     "v29.0",
    //                     0.26
    //                 ]
    //             ]
    //         },
    //         {
    //             name: "Angkatan 2020",
    //             id: "Angkatan 2020",
    //             data: [
    //                 [
    //                     "v58.0",
    //                     1.02
    //                 ],
    //                 [
    //                     "v57.0",
    //                     7.36
    //                 ],
    //                 [
    //                     "v56.0",
    //                     0.35
    //                 ],
    //                 [
    //                     "v55.0",
    //                     0.11
    //                 ],
    //                 [
    //                     "v54.0",
    //                     0.1
    //                 ],
    //                 [
    //                     "v52.0",
    //                     0.95
    //                 ],
    //                 [
    //                     "v51.0",
    //                     0.15
    //                 ],
    //                 [
    //                     "v50.0",
    //                     0.1
    //                 ],
    //                 [
    //                     "v48.0",
    //                     0.31
    //                 ],
    //                 [
    //                     "v47.0",
    //                     0.12
    //                 ]
    //             ]
    //         },
    //         {
    //             name: "Angkatan 2021",
    //             id: "Angkatan 2021",
    //             data: [
    //                 [
    //                     "v11.0",
    //                     6.2
    //                 ],
    //                 [
    //                     "v10.0",
    //                     0.29
    //                 ],
    //                 [
    //                     "v9.0",
    //                     0.27
    //                 ],
    //                 [
    //                     "v8.0",
    //                     0.47
    //                 ]
    //             ]
    //         },
           
    //     ]
    // }
});