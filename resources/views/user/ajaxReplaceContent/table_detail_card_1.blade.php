<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active text-uppercase" id="introduce-tab" data-toggle="tab"
            href="#detail-introduce" role="tab" aria-controls="introduce" aria-selected="true">
            Định danh
        </a>
    </li>

    @if ($detail != null && $detail->type_id != 3)
        <li class="nav-item">
            <a class="nav-link text-uppercase" id="description-tab" data-toggle="tab"
                href="#detail-description" role="tab" aria-controls="description" aria-selected="false">
                Mô tả
            </a>
        </li>
    @endif

    <li class="nav-item">
        <a class="nav-link text-uppercase" id="more-tab" data-toggle="tab"
            href="#detail-more" role="tab" aria-controls="more" aria-selected="false">
            Thông tin thêm
        </a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="detail-introduce" role="tabpanel" aria-labelledby="detail-introduce-tab">
        @if ($detail != null)
            <table class="table table-hover table-bordered mt-3">
                <tr>
                    <th class="text-wrap" width="13%">Thuộc:</th>
                    <td>{{ $detail->project_name }}</td>
                </tr>
                <tr>
                    <th>Tên</th>
                    <td class="text-wrap">{{ $detail->job_name }}</td>
                </tr>
            </table>
        @else
            <span>Lỗi thông tin!<br>Vui lòng thực hiện reload.</span>
        @endif
    </div>

    @if ($detail != null && $detail->type_id != 3)
        <div class="tab-pane fade" id="detail-description" role="tabpanel" aria-labelledby="detail-description-tab">
            <div class="scroll_content" style="max-height: 240px;">
                <table>
                    <tr>
                        <td>{{ $detail->description }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endif

    <div class="tab-pane fade" id="detail-more" role="tabpanel" aria-labelledby="detail-more-tab">
        @if ($detail != null)
            <table class="table table-hover table-bordered mt-3">
                <tr>
                    <th>Khởi tạo</th>
                    <td>
                        {{ $detail->created_by }}
                        <span class="float-right">{{ date('M d, Y', strtotime($detail->created_at)) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Cập nhật</th>
                    <td>
                        {{ $detail->last_updated_by }}
                        <span class="float-right">{{ date('M d, Y', strtotime($detail->updated_at)) }}</span>
                    </td>
                </tr>
            </table>
        @else
            <span>Lỗi thông tin!<br>Vui lòng thực hiện reload.</span>
        @endif
    </div>
</div>
