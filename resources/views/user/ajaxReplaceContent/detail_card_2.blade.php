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

<div class="tab-content" id="myTabContent1">
    <div class="tab-pane fade show active" id="detail-issue" role="tabpanel" aria-labelledby="detail-issue-tab">
        <div class="scroll_content" style="height: 333px;">
            @if ($detail != null)
                <table class="table table-hover table-bordered">
                    <tr>
                        <td>{!! $detail->general_issue !!}</td>
                    </tr>
                </table>
            @else
                <span>Lỗi thông tin!<br>Vui lòng thực hiện reload.</span>
            @endif
        </div>
    </div>
    <div class="tab-pane fade" id="detail-solution" role="tabpanel" aria-labelledby="detail-solution-tab">
        <div class="scroll_content" style="height: 333px;">
            @if ($detail != null)
                <table class="table table-hover table-bordered">
                    <tr>
                        <td>{!! $detail->solution !!}</td>
                    </tr>
                </table>
            @else
                <span>Lỗi thông tin!<br>Vui lòng thực hiện reload.</span>
            @endif
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
            <div class="tab-content" id="myTabContent2_1">
                <div class="tab-pane fade show active" id="current-week-plan" role="tabpanel" aria-labelledby="current-week-plan-tab">
                    @if ($detail != null)
                        <table class="table table-hover table-bordered">
                            <tr>
                                <td>{!! $detail->ke_hoach_tuan_nay !!}</td>
                            </tr>
                        </table>
                    @else
                        <span>Lỗi thông tin!<br>Vui lòng thực hiện reload.</span>
                    @endif
                </div>
                <div class="tab-pane fade" id="next-week-plan" role="tabpanel" aria-labelledby="next-week-plan-tab">
                    @if ($detail != null)
                        <table class="table table-hover table-bordered">
                            <tr>
                                <td>{!! $detail->ke_hoach_tuan_sau !!}</td>
                            </tr>
                        </table>
                    @else
                        <span>Lỗi thông tin!<br>Vui lòng thực hiện reload.</span>
                    @endif
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
                    @if ($detail != null)
                        <table class="table table-hover table-bordered">
                            <tr>
                                <td>{!! $detail->ket_qua_tuan_truoc !!}</td>
                            </tr>
                        </table>
                    @else
                        <span>Lỗi thông tin!<br>Vui lòng thực hiện reload.</span>
                    @endif
                </div>
                <div class="tab-pane fade" id="current-week-result" role="tabpanel" aria-labelledby="current-week-result-tab">
                    @if ($detail != null)
                        <table class="table table-hover table-bordered">
                            <tr>
                                <td>{!! $detail->ket_qua_tuan_nay !!}</td>
                            </tr>
                        </table>
                    @else
                        <span>Lỗi thông tin!<br>Vui lòng thực hiện reload.</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
