<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('/') }}">

    <title>@yield('title') | Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="user/images/logo/logo_ansv.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="user/plugins/fontawesome-free/css/all.min.css">
    <!-- Carousel css -->
    <link rel="stylesheet" href="user/plugins/OwlCarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="user/plugins/OwlCarousel/assets/owl.carousel.min.css">

    <!-- Datatable -->
    <link rel="stylesheet" href="user/plugins/datatable/css/jquery.dataTables.min.css">

    <!-- Select2 CSS -->
    <link href="user/plugins/select2/css/select2.min.css" rel="stylesheet" />

    <!-- vendor css -->
    <link rel="stylesheet" href="user/css/style.css">
    <style>
        .badge-size {
            font-size: 15px;
        }

        .tr-click {
            background-color: lightgray !important;
            color: blue !important;
        }

        .td-data-link {
            color: blue !important;
        }

        .scroll_content {
            height: 500px;
            overflow: auto;
        }

        .odd td a:hover,
        .even td a:hover {
            color: blue !important;
            font-weight: bold;
            text-decoration: underline;
        }

        /* Màn hình mobile */
        @media screen and (max-width: 1023px) {
            body .modal-content {
                width: 100%;
                position: absolute;
            }

            #carousel_mobile {
                display: block;
            }

            #carousel_desktop {
                display: none;
            }
        }

        /* End mobile */

        /* Màn hình desktop */
        @media screen and (min-width: 1024px) {
            #carousel_mobile {
                display: none;
            }

            #carousel_desktop {
                display: block;
            }

            body .modal-content {
                width: 120%;
                position: absolute;
                left: -10%;
            }
        }

        /* End desktop */
    </style>
</head>

