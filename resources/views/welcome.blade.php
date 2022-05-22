<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('/') }}">

    <title>Dashboard | CEO</title>
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
    		background-color: lightgray!important;
    		color: blue!important;
    	}
    	.td-data-link {
    		color: blue!important;
    	}
    	.scroll_content {
		  	height: 500px;
		  	overflow: auto;
		}
		.odd td a:hover,
		.even td a:hover {
			color: blue!important;
			font-weight: bold;
		  	text-decoration: underline;
		}
    </style>
</head>
<body>
	<!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div " >

                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="user/images/user/avatar-1.jpg" alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">Tổng giám đốc <i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-unstyled">
                            <li class="list-group-item"><a href="#"><i class="feather icon-user m-r-5"></i> Thông tin cá nhân</a></li>
                            <li class="list-group-item"><a href="#"><i class="feather icon-settings m-r-5"></i> Tuỳ chỉnh</a></li>
                            <li class="list-group-item">
                                <form action="/ANSV-Management/j_spring_security_logout" method="post" id="logout">
                                    <input type="hidden" name="_csrf" value="cda956a8-b518-438c-bdfc-b2dd2b7b2f0f" />
                                    <a href="JavaScript:Void(0);" onclick="logout()"><i class="feather icon-log-out m-r-5"></i> Đăng xuất</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Điều hướng</label>
                    </li>
                    <li class="nav-item">
                        <a href="/ANSV-Management/dashboard/13_2022" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ANSV-Management/dashboard/customer" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                            <span class="pcoded-mtext">Khách hàng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ANSV-Management/dashboard/pic" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">PIC</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Thống kê</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<!-- [ navigation menu ] end -->



	<!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="/ANSV-Management/chief/dashboard/13_2022" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="user/images/logo/ANSV_logo.png" style="width: 80%;" alt="" class="logo pl-4">
                <img src="user/images/logo-icon.png" alt="" class="logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Thông báo</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">đánh dấu đã đọc</a>
                                    <a href="#!">xoá hết</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="user/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="user/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="user/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="user/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="user/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>Tổng giám đốc</span>
                                <form action="/ANSV-Management/j_spring_security_logout" method="post" id="logout">
                                    <input type="hidden" name="_csrf" value="cda956a8-b518-438c-bdfc-b2dd2b7b2f0f" />
                                    <a href="JavaScript:Void(0);" class="dud-logout" title="Đăng xuất" onclick="logout()">
                                        <i class="feather icon-log-out"></i>
                                    </a>
                                </form>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Thông tin</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> Tin nhắn</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Khoá màn hình</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
	<!-- [ Header ] end -->



	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">

        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title float-left">
                                <h5 class="m-b-10">
                                    Dashboard Analytics - <b>CEO</b>
                                </h5>
                            </div>
                            <ul class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="index.html"><i
                                        class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Dashboard
                                        Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->



            <!-- ===== Tabs: Hiển thị thống kê ===== -->
            <link rel="stylesheet" href="user/plugins/highcharts/css/highcharts.css">
            <div class="row" style="margin-top: -2%;">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bar chart stacked</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item minimize-card">
                                            <a href="#!">
                                                <span><i class="feather icon-minus"></i> collapse</span>
                                                <span style="display: none"><i class="feather icon-plus"></i> expand</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="highcharts-container-1"></div>
                                <p class="highcharts-description" align="center">
                                    Đồ thị thống kê toàn bộ dự án Triển khai trong tuần
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bar chart stacked</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item minimize-card">
                                            <a href="#">
                                                <span><i class="feather icon-minus"></i> collapse</span>
                                                <span style="display: none"><i class="feather icon-plus"></i> expand</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="highcharts-container-2"></div>
                                <p class="highcharts-description" align="center">
                                    Đồ thị thống kê toàn bộ dự án Viễn thông trong tuần
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bar chart stacked</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item minimize-card">
                                            <a href="#!">
                                                <span><i class="feather icon-minus"></i> collapse</span>
                                                <span style="display: none"><i class="feather icon-plus"></i> expand</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="highcharts-container-3"></div>
                                <p class="highcharts-description" align="center">
                                    Đồ thị thống kê toàn bộ dự án Chuyển đổi số trong tuần
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>



            <!-- ===== Tabs: Hiển thị báo cáo công việc ===== -->
            <div class="row">
                <!-- [ tabs ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                        <!--Phần modal   -->
                            <div id="slideshow_project" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="height: 100%!important;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLiveLabel">Dự án triển khai</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carousel" class="owl-carousel owl-theme" data-ride="carousel">

                                                    <div class="container item">
                                                    <!-- Item -->
                                                        <div class="row d-flex">
                                                            <h5 class="pb-2 pt-1 pl-3" style="width: 97%; background: red; border-radius: 16px; text-align: center;">
                                                                <a href="javascript:void(0)" style="color: #fff; font-weight: bold;">Dự án đầu tiên</a>
                                                            </h5>

                                                        </div>
                                                    <!-- End Item -->
                                                    </div>

                                                    <div class="container item">
                                                    <!-- Item -->
                                                        <div class="row d-flex">
                                                            <h5 class="pb-2 pt-1 pl-3" style="width: 97%; background: red; border-radius: 16px; text-align: center;">
                                                                <a href="javascript:void(0)" style="color: #fff; font-weight: bold;">Dự án thứ 2</a>
                                                            </h5>

                                                        </div>
                                                    <!-- End Item -->
                                                    </div>


                                                <!-- <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                                    <i class="fas fa-angle-left text-dark" style="margin-left: -93%; font-size: 50px;"></i>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                                    <i class="fas fa-angle-right text-dark" style="margin-right: -93%; font-size: 50px;"></i>
                                                </a> -->
                                            </div>
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        <!-- End Modal -->
                            <h5>
                                Giám sát công việc
                                <button type="button" class="btn btn-light ml-3 pt-1 pb-1" data-toggle="modal" data-target="#slideshow_project">
                                    <i class="fas fa-play text-danger"></i>
                                </button>
                            </h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card">
                                            <a href="#!">
                                                <span><i class="feather icon-maximize"></i> maximize</span>
                                                <span style="display: none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card">
                                            <a href="#!">
                                                <span><i class="feather icon-minus"></i> collapse</span>
                                                <span style="display: none"><i class="feather icon-plus"></i> expand</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="/ANSV-Management/chief/insert_project">
                                                <span><i class="feather icon-file"></i> Thêm dự án</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item"><a
                                    class="nav-link active text-uppercase" id="home-tab"
                                    data-toggle="tab" href="#deployment" role="tab"
                                    aria-controls="home" aria-selected="true">Triển khai</a></li>
                                <li class="nav-item"><a class="nav-link text-uppercase"
                                    id="profile-tab" data-toggle="tab" href="#telecom" role="tab"
                                    aria-controls="profile" aria-selected="false">Viễn thông</a></li>
                                <li class="nav-item"><a class="nav-link text-uppercase"
                                    id="contact-tab" data-toggle="tab" href="#digital-transfer"
                                    role="tab" aria-controls="contact" aria-selected="false">Chuyển
                                        đổi số</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="deployment"
                                    role="tabpanel" aria-labelledby="deployment-tab">
                                    <div class="scroll_content">
                                        <table id="datatable_1" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th width="5%"></th>
                                                    <th>Dự án</th>
                                                    <th>Khách hàng</th>
                                                    <th width="10%">Ưu tiên</th>
                                                    <th width="17%">PIC</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>Dự án</th>
                                                    <th>Khách hàng</th>
                                                    <th>Ưu tiên</th>
                                                    <th>PIC</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="telecom" role="tabpanel"
                                    aria-labelledby="telecom-tab">
                                    <div class="scroll_content">
                                        <table id="datatable_2" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th width="5%"></th>
                                                    <th>Dự án</th>
                                                    <th>Khách hàng</th>
                                                    <th width="10%">Ưu tiên</th>
                                                    <th>PIC</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>Dự án</th>
                                                    <th>Khách hàng</th>
                                                    <th>Ưu tiên</th>
                                                    <th>PIC</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="digital-transfer" role="tabpanel"
                                    aria-labelledby="digital-transfer-tab">
                                    <div class="scroll_content">
                                        <table id="datatable_3" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th width="5%"></th>
                                                    <th>Dự án</th>
                                                    <th>Khách hàng</th>
                                                    <th width="10%">Ưu tiên</th>
                                                    <th>PIC</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>Dự án</th>
                                                    <th>Khách hàng</th>
                                                    <th>Ưu tiên</th>
                                                    <th>PIC</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ tabs ] end -->
            </div>
            <!-- ===== End tabs ===== -->
        </div>

        <script src="user/plugins/highcharts/js/highcharts.js"></script>
        <script src="user/plugins/highcharts/js/exporting.js"></script>
        <script src="user/plugins/highcharts/js/export-data.js"></script>
        <script src="user/plugins/highcharts/js/accessibility.js"></script>



        <script type="text/javascript">
            var colors = Highcharts.getOptions().colors.slice(0),
                dark = -0.5;


            colors[1] = Highcharts.Color(colors[0]).brighten(dark).get();

            colors[3] = Highcharts.Color(colors[2]).brighten(dark).get();

            var colors_new = ['#9ccc65', '#ffba57', '#ff5252', '#4680ff'];

            const thong_ke = [1, null, 1, null, null, null, null, null, null, null, 1, null, null, null, 1, null, null, null, null, null, null, null, null, null, null, null, 1, null, null, null];

            /* Đồ thị Triển khai */
            Highcharts.chart('highcharts-container-1',
            {
                chart : {
                    type : 'column'
                },
                colors: colors_new,
                title : {
                    text : 'Dự án Triển khai'
                },
                xAxis : {
                    categories : [ 'Ưu tiên 1', 'Ưu tiên 2', 'Ưu tiên 3', 'Done' ]
                },
                yAxis : {
                    min : 0,
                    title : {
                        text : 'Số lượng (dự án)'
                    },
                    stackLabels : {
                        enabled : true,
                        style : {
                            fontWeight : 'bold',
                            color : ( // theme
                            Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color)
                                    || 'gray'
                        }
                    }
                },
                legend : {
                    align : 'right',
                    x : -30,
                    verticalAlign : 'top',
                    y : 25,
                    floating : true,
                    backgroundColor : Highcharts.defaultOptions.legend.backgroundColor
                            || 'white',
                    borderColor : '#CCC',
                    borderWidth : 1,
                    shadow : false
                },
                tooltip : {
                    headerFormat : '<b>{point.x}</b><br/>',
                    pointFormat : '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                },
                plotOptions : {
                    column : {
                        stacking : 'normal',
                        dataLabels : {
                            enabled : true
                        }
                    }
                },
                series : [ {
                    name : 'Ongoing',
                    data : [ thong_ke[2], thong_ke[5], thong_ke[8], null ]
                }, {
                    name : 'Warning',
                    data : [ thong_ke[1], thong_ke[4], thong_ke[7], null ]
                }, {
                    name : 'Danger',
                    data : [ thong_ke[0], thong_ke[3], thong_ke[6], null ]
                }, {
                    name : 'Complete',
                    data : [ null, null, null, thong_ke[9] ]
                } ]
            });



            /* Đồ thị Viễn thông */
            Highcharts.chart('highcharts-container-2',
            {
                chart : {
                    type : 'column'
                },
                colors: colors_new,
                title : {
                    text : 'Dự án Viễn thông'
                },
                xAxis : {
                    categories : [ 'Ưu tiên 1', 'Ưu tiên 2', 'Ưu tiên 3', 'Done' ]
                },
                yAxis : {
                    min : 0,
                    title : {
                        text : 'Số lượng (dự án)'
                    },
                    stackLabels : {
                        enabled : true,
                        style : {
                            fontWeight : 'bold',
                            color : ( // theme
                            Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color)
                                    || 'gray'
                        }
                    }
                },
                legend : {
                    align : 'right',
                    x : -30,
                    verticalAlign : 'top',
                    y : 25,
                    floating : true,
                    backgroundColor : Highcharts.defaultOptions.legend.backgroundColor
                            || 'white',
                    borderColor : '#CCC',
                    borderWidth : 1,
                    shadow : false
                },
                tooltip : {
                    headerFormat : '<b>{point.x}</b><br/>',
                    pointFormat : '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                },
                plotOptions : {
                    column : {
                        stacking : 'normal',
                        dataLabels : {
                            enabled : true
                        }
                    }
                },
                series : [ {
                    name : 'Ongoing',
                    data : [ thong_ke[12], thong_ke[15], thong_ke[18], null ]
                }, {
                    name : 'Warning',
                    data : [ thong_ke[11], thong_ke[14], thong_ke[17], null ]
                }, {
                    name : 'Danger',
                    data : [ thong_ke[10], thong_ke[13], thong_ke[16], null ]
                }, {
                    name : 'Complete',
                    data : [ null, null, null, thong_ke[19] ]
                } ]
            });



            /* Đồ thị Chuyển đổi số */
            Highcharts.chart('highcharts-container-3',
            {
                chart : {
                    type : 'column'
                },
                colors: colors_new,
                title : {
                    text : 'Dự án Chuyển đổi số'
                },
                xAxis : {
                    categories : [ 'Ưu tiên 1', 'Ưu tiên 2', 'Ưu tiên 3', 'Done' ]
                },
                yAxis : {
                    min : 0,
                    title : {
                        text : 'Số lượng (dự án)'
                    },
                    stackLabels : {
                        enabled : true,
                        style : {
                            fontWeight : 'bold',
                            color : ( // theme
                            Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color)
                                    || 'gray'
                        }
                    }
                },
                legend : {
                    align : 'right',
                    x : -30,
                    verticalAlign : 'top',
                    y : 25,
                    floating : true,
                    backgroundColor : Highcharts.defaultOptions.legend.backgroundColor
                            || 'white',
                    borderColor : '#CCC',
                    borderWidth : 1,
                    shadow : false
                },
                tooltip : {
                    headerFormat : '<b>{point.x}</b><br/>',
                    pointFormat : '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                },
                plotOptions : {
                    column : {
                        stacking : 'normal',
                        dataLabels : {
                            enabled : true
                        }
                    }
                },
                series : [ {
                    name : 'Ongoing',
                    data : [ thong_ke[22], thong_ke[25], thong_ke[28], null ]
                }, {
                    name : 'Warning',
                    data : [ thong_ke[21], thong_ke[24], thong_ke[27], null ]
                }, {
                    name : 'Danger',
                    data : [ thong_ke[20], thong_ke[23], thong_ke[26], null ]
                }, {
                    name : 'Complete',
                    data : [ null, null, null, thong_ke[29] ]
                } ]
            });
        </script>

	</div>
	<!-- [ Main Content ] end -->



	<!-- Required Js -->
	<script src="user/js/vendor-all.min.js"></script>
	<script src="user/js/plugins/bootstrap.min.js"></script>
	<script src="user/js/ripple.js"></script>
	<script src="user/js/pcoded.min.js"></script>
	<script src="user/plugins/OwlCarousel/owl.carousel.min.js"></script>

	<!-- Datatable -->
	<script src="user/plugins/datatable/js/jquery.dataTables.min.js"></script>

	<script src="user/js/demo_main.js"></script>
	<script src="user/plugins/datatable/js/demo_main.js"></script>

	<!-- Select2 -->
    <script src="user/plugins/select2/js/select2.min.js"></script>



	<script type="text/javascript">
		$("#customer_select").select2({
	  		dropdownParent: $('#update_1'),
	      	placeholder: "Khách hàng đối tác...",
	      	allowClear: true
	  	});

		var deployment_project = [{"general_issue":"<p>- Vấn đề đầu tiên gặp phải<br>\r\n- Vấn đề thứ 2 gặp phải<\/p>","project_type":1,"project_id":1,"ke_hoach":"<p>- Kế hoạch tuần 14 là ...<br>\r\n- Kế hoạch tuần 15 là ...<\/p>","project_status":4,"detail_id":2,"project_name":"Dự án đầu tiên","priority":1,"priority_display":"Một","customer":"Khách hàng 3","pic_name":"Thư ký BGĐ"},{"general_issue":"ưerwrwerwerewrew\r\nrewre\r\nwe\r\nrư\r\nrưerwe\r\nrewr","project_type":1,"project_id":2,"ke_hoach":"tr\r\nt\r\ntetretretertre\r\ntretrretretert\r\ntẻt\r\nểtrtytryrtyry\r\nrtytryrty\r\nrtytryrt","project_status":2,"detail_id":4,"project_name":"Dự án thứ 2","priority":1,"priority_display":"Một","customer":"Khách hàng 2","pic_name":"Thư ký BGĐ"}];
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
	       autoplay: true,
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
