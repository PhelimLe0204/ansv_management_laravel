<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    // Hàm hỗ trợ viết SQL hiển thị trang detail (1)
    public function innerjoin_for_detail($id) {
        $innerJoin = Detail::join('pic', 'pic.id', '=', 'detail.pic_id')
            ->join('project', 'project.id', '=', 'pic.project_id')
            ->join('customer', 'customer.id', '=', 'project.customer_id')
            ->join('priority', 'priority.id', '=', 'detail.priority_id')
            ->join('project_status', 'project_status.id', '=', 'detail.status_id')
            ->join('project_type', 'detail.type_id', '=', 'project_type.id')
            ->join('currency_unit', 'detail.currency_unit_id', '=', 'currency_unit.id')
            ->where('project.enabled', 1)
            ->where('detail.id', ($id));

        return $innerJoin;
    }

    public function detail(Request $request) {
        $id = $request->id;
        $type = $request->type;

        if ($type == 3) {
            $detail = $this->innerjoin_for_detail($id)
                ->select("detail.id", "detail.am_name", "detail.pm_name", "detail.manager_name", "customer.customer",
                "project_type.project_type", "priority.priority", "project_status.project_status", "currency_unit.currency_unit",
                "detail.week", "detail.year", "detail.contract_code", "detail.accounting_code", "project.project_name",
                "detail.job_name", "detail.pham_vi_cung_cap", "detail.tong_gia_tri_thuc_te", "detail.so_tien_tam_ung",
                "detail.ke_hoach_tam_ung", "detail.so_tien_DAC", "detail.hop_dong_DAC", "detail.muc_tieu_DAC", "detail.thuc_te_DAC",
                "detail.so_tien_PAC", "detail.hop_dong_PAC", "detail.muc_tieu_PAC", "detail.thuc_te_PAC", "detail.so_tien_FAC",
                "detail.hop_dong_FAC", "detail.muc_tieu_FAC", "detail.thuc_te_FAC", "detail.general_issue", "detail.solution",
                "detail.ke_hoach_tuan_nay", "detail.ke_hoach_tuan_sau", "detail.ket_qua_tuan_truoc", "detail.ket_qua_tuan_nay",
                "detail.created_at", "detail.updated_at")->get();
        } else {
            $detail = $this->innerjoin_for_detail($id)
                ->select("detail.id", "detail.am_name", "detail.manager_name", "customer.customer", "project_type.project_type",
                "priority.priority", "project_status.project_status", "currency_unit.currency_unit", "detail.week", "detail.year",
                "project.project_name", "detail.job_name", "detail.description", "detail.tong_muc_dau_tu_du_kien",
                "detail.hinh_thuc_dau_tu", "detail.muc_do_kha_thi", "detail.phan_tich_swot", "detail.general_issue",
                "detail.solution", "detail.ke_hoach_tuan_nay", "detail.ke_hoach_tuan_sau", "detail.ket_qua_tuan_truoc",
                "detail.ket_qua_tuan_nay", "detail.created_at", "detail.updated_at")->get();
        }

        return view('user.project.detail', compact('detail'));
    }
}
