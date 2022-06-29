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

            <!-- ===== Start: Content ===== -->
            <div class="row" style="margin-top: -2%;">
                <!-- [ tabs ] start -->
                <div class="col-lg-5 col-md-12">
                    <!-- [ Card 1 ] start -->
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

                                                <!-- Form update card 1 -->
                                                <form id="form-update-detail-1" class="form-detail-card">
                                                    @csrf
                                                    <input type="hidden" class="form-control" name="card_id" value="1">
                                                    <input type="hidden" class="form-control" name="detail_id" value="{{ $detail->id }}">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalUpdateDetail1Label">Cập nhật mục: Mở</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="floating-label">Tên dự án</label>
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

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                        <button type="submit" id="btn-update-detail-1" class="btn btn-primary btn-detail-card-modal">Cập nhật</button>
                                                    </div>
                                                </form>
                                                <!-- End: Form update card 1 -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Modal cập nhật -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="change-detail-card-1">
                            @include('user.ajaxReplaceContent.detail_card_1')
                        </div>
                    </div>
                    <!-- [ Card 1 ] end -->

                    <!-- [ Card 2 ] start -->
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
                                            <a href="javascript:void(0)">
                                                <span data-toggle="modal" data-target="#modalUpdateDetail2">
                                                    <i class="feather icon-edit"></i> Cập nhật
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Start: Modal cập nhật -->
                                    <div id="modalUpdateDetail2" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="modalUpdateDetail2Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content w-50" style="left: 25%!important;">

                                                <!-- Form update card 2 -->
                                                <form id="form-update-detail-2" class="form-detail-card">
                                                    @csrf
                                                    <input type="hidden" class="form-control" name="card_id" value="2">
                                                    <input type="hidden" class="form-control" name="detail_id" value="{{ $detail->id }}">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalUpdateDetail2Label">
                                                            Cập nhật mục: Quy trình<hr style="margin: 2.5% 0 2.5% 0;">
                                                            Người cập nhật: {{ session()->get('user_name') }}
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @include('user.ajaxReplaceContent.detail_card_2_modal_form')
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                        <button type="submit" id="btn-update-detail-2" class="btn btn-primary btn-detail-card-modal">Cập nhật</button>
                                                    </div>
                                                </form>
                                                <!-- End: Form update card 2 -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Modal cập nhật -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="change-detail-card-2">
                            @include('user.ajaxReplaceContent.detail_card_2')
                        </div>
                    </div>
                    <!-- [ Card 2 ] end -->
                </div>
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
                                            <a href="javascript:void(0)">
                                                <span data-toggle="modal" data-target="#modalUpdateDetail3">
                                                    <i class="feather icon-edit"></i> Cập nhật
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Start: Modal cập nhật -->
                                    <div id="modalUpdateDetail3" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="modalUpdateDetail3Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content w-75" style="left: 13%!important;">

                                                <!-- Form update card 3 -->
                                                <form id="form-update-detail-3" class="form-detail-card">
                                                    @csrf
                                                    <input type="hidden" class="form-control" name="card_id" value="3">
                                                    <input type="hidden" class="form-control" name="detail_id" value="{{ $detail->id }}">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalUpdateDetail3Label">
                                                            Cập nhật mục: Chi phí & Thời gian<hr style="margin: 2.5% 0 2.5% 0;">
                                                            Người cập nhật: {{ session()->get('user_name') }}
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{-- @include('user.ajaxReplaceContent.detail_card_2_modal_form') --}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                        <button type="submit" id="btn-update-detail-3" class="btn btn-primary btn-detail-card-modal">Cập nhật</button>
                                                    </div>
                                                </form>
                                                <!-- End: Form update card 2 -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Modal cập nhật -->
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
                <!-- [ tabs ] end -->
            </div>
            <!-- ===== End: Content ===== -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="user/js/main_ajax.js"></script>
    <script src="https://cdn.tiny.cloud/1/ht2q8shag22vyn89yaaa2xbmc0c9mg5bqppl375w2z6iz0qn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="user/js/main_tiny.js"></script>
@endsection
