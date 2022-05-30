@extends('user.layout.master')
@section('title', 'Home')

@section('body')

<input type="hidden" name="_token" id="token_input" value="{{ csrf_token() }}">

<!-- ===== Body ===== -->
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
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
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
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
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
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
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
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
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
                        <div id="slideshow_project" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLiveLabel">
                                            Dự án triển khai tuần {{ Session::get('week') }} năm {{ Session::get('year')
                                            }}
                                        </h5>
                                        <button type="button" class="close pt-3 pb-2" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- Slide desktop --}}
                                        <div id="carousel_desktop" class="owl-carousel owl-theme">

                                            @foreach ($project_slideshow as $k=>$data)
                                            <div class="container item">
                                                <!-- Item -->
                                                <div class="row d-flex">
                                                    <h5 class="pb-2 pt-1 pl-3"
                                                        style="width: 97%; background: red; border-radius: 16px; text-align: center;">
                                                        <a href="javascript:void(0)"
                                                            style="color: #fff; font-weight: bold;">
                                                            <p class="pt-1 pb-0 mb-1">{{
                                                                $data->project_name }}</p>
                                                            <hr class="mb-1 mt-0">
                                                            {{ $data->job_name }}
                                                        </a>
                                                    </h5>

                                                </div>
                                                <div class="row ml-2 pt-3 pb-1 pl-4 mb-4"
                                                    style="width: 95.6%; padding-bottom: 0; background: lightgrey; border-radius: 0 0 16px 16px; margin-top: -1%;">
                                                    <div class="col-5">
                                                        <b>AM:</b><span class="${padding_left_slideshow}">{{
                                                            $data->am_name }}</span>
                                                    </div>
                                                    <div class="col-5">
                                                        <b>PM:</b><span class="${padding_left_slideshow}">{{
                                                            $data->pm_name }}</span>
                                                    </div>
                                                    <div class="col-2 pl-4">
                                                        <b>Priority:</b><span class="${padding_left_slideshow}">{{
                                                            $data->priority }}</span>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="row" style="width: 90%;">
                                                        <div class="col-6 overflow">
                                                            @if (!empty($data->pham_vi_cung_cap))
                                                            <p>
                                                                <b>Tiến độ chung:</b><br />
                                                                <span class="d-flex">
                                                                    <i class="far fa-hand-point-right"></i>
                                                                    <span
                                                                        class="ml-2 pl-2 border-left border-primary">{{
                                                                        $data->pham_vi_cung_cap }}</span>
                                                                </span>
                                                            </p>
                                                            <hr>
                                                            @endif
                                                            @if (!empty($data->ke_hoach_tuan_sau))
                                                            <p>
                                                                <b>Kế hoạch tuần sau:</b><br />
                                                                <span class="d-flex ">
                                                                    <i class="far fa-hand-point-right"></i>
                                                                    <span
                                                                        class="ml-2 pl-2 border-left border-primary ">{{
                                                                        $data->ke_hoach_tuan_sau }}</span>
                                                                </span>
                                                            </p>
                                                            <hr>
                                                            @endif
                                                            @if (!empty($data->general_issue))
                                                            <p>
                                                                <b>Khó khăn:</b><br />
                                                                <span class="d-flex ">
                                                                    <i class="far fa-hand-point-right"></i>
                                                                    <span
                                                                        class="ml-2 pl-2 border-left border-primary ">{{
                                                                        $data->general_issue }}</span>
                                                                </span>
                                                            </p>
                                                            <hr>
                                                            @endif
                                                            @if (!empty($data->solution))
                                                            <p>
                                                                <b>Giải pháp:</b><br />
                                                                <span class="d-flex ">
                                                                    <i class="far fa-hand-point-right"></i>
                                                                    <span
                                                                        class="ml-2 pl-2 border-left border-primary ">{{
                                                                        $data->solution }}</span>
                                                                </span>
                                                            </p>
                                                            @endif
                                                        </div>
                                                        <div class="col-6">
                                                            <table class="table table-hover table-bordered">
                                                                <tr>
                                                                    <th style="width: 14%;" class="text-center">Kế hoạch
                                                                    </th>
                                                                    <th class="text-center">Số tiền<br />({{
                                                                        $data->currency_unit }})</th>
                                                                    <th class="text-center" style="width: 17%;">Hợp
                                                                        đồng<br />(D / M / Y)</th>
                                                                    <th class="text-center" style="width: 17%;">Mục
                                                                        tiêu<br />(D / M / Y)</th>
                                                                    <th class="text-center" style="width: 17%;">Thực
                                                                        tế<br />(D / M / Y)</th>
                                                                    <th class="text-center" style="width: 9%;">
                                                                        Còn lại<br />(Ngày)</th>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <th>DAC</th>
                                                                    <td class="text-right">
                                                                        @if (!empty($data->so_tien_DAC))
                                                                            {{ number_format($data->so_tien_DAC,0,'','.') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->hop_dong_DAC))
                                                                            {{ date_format(date_create($data->hop_dong_DAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->muc_tieu_DAC))
                                                                            {{ date_format(date_create($data->muc_tieu_DAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->thuc_te_DAC))
                                                                            {{ date_format(date_create($data->thuc_te_DAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td style="{{ (!empty($data->cl_DAC->d) && $data->cl_DAC->d < 0  )  ? 'color: red' : '' }}">
                                                                        @if(!empty( $data->cl_DAC))
                                                                            {{ $data->cl_DAC->d }}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <th>PAC</th>
                                                                    <td class="text-right">
                                                                        @if (!empty($data->so_tien_PAC))
                                                                        {{ number_format($data->so_tien_PAC,0,'','.') }}
                                                                    @endif
                                                                    <td>
                                                                        @if(!empty($data->hop_dong_PAC))
                                                                            {{ date_format(date_create($data->hop_dong_PAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->muc_tieu_PAC))
                                                                            {{ date_format(date_create($data->muc_tieu_PAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->thuc_te_PAC))
                                                                            {{ date_format(date_create($data->thuc_te_PAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td style="{{ (!empty($data->cl_PAC->d) && $data->cl_PAC->d < 0  )  ? 'color: red' : '' }}">
                                                                        @if(!empty( $data->cl_PAC->d))
                                                                            {{ $data->cl_PAC->d }}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <th>FAC</th>
                                                                    <td class="text-right">
                                                                        @if (!empty($data->so_tien_FAC))
                                                                            {{ number_format($data->so_tien_FAC,0,'','.') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->hop_dong_FAC))
                                                                            {{ date_format(date_create($data->hop_dong_FAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->muc_tieu_FAC))
                                                                            {{ date_format(date_create($data->muc_tieu_FAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->thuc_te_FAC))
                                                                            {{ date_format(date_create($data->thuc_te_FAC),'d / m / Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td style="{{ (!empty($data->cl_FAC->d) && $data->cl_FAC->d < 0  )  ? 'color: red' : '' }}">
                                                                        @if(!empty( $data->cl_FAC->d))
                                                                            {{ $data->cl_FAC->d }}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <th>Tổng</th>
                                                                    <td class="text-right">
                                                                        @if (!empty($data->tong_gia_tri_thuc_te))
                                                                            {{ number_format($data->tong_gia_tri_thuc_te,0,'','.') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>N/A</td>
                                                                    <td>N/A</td>
                                                                    <td>N/A</td>
                                                                    <td>N/A</td>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <th>Tạm ứng</th>
                                                                    <td class="text-right">
                                                                        @if (!empty($data->so_tien_tam_ung))
                                                                            {{ number_format($data->so_tien_tam_ung,0,'','.') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>N/A</td>
                                                                    <td>N/A</td>
                                                                    <td>N/A</td>
                                                                    <td>N/A</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 pt-3">
                                                        <p class="text-justify">

                                                            <b>Kết quả thực hiện kế hoạch tuần này:</b><br />
                                                            {{ $data->ket_qua_tuan_nay }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <figcaption class="text-center">{{ $k+1 }} /
                                                        {{ $project_slideshow->count() }}</figcaption>
                                                </div>
                                            </div>
                                            <!-- End Item -->
                                            @endforeach

                                        </div>
                                        {{-- End slide desktop --}}
                                        {{-- Slide mobile --}}
                                        <div class="owl-carousel owl-theme" id="carousel_mobile">

                                        </div>
                                        {{-- End Slide mobile --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                        <h5>
                            Giám sát công việc
                            <button type="button" class="btn btn-light ml-3 pt-1 pb-1" data-toggle="modal"
                                data-target="#slideshow_project">
                                <i class="fas fa-play text-danger"></i>
                            </button>
                        </h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card">
                                        <a href="#!">
                                            <span><i class="feather icon-maximize"></i> maximize</span>
                                            <span style="display: none"><i class="feather icon-minimize"></i>
                                                Restore</span></a>
                                    </li>
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
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab"
                                    href="#deployment" role="tab" aria-controls="home" aria-selected="true"
                                    onclick="getDatatable(3, 2);">
                                    Triển khai
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#telecom"
                                    role="tab" aria-controls="profile" aria-selected="false"
                                    onclick="getDatatable(1, 1);">
                                    Viễn thông
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="contact-tab" data-toggle="tab"
                                    href="#digital-transfer" role="tab" aria-controls="contact" aria-selected="false"
                                    onclick="getDatatable(2, 1);">
                                    Chuyển đổi số
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="deployment" role="tabpanel"
                                aria-labelledby="deployment-tab">
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
                            <div class="tab-pane fade" id="telecom" role="tabpanel" aria-labelledby="telecom-tab">
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

@endsection
