let newDate = new Date();
let date = newDate.getDate();
let listDate = [];
let index = 0;
for (let i = 6; i >= 0; i--) {
    listDate[index] = date - i;
    index++;
}

$(function() {
    /* ChartJS
     * -------
     * Data and config for chartjs
     */
    'use strict';

    var data = {
        labels: listDate,
        datasets: [{
            label: 'Tổng doanh thu',
            data: dataBet,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1,
            fill: false,
        }]
    };
    var data1 = {
        labels: listDate,
        datasets: [{
                label: 'Số tiền nạp',
                data: dataLogRecharge,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                ],
                borderWidth: 1,
                fill: false
            },
            {
                label: 'Số tiền Rút',
                data: dataLogWithdraw,
                backgroundColor: [
                    'rgba(255, 255, 255, 1)',
                ],
                borderColor: [
                    'rgba(255, 255, 255, 1)',
                ],
                borderWidth: 1,
                fill: false
            }
        ]
    };
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                },
                gridLines: {
                    color: "rgba(204, 204, 204,0.1)"
                }
            }],
            xAxes: [{
                gridLines: {
                    color: "rgba(204, 204, 204,0.1)"
                }
            }]
        },
        legend: {
            display: false
        },
        elements: {
            point: {
                radius: 0
            }
        },
    };
    var areaOptions = {
        plugins: {
            filler: {
                propagate: true
            }
        },
        scales: {
            yAxes: [{
                gridLines: {
                    color: "rgba(204, 204, 204,0.1)"
                }
            }],
            xAxes: [{
                gridLines: {
                    color: "rgba(204, 204, 204,0.1)"
                }
            }]
        }
    }

    if ($("#areaChart").length) {
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: data,
            options: areaOptions
        });
    }

    if ($("#areaChart1").length) {
        var areaChartCanvas1 = $("#areaChart1").get(0).getContext("2d");
        var areaChart = new Chart(areaChartCanvas1, {
            type: 'line',
            data: data1,
            options: areaOptions
        });
    }
});