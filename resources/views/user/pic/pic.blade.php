@extends('user.layout.master')

@section('title','Danh sách người dùng')

@section('body')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title float-left">
                            <h5 class="m-b-10">
                                Danh sách - <b>Người dùng</b>
                                <span class="pl-4">(Tuần: <b>{{ Session::get('week') }}</b> / Năm: <b>{{
                                        Session::get('year') }}</b>)</span>
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

        <!-- [ Main Content ] start -->
        <div class="row" style="margin-top: -2%;">
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>PIC</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#"><span><i
                                                    class="feather icon-maximize"></i> maximize</span><span
                                                style="display:none"><i class="feather icon-minimize"></i>
                                                Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#"><span><i
                                                    class="feather icon-minus"></i> collapse</span><span
                                                style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                                    </li>
                                    <li class="dropdown-item reload-card"><a href="#"><i
                                                class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#"><i class="feather icon-trash"></i>
                                            remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div class="container mt-5">
                                <table id="pic_table" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ và tên</th>
                                            <th width="25%">Email</th>
                                            <th width="10%">Tình trạng</th>
                                            <th>Quyền</th>
                                            <th>Ngày tạo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $index=>$user)

                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td class="text-center">{!! $user->enabled ==1 ? '<span
                                                    class="btn btn-primary btn-sm"><i
                                                        class="fas fa-check-circle"></i></span>' :
                                                '<span class="btn btn-danger btn-sm"><i
                                                        class="fas fa-times-circle"></i></span>'
                                                !!}
                                            </td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ và tên</th>
                                            <th>Email</th>
                                            <th>Tình trạng</th>
                                            <th>Quyền</th>
                                            <th>Ngày tạo</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
</div>


<script>

</script>
@endsection
