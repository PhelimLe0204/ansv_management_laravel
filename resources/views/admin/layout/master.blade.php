
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
    <link rel="icon" href="user/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="user/css/style.css">



</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->



	<!-- ===== Menu ===== -->
	@include('user.layout.menu')



	<!-- ===== Header ===== -->
	@include('user.layout.header')



    <!-- ===== Body ===== -->
    @yield('body')



    <!-- Required Js -->
    <script src="user/js/vendor-all.min.js"></script>
    <script src="user/js/plugins/bootstrap.min.js"></script>
    <script src="user/js/ripple.js"></script>
    <script src="user/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="user/js/plugins/apexcharts.min.js"></script>


    <!-- custom-chart js -->
    <script src="user/js/pages/dashboard-main.js"></script>
</body>

</html>