<body class="">
    <!-- [ navigation menu ] start -->
    @include('user.layout.menu')
    <!-- [ navigation menu ] end -->



    <!-- [ Header ] start -->
    @include('user.layout.header')
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    @yield('body')
    <!-- [ Main Content ] end -->



    <!-- Required Js -->
    <script src="user/js/vendor-all.min.js"></script>
    <script src="user/js/plugins/bootstrap.min.js"></script>
    <script src="user/js/ripple.js"></script>
    <script src="user/js/pcoded.min.js"></script>
    <script src="user/plugins/OwlCarousel/owl.carousel.min.js"></script>

    <!-- Datatable -->
    <script src="user/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="user/plugins/datatable/js/demo_main.js"></script>

    <!-- Select2 -->
    <script src="user/plugins/select2/js/select2.min.js"></script>


    <script type="text/javascript">
        $( ".tab_datatable" ).on( "click", function() {
            console.log( this.getAttribute('data-type') );
            var dataInput = {
                '_token': $('#token_input').val(),
                'week': {!! Session::get('week') !!},
                'year': {!! Session::get('year') !!},
                'project_type': this.getAttribute('data-type'),
                'pic_level': this.getAttribute('data-level'),
            };
            $.ajax({
                url: '{{ route('user.dashboard.getDatatable') }}',
                type: 'POST',
                data: dataInput,
            }).done(function(response){
                console.log("response" + project_type + ": " + response);
            })
        });

        function getDatatable(week, year, project_type, pic_level) {
            var dataInput = {
                '_token': $('#token_input').val(),
                'week': week,
                'year': year,
                'project_type': project_type,
                'pic_level': pic_level,
            };
            $.ajax({
                url: '{{ route('user.dashboard.getDatatable') }}',
                type: 'POST',
                data: dataInput,
            }).done(function(response){
                console.log("response" + project_type + ": " + response);
            })
        }

        $(document).ready(function() {
            // Xử lý Datatable
        });

		$("#customer_select").select2({
	  		dropdownParent: $('#update_1'),
	      	placeholder: "Khách hàng đối tác...",
	      	allowClear: true
	  	});

		var deployment_project = {!! $project_table !!};
		var telecom_project = [{"general_issue":"bưetrebtrerbetb\r\nẻtberbtwebtebtetb\r\nbtewbtertbewrtt\r\nbetbertberbetbte\r\nbtebtebteb\r\nbrterb\r\nẻbertbetb","project_type":2,"project_id":3,"ke_hoach":"bêtrberberbertbe\r\nrbeber\r\ntbereb\r\nbewtebtbet\r\nbtbewtbteb\r\ntbewtebtb\r\nbưt","project_status":3,"detail_id":5,"project_name":"Dự án thứ 3","priority":2,"priority_display":"Hai","customer":"Khách hàng 3","pic_name":"Phó tổng GĐ"},{"general_issue":"qư eqw ewq\r\n ewq ưq e\r\nưq eqwe qưe ưqe \r\nqưe \r\nưqe ưq\r\ne qưe\r\n ưeq\r\n \r\nưe \r\nưq ewqe ","project_type":2,"project_id":5,"ke_hoach":"q ưewq eqwe ưqe qưe eqw eqw qưe qưe qưe ưqewe ewq qew qưe\r\nqeq weq ưe ưqe ưqe ewq ưeq qưe ewq qưe \r\neqw ưqe qưe qewwqe qưe ewq ewq ew ưeqewq \r\nưeq ew qưe e ưeq qưe qưe eq ưewq qưe qưe \r\nqưe qưe ưqe ưqe ưqe \r\nqưe qưe ew ưqe\r\n ưe qưe qưe\r\nqưe qưe qưe qưe\r\n qưqwe ưqe","project_status":4,"detail_id":7,"project_name":"Dự án thứ 5","priority":1,"priority_display":"Một","customer":"Khách hàng 5","pic_name":"Phó tổng GĐ"}];
		var digital_transfer_project = [{"general_issue":"ẻt rêt tẻ t\r\nẻ tẻ tre tre tre te tre \r\nẻ tẻt ẻ t ett \r\ntẻ t\r\ne te ret ẻt ẻ \r\ntể te rr\r\nt ẻ tẻ tẻ tẻ \r\ntẻ t\r\n rter ẻ ẻ ẻ tẻ tẻ t tẻ t\r\nẻ tẻ tt ẻ tẻ tr e","project_type":3,"project_id":4,"ke_hoach":"trytryty ry trỷ\r\nt y trytr ỷ y\r\ntry tr yty t ytry tyyt \r\nỷ y ry ry rtyrty rtyt ry\r\nrty rt yytr t rt","project_status":4,"detail_id":6,"project_name":"Dự án thứ 4","priority":3,"priority_display":"Ba","customer":"Khách hàng 4","pic_name":"Phó tổng GĐ"}];



		if (deployment_project != null) {
			/* ===== Datatable 1: Dự án Triển khai ===== */
			var table_1 = $('#datatable_1').DataTable( {
		        "data": deployment_project,
		        "columns": [
		            {
		                "className":      'dt-control',
		                "orderable":      false,
		                "data":           null,
		                "defaultContent": ''
		            },
		            {
		            	"data": "job_name",
	    	            render: function(data, type, row) {
	    	            	var detail_id = row["id"];
	    	            	var project_type = row["type_id"];
	    	            	var html = 	'<a href="/ANSV-Management/dashboard/detail/' + project_type + '_' + detail_id + '" class="text-dark">' + row["job_name"] + '</a>';
							return html;
	                    }
		            },
		            { "data": "customer" },
		            {
                        "data": "priority",
	    	            render: function(data, type, row) {
	    	            	return '<span class="pl-2">' + data + '</span>';
	                    }
                    },
		            {
                        "data": "pic_name",
	    	            render: function(data, type, row) {
	    	            	return '<span class="pl-2">' + data + '</span>';
	                    }
                    }
		        ],
		        "order": [[1, 'asc']]
		    } );

		 	// Add event listener for opening and closing details
		    $('#datatable_1 tbody').on('click', 'td.dt-control', function () {
		        var tr = $(this).closest('tr');
		        var row = table_1.row( tr );

		        if ( row.child.isShown() ) {
		            // This row is already open - close it
		            row.child.hide();
		            tr.removeClass('shown font-weight-bold tr-click');
		            tr.children('td').children('a').removeClass('td-data-link');
		        }
		        else {
		            // Open this row
		            row.child( format(row.data()) ).show();
		            tr.addClass('shown font-weight-bold tr-click');
		            tr.children('td').children('a').addClass('td-data-link');
		        }
		    } );
		    /* ===== End Datatable 1 ===== */
		}

		if (telecom_project != null) {
			/* ===== Datatable 2: Dự án Viễn thông ===== */
			var table_2 = $('#datatable_2').DataTable( {
		        "data": telecom_project,
		        "columns": [
		            {
		                "className":      'dt-control',
		                "orderable":      false,
		                "data":           null,
		                "defaultContent": ''
		            },
		            {
		            	"data": "project_name",
	    	            render: function(data, type, row) {
	    	            	var detail_id = row["detail_id"];
	    	            	var project_type = row["project_type"];
	    	            	var html = 	'<a href="/ANSV-Management/dashboard/detail/' + project_type + '_' + detail_id + '" class="text-dark">' + row["project_name"] + '</a>';
							return html;
	                    }
		            },
		            { "data": "customer" },
		            { "data": "priority_display" },
		            { "data": "pic_name" }
		        ],
		        "order": [[1, 'asc']]
		    } );

		 	// Add event listener for opening and closing details
		    $('#datatable_2 tbody').on('click', 'td.dt-control', function () {
		        var tr = $(this).closest('tr');
		        var row = table_2.row( tr );

		        if ( row.child.isShown() ) {
		            // This row is already open - close it
		            row.child.hide();
		            tr.removeClass('shown font-weight-bold tr-click');
		            tr.children('td').children('a').removeClass('td-data-link');
		        }
		        else {
		            // Open this row
		            row.child( format(row.data()) ).show();
		            tr.addClass('shown font-weight-bold tr-click');
		            tr.children('td').children('a').addClass('td-data-link');
		        }
		    } );
		    /* ===== End Datatable 2 ===== */
		}

		if (digital_transfer_project != null) {
			/* ===== Datatable 3: Dự án Viễn thông ===== */
			var table_3 = $('#datatable_3').DataTable( {
		        "data": digital_transfer_project,
		        "columns": [
		            {
		                "className":      'dt-control',
		                "orderable":      false,
		                "data":           null,
		                "defaultContent": ''
		            },
		            {
		            	"data": "project_name",
	    	            render: function(data, type, row) {
	    	            	var detail_id = row["detail_id"];
	    	            	var project_type = row["project_type"];
	    	            	var html = 	'<a href="/ANSV-Management/dashboard/detail/' + project_type + '_' + detail_id + '" class="text-dark">' + row["project_name"] + '</a>';
							return html;
	                    }
		            },
		            { "data": "customer" },
		            { "data": "priority_display" },
		            { "data": "pic_name" }
		        ],
		        "order": [[1, 'asc']]
		    } );

		 	// Add event listener for opening and closing details
		    $('#datatable_3 tbody').on('click', 'td.dt-control', function () {
		        var tr = $(this).closest('tr');
		        var row = table_3.row( tr );

		        if ( row.child.isShown() ) {
		            // This row is already open - close it
		            row.child.hide();
		            tr.removeClass('shown font-weight-bold tr-click');
		            tr.children('td').children('a').removeClass('td-data-link');
		        }
		        else {
		            // Open this row
		            row.child( format(row.data()) ).show();
		            tr.addClass('shown font-weight-bold tr-click');
		            tr.children('td').children('a').addClass('td-data-link');
		        }
		    } );
		    /* ===== End Datatable 3 ===== */
		}

		var owl = $('.owl-carousel');
	  	owl.owlCarousel({
	       items: 1,
	       loop: true,
	       nav: true,
	       margin: 10,
	       autoplay: false,
	       autoplayTimeout: 5000,
	       responsiveClass: true,
	       autoplayHoverPause: true
	   	});

	  	$('#table_customer_new,#table_customer_all,#table_user_all,#table_user_ban').DataTable( {
		    "scrollX": true,
		    "scrollCollapse": true,
		    "paging":         false,
		    "responsive": true,
		    "displayLength": 25,
		    "order": [[ 0, 'asc' ]]
		});
    </script>
</body>

</html>
