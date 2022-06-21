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

                        <!-- === Phần modal === -->
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
                                                    <div class="row" style="width: 89%;">
                                                        <div class="col-6 overflow border-bottom">
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
                                                                            {{ date_format(date_create($data->hop_dong_DAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->muc_tieu_DAC))
                                                                            {{ date_format(date_create($data->muc_tieu_DAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->thuc_te_DAC))
                                                                            {{ date_format(date_create($data->thuc_te_DAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->cl_DAC) && $data->cl_DAC != '0')
                                                                            {!! $data->cl_DAC !!}
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
                                                                            {{ date_format(date_create($data->hop_dong_PAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->muc_tieu_PAC))
                                                                            {{ date_format(date_create($data->muc_tieu_PAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->thuc_te_PAC))
                                                                            {{ date_format(date_create($data->thuc_te_PAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->cl_PAC) && $data->cl_PAC != '0')
                                                                            {!! $data->cl_PAC !!}
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
                                                                            {{ date_format(date_create($data->hop_dong_FAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->muc_tieu_FAC))
                                                                            {{ date_format(date_create($data->muc_tieu_FAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->thuc_te_FAC))
                                                                            {{ date_format(date_create($data->thuc_te_FAC),'d/ m/ Y') }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if(!empty($data->cl_FAC) && $data->cl_FAC != '0')
                                                                            {!! $data->cl_FAC !!}
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

</div>

@endsection
