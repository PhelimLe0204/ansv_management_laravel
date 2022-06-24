/*-------------------
    Statistic chart
---------------------*/
function statistic_chart(statistic_1, statistic_2, statistic_3) {
    var colors = Highcharts.getOptions().colors.slice(0),
        dark = -0.5;


    colors[1] = Highcharts.Color(colors[0]).brighten(dark).get();

    colors[3] = Highcharts.Color(colors[2]).brighten(dark).get();

    var colors_new = ['#9ccc65', '#ffba57', '#ff5252', '#4680ff'];

    const thong_ke = [1, null, 1, null, null, null, null, null, null, null, 1, null, null, null, 1, null, null, null, null, null, null, null, null, null, null, null, 1, null, null, null];

    /* Đồ thị Triển khai */
    Highcharts.chart('highcharts-container-1', {
        chart: {
            type: 'column'
        },
        colors: colors_new,
        title: {
            text: 'Dự án Triển khai'
        },
        xAxis: {
            categories: ['Ưu tiên 1', 'Ưu tiên 2', 'Ưu tiên 3', 'Done']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Số lượng (dự án)'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                            Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color) ||
                        'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor ||
                'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
            name: 'Ongoing',
            data: [statistic_1[0].high_ongoing, statistic_1[0].medium_ongoing, statistic_1[0].low_ongoing, null]
        }, {
            name: 'Warning',
            data: [statistic_1[0].high_warning, statistic_1[0].medium_warning, statistic_1[0].low_warning, null]
        }, {
            name: 'Danger',
            data: [statistic_1[0].high_danger, statistic_1[0].medium_danger, statistic_1[0].low_danger, null]
        }, {
            name: 'Complete',
            data: [null, null, null, statistic_1[0].done]
        }]
    });



    /* Đồ thị Viễn thông */
    Highcharts.chart('highcharts-container-2', {
        chart: {
            type: 'column'
        },
        colors: colors_new,
        title: {
            text: 'Dự án Viễn thông'
        },
        xAxis: {
            categories: ['Ưu tiên 1', 'Ưu tiên 2', 'Ưu tiên 3', 'Done']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Số lượng (dự án)'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                            Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color) ||
                        'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor ||
                'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
            name: 'Ongoing',
            data: [statistic_2[0].high_ongoing, statistic_2[0].medium_ongoing, statistic_2[0].low_ongoing, null]
        }, {
            name: 'Warning',
            data: [statistic_2[0].high_warning, statistic_2[0].medium_warning, statistic_2[0].low_warning, null]
        }, {
            name: 'Danger',
            data: [statistic_2[0].high_danger, statistic_2[0].medium_danger, statistic_2[0].low_danger, null]
        }, {
            name: 'Complete',
            data: [null, null, null, statistic_2[0].done]
        }]
    });



    /* Đồ thị Chuyển đổi số */
    Highcharts.chart('highcharts-container-3', {
        chart: {
            type: 'column'
        },
        colors: colors_new,
        title: {
            text: 'Dự án Chuyển đổi số'
        },
        xAxis: {
            categories: ['Ưu tiên 1', 'Ưu tiên 2', 'Ưu tiên 3', 'Done']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Số lượng (dự án)'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                            Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color) ||
                        'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor ||
                'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
            name: 'Ongoing',
            data: [statistic_3[0].high_ongoing, statistic_3[0].medium_ongoing, statistic_3[0].low_ongoing, null]
        }, {
            name: 'Warning',
            data: [statistic_3[0].high_warning, statistic_3[0].medium_warning, statistic_3[0].low_warning, null]
        }, {
            name: 'Danger',
            data: [statistic_3[0].high_danger, statistic_3[0].medium_danger, statistic_3[0].low_danger, null]
        }, {
            name: 'Complete',
            data: [null, null, null, statistic_3[0].done]
        }]
    });
}



