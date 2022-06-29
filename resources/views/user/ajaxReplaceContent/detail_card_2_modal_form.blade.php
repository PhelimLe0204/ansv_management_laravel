<ul class="nav nav-tabs mb-3" id="myTab" role="tablist" style="margin-top: -3.5%;">
    <li class="nav-item">
        <a class="nav-link active text-uppercase" id="issue-modal-tab" data-toggle="tab"
            href="#detail-issue-modal" role="tab" aria-controls="issue-modal" aria-selected="true">
            Tình trạng
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-uppercase" id="solution-modal-tab" data-toggle="tab"
            href="#detail-solution-modal" role="tab" aria-controls="solution-modal" aria-selected="false">
            Giải pháp
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-uppercase" id="plan-modal-tab" data-toggle="tab"
            href="#detail-plan-modal" role="tab" aria-controls="plan-modal" aria-selected="false">
            Kế hoạch (2)
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-uppercase" id="result-modal-tab" data-toggle="tab"
            href="#detail-result-modal" role="tab" aria-controls="result-modal" aria-selected="false">
            Kết quả (2)
        </a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="detail-issue-modal" role="tabpanel" aria-labelledby="detail-issue-modal-tab">
        <div class="scroll_content" style="height: 333px;">
            <textarea name="general_issue" id="general_issue" class="form-control tinybasic"
                cols="30" rows="3">{!! $detail->general_issue !!}</textarea>
        </div>
    </div>
    <div class="tab-pane fade" id="detail-solution-modal" role="tabpanel" aria-labelledby="detail-solution-modal-tab">
        <div class="scroll_content" style="height: 333px;">
            <textarea name="solution" id="solution" class="form-control tinybasic"
                cols="30" rows="3">{!! $detail->solution !!}</textarea>
        </div>
    </div>
    <div class="tab-pane fade" id="detail-plan-modal" role="tabpanel" aria-labelledby="detail-plan-modal-tab">
        <div class="scroll_content" style="margin-top: -3%; height: 347px;">
            <ul class="nav nav-tabs pt-0" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active text-uppercase" id="current-week-plan-modal-tab" data-toggle="tab"
                        href="#current-week-plan-modal" role="tab" aria-controls="current-week-plan-modal" aria-selected="true">
                        <i class="feather icon-corner-down-right"></i> Tuần này
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" id="next-week-plan-modal-tab" data-toggle="tab"
                        href="#next-week-plan-modal" role="tab" aria-controls="next-week-plan-modal" aria-selected="false">
                        <i class="feather icon-corner-down-right"></i> Tuần sau
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="current-week-plan-modal" role="tabpanel" aria-labelledby="current-week-plan-modal-tab">
                    <textarea name="ke_hoach_tuan_nay" id="ke_hoach_tuan_nay" class="form-control tinybasic"
                        cols="30" rows="3">{!! $detail->ke_hoach_tuan_nay !!}</textarea>
                </div>
                <div class="tab-pane fade" id="next-week-plan-modal" role="tabpanel" aria-labelledby="next-week-plan-modal-tab">
                    <textarea name="ke_hoach_tuan_sau" id="ke_hoach_tuan_sau" class="form-control tinybasic"
                        cols="30" rows="3">{!! $detail->ke_hoach_tuan_sau !!}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="detail-result-modal" role="tabpanel" aria-labelledby="detail-result-modal-tab">
        <div class="scroll_content" style="margin-top: -3%; height: 347px;">
            <ul class="nav nav-tabs pt-0" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active text-uppercase" id="last-week-result-modal-tab" data-toggle="tab"
                        href="#last-week-result-modal" role="tab" aria-controls="last-week-result-modal" aria-selected="true">
                        <i class="feather icon-corner-down-right"></i> Tuần trước
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" id="current-week-result-2-tab" data-toggle="tab"
                        href="#current-week-result-2" role="tab" aria-controls="current-week-result-2" aria-selected="false">
                        <i class="feather icon-corner-down-right"></i> Tuần này
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="last-week-result-modal" role="tabpanel" aria-labelledby="last-week-result-modal-tab">
                    <textarea name="ket_qua_tuan_truoc" id="ket_qua_tuan_truoc" class="form-control tinybasic"
                        cols="30" rows="3">{!! $detail->ket_qua_tuan_truoc !!}</textarea>
                </div>
                <div class="tab-pane fade" id="current-week-result-2" role="tabpanel" aria-labelledby="current-week-result-2-tab">
                    <textarea name="ket_qua_tuan_nay" id="ket_qua_tuan_nay" class="form-control tinybasic"
                        cols="30" rows="3">{!! $detail->ket_qua_tuan_nay !!}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

