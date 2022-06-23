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
    </script>
</body>

</html>
