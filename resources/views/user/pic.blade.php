@extends('user.layout.master')

@section('title','Danh sách người dùng')

@section('body')

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.3.4/css/searchBuilder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js">
<div class="pcoded-main-container">
    <h4>Danh sách người dùng</h4>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="deployment" role="tabpanel" aria-labelledby="deployment-tab">
            <div class="scroll_content">
                <div class="container mt-5">
                    <table id="example" class="display nowrap" style="width:100%">
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
                                        class="btn btn-primary btn-sm"><i class="fas fa-check-circle"></i></span>' :
                                    '<span class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i></span>' !!}
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/searchbuilder/1.3.4/js/dataTables.searchBuilder.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Qlfrtip',
                columnDefs: [{
                    targets: [1]
                }]
            });
        });
    </script>
    @endsection