/*---------------------------------
    Datatable: Dashboard
-----------------------------------*/
function drawDatatable(array_data_1, array_data_2, array_data_3) {
    // $('#datatable_1').DataTable().clear().draw();
    // $('#datatable_1').DataTable().rows.add(array_data); // Add new data
    // $('#datatable_1').DataTable().columns.adjust().draw(); // Redraw the DataTable

    if (array_data_1 != null) {
        /* ===== Datatable 1: Dự án Triển khai ===== */
        var table_1 = $('#datatable_1').DataTable({
            "data": array_data_1,
            "columns": [{
                    "className": 'dt-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {
                    "data": "job_name",
                    render: function(data, type, row) {
                        var detail_id = row["id"];
                        var project_type = row["type_id"];
                        var html = '<a href="./dashboard/detail?id=' + detail_id + '&type=' + project_type + '" class="text-dark">' + row["job_name"] + '</a>';
                        return html;
                    }
                },
                { "data": "customer" },
                {
                    "data": "priority",
                    render: function(data, type, row) {
                        if (data == "High") {
                            return '<label class="badge badge-light-danger mt-2 f-16" style="margin-left: 14px;">' + data + '</label>';
                        } else if (data == "Medium") {
                            return '<label class="badge badge-light-warning mt-2 f-16">' + data + '</label>';
                        } else {
                            return '<label class="badge badge-light-success ml-3 mt-2 f-16">' + data + '</label>';
                        }
                    }
                },
                {
                    "data": "pm_name",
                    render: function(data, type, row) {
                        return '<span class="pl-2">' + data + '</span>';
                    }
                }
            ],
            "order": [
                [1, 'asc']
            ]
        });

        // Add event listener for opening and closing details
        $('#datatable_1 tbody').on('click', 'td.dt-control', function() {
            var tr = $(this).closest('tr');
            var row = table_1.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown font-weight-bold tr-click');
                tr.children('td').children('a').removeClass('td-data-link');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown font-weight-bold tr-click');
                tr.children('td').children('a').addClass('td-data-link');
            }
        });
        /* ===== End Datatable 1 ===== */
    }



    if (array_data_2 != null) {
        /* ===== Datatable 2: Dự án Viễn thông ===== */
        var table_2 = $('#datatable_2').DataTable({
            "data": array_data_2,
            "columns": [{
                    "className": 'dt-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {
                    "data": "project_name",
                    render: function(data, type, row) {
                        var detail_id = row["id"];
                        var project_type = row["type_id"];
                        var html = '<a href="./dashboard/detail?id=' + detail_id + '&type=' + project_type + '" class="text-dark">' + row["job_name"] + '</a>';
                        return html;
                    }
                },
                { "data": "customer" },
                { "data": "priority" },
                { "data": "am_name" }
            ],
            "order": [
                [1, 'asc']
            ]
        });

        // Add event listener for opening and closing details
        $('#datatable_2 tbody').on('click', 'td.dt-control', function() {
            var tr = $(this).closest('tr');
            var row = table_2.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown font-weight-bold tr-click');
                tr.children('td').children('a').removeClass('td-data-link');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown font-weight-bold tr-click');
                tr.children('td').children('a').addClass('td-data-link');
            }
        });
        /* ===== End Datatable 2 ===== */
    }



    if (array_data_3 != null) {
        /* ===== Datatable 3: Dự án Viễn thông ===== */
        var table_3 = $('#datatable_3').DataTable({
            "data": array_data_3,
            "columns": [{
                    "className": 'dt-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {
                    "data": "project_name",
                    render: function(data, type, row) {
                        var detail_id = row["id"];
                        var project_type = row["type_id"];
                        var html = '<a href="./dashboard/detail?id=' + detail_id + '&type=' + project_type + '" class="text-dark">' + row["job_name"] + '</a>';
                        return html;
                    }
                },
                { "data": "customer" },
                { "data": "priority" },
                { "data": "am_name" }
            ],
            "order": [
                [1, 'asc']
            ]
        });

        // Add event listener for opening and closing details
        $('#datatable_3 tbody').on('click', 'td.dt-control', function() {
            var tr = $(this).closest('tr');
            var row = table_3.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown font-weight-bold tr-click');
                tr.children('td').children('a').removeClass('td-data-link');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown font-weight-bold tr-click');
                tr.children('td').children('a').addClass('td-data-link');
            }
        });
        /* ===== End Datatable 3 ===== */
    }
}