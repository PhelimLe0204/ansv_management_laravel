@extends('user.layout.master')
@section('title', 'Detail')

@section('body')
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
                                    Chi tiết - <b>Dự án</b>
                                    <span class="pl-4">(Tuần: <b>{{ Session::get('week') }}</b> / Năm: <b>{{ Session::get('year') }}</b>)</span>
                                </h5>
                            </div>
                            <ul class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Khách hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- ===== Tabs: Quy trình ===== -->
            <div class="row" style="margin-top: -2%;">
                <!-- [ tabs ] start -->
                <div class="col-lg-5 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Mở</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card">
                                            <a href="javascript:void(0)">
                                                <span><i class="feather icon-maximize"></i> maximize</span>
                                                <span style="display: none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a>
                                        </li>
                                        <li class="dropdown-item minimize-card">
                                            <a href="javascript:void(0)">
                                                <span><i class="feather icon-minus"></i> collapse</span>
                                                <span style="display: none"><i class="feather icon-plus"></i> expand</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0)">
                                                <span data-toggle="modal" data-target="#modalUpdateDetail1">
                                                    <i class="feather icon-edit"></i> Cập nhật
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Start: Modal cập nhật -->
                                    <div id="modalUpdateDetail1" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="modalUpdateDetail1Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content w-50" style="left: 25%!important;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalUpdateDetail1Label">Cập nhật mục: Mở</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="form-update-detail-1">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label">Tên dự án</label>
                                                                    <input type="hidden" class="form-control" name="detail_id" value="{{ $detail->id }}">
                                                                    <input type="text" class="form-control" name="job_name" value="{{ $detail->job_name }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="floating-label">Người cập nhật</label><br>
                                                                    <input type="hidden" class="form-control" name="last_updated_by" value="{{ session()->get('user_id') }}">
                                                                    <input class="form-control" type="text" value="{{ session()->get('user_name') }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                    <button type="button" id="btn-update-detail-1" class="btn btn-primary">Cập nhật</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Modal cập nhật -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="change-table-detail-card-1">
                            @include('user.ajaxReplaceContent.table_detail_card_1')
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Quy trình</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card">
                                            <a href="javascript:void(0)">
                                                <span><i class="feather icon-maximize"></i> maximize</span>
                                                <span style="display: none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a>
                                        </li>
                                        <li class="dropdown-item minimize-card">
                                            <a href="javascript:void(0)">
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
                                    <a class="nav-link active text-uppercase" id="issue-tab" data-toggle="tab"
                                        href="#detail-issue" role="tab" aria-controls="issue" aria-selected="true">
                                        Tình trạng
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="solution-tab" data-toggle="tab"
                                        href="#detail-solution" role="tab" aria-controls="solution" aria-selected="false">
                                        Giải pháp
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="plan-tab" data-toggle="tab"
                                        href="#detail-plan" role="tab" aria-controls="plan" aria-selected="false">
                                        Kế hoạch (2)
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="result-tab" data-toggle="tab"
                                        href="#detail-result" role="tab" aria-controls="result" aria-selected="false">
                                        Kết quả (2)
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="detail-issue" role="tabpanel" aria-labelledby="detail-issue-tab">
                                    <div class="scroll_content" style="height: 333px;">
                                        <table class="table table-hover table-bordered">
                                            <tr>
                                                <td>{!! $detail->general_issue !!}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="detail-solution" role="tabpanel" aria-labelledby="detail-solution-tab">
                                    <div class="scroll_content" style="height: 333px;">
                                        <table class="table table-hover table-bordered">
                                            <tr>
                                                <td>{{ $detail->solution }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="detail-plan" role="tabpanel" aria-labelledby="detail-plan-tab">
                                    <div class="scroll_content" style="margin-top: -3%; height: 347px;">
                                        <ul class="nav nav-tabs pt-0" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active text-uppercase" id="current-week-plan-tab" data-toggle="tab"
                                                    href="#current-week-plan" role="tab" aria-controls="current-week-plan" aria-selected="true">
                                                    <i class="feather icon-corner-down-right"></i> Tuần này
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-uppercase" id="next-week-plan-tab" data-toggle="tab"
                                                    href="#next-week-plan" role="tab" aria-controls="next-week-plan" aria-selected="false">
                                                    <i class="feather icon-corner-down-right"></i> Tuần sau
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="current-week-plan" role="tabpanel" aria-labelledby="current-week-plan-tab">
                                                <div>
                                                    <table class="table table-hover table-bordered">
                                                        <tr>
                                                            <td>{!! $detail->ke_hoach_tuan_nay !!}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="next-week-plan" role="tabpanel" aria-labelledby="next-week-plan-tab">
                                                <div>
                                                    <table class="table table-hover table-bordered">
                                                        <tr>
                                                            <td>{!! $detail->ke_hoach_tuan_sau !!}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="detail-result" role="tabpanel" aria-labelledby="detail-result-tab">
                                    <div class="scroll_content" style="margin-top: -3%; height: 347px;">
                                        <ul class="nav nav-tabs pt-0" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active text-uppercase" id="last-week-result-tab" data-toggle="tab"
                                                    href="#last-week-result" role="tab" aria-controls="last-week-result" aria-selected="true">
                                                    <i class="feather icon-corner-down-right"></i> Tuần trước
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-uppercase" id="current-week-result-tab" data-toggle="tab"
                                                    href="#current-week-result" role="tab" aria-controls="current-week-result" aria-selected="false">
                                                    <i class="feather icon-corner-down-right"></i> Tuần này
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="last-week-result" role="tabpanel" aria-labelledby="last-week-result-tab">
                                                <div>
                                                    <table class="table table-hover table-bordered">
                                                        <tr>
                                                            <td>{!! $detail->ket_qua_tuan_truoc !!}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="current-week-result" role="tabpanel" aria-labelledby="current-week-result-tab">
                                                <div>
                                                    <table class="table table-hover table-bordered">
                                                        <tr>
                                                            <td>{!! $detail->ket_qua_tuan_nay !!}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ tabs ] end -->

                <div class="col-lg-7 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Chi phí & Thời gian</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card">
                                            <a href="javascript:void(0)">
                                                <span><i class="feather icon-maximize"></i> maximize</span>
                                                <span style="display: none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a>
                                        </li>
                                        <li class="dropdown-item minimize-card">
                                            <a href="javascript:void(0)">
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
                        <div class="card-body pt-3">
                            <!-- Table liên quan chi phí và thời gian -->
                            @include('user.components.price_table', ['data' => $detail])
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Thành viên & Phân loại</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal" style="font-size: 20px;"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card">
                                            <a href="javascript:void(0)">
                                                <span><i class="feather icon-maximize"></i> maximize</span>
                                                <span style="display: none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a>
                                        </li>
                                        <li class="dropdown-item minimize-card">
                                            <a href="javascript:void(0)">
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
                            <table class="table table-hover table-bordered mt-3">
                                <tr>
                                    <th width="13%">Ưu tiên</th>
                                    <td>{{ $detail->priority }}</td>
                                    <th width="16%">Xếp loại</th>
                                    <td>{{ $detail->project_status }}</td>
                                </tr>
                                <tr>
                                    <th>AM</th>
                                    <td>{{ $detail->am_name }}</td>
                                    <th>PM</th>
                                    <td>{{ $detail->pm_name }}</td>
                                </tr>
                                <tr>
                                    <th>Giám sát</th>
                                    <td>{{ $detail->manager_name }}</td>
                                    <th>Khách hàng</th>
                                    <td>{{ $detail->customer }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Latest Customers end -->
            </div>
            <!-- ===== End tabs ===== -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script>
        $( "#btn-update-detail-1" ).on( "click", function() {
            $.ajax({
                url: "{{route('project.update_from_detail')}}",
                type: "POST",
                data: $('#form-update-detail-1').serialize(),
                success: function( response ) {
                    if (response == 0) {
                        // alert("Cõ lỗi! Mời kiểm tra thông tin và thử lại.");
                        alertify.error("Lỗi thông tin! Mời thử lại.");
                    } else {
                        $("#change-table-detail-card-1").empty();
                        $("#change-table-detail-card-1").html(response);
                        $("#modalUpdateDetail1").modal("hide");
                        alertify.success('Cập nhật thành công!');
                    }
                },
                error: function (error) {
                    // alert(error);
                    alertify.error("Lỗi hệ thống! Mời thử lại.");
                }
            });
        });
    </script>
@endsection
