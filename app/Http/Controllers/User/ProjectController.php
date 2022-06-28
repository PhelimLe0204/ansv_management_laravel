<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //
    // Hàm hỗ trợ viết SQL hiển thị trang detail (1)
    public function inner_join_for_detail($id) {
        $query = Detail::join('pic', 'pic.id', '=', 'detail.pic_id')
            ->join('project', 'project.id', '=', 'pic.project_id')
            ->join('customer', 'customer.id', '=', 'project.customer_id')
            ->join('priority', 'priority.id', '=', 'detail.priority_id')
            ->join('project_status', 'project_status.id', '=', 'detail.status_id')
            ->join('project_type', 'detail.type_id', '=', 'project_type.id')
            ->join('currency_unit', 'detail.currency_unit_id', '=', 'currency_unit.id')
            ->where('project.enabled', 1)
            ->where('detail.id', ($id));

        return $query;
    }

    // Hàm hỗ trợ viết SQL lấy ra user_name theo id (2)
    public function get_user_name_by_id($id) {
        $query = User::select('users.id', 'users.name AS user_name')
                ->join('user_roles', 'user_roles.user', '=', 'users.id')
                ->join('role', 'role.id', '=', 'user_roles.role')
                ->where('users.id', $id)->first();

        return $query;
    }

    public function detail(Request $request) {
        $id = $request->id;
        $type = $request->type;

        if ($type == 3) {
            $detail = $this->inner_join_for_detail($id)
                ->select("detail.id", "detail.am_name", "detail.pm_name", "detail.manager_name", "customer.customer",
                "project_type.id AS type_id", "project_type.project_type", "priority.priority", "project_status.project_status", "currency_unit.currency_unit",
                "detail.week", "detail.year", "detail.contract_code", "detail.accounting_code", "project.project_name",
                "detail.job_name", "detail.pham_vi_cung_cap", "detail.tong_gia_tri_thuc_te", "detail.so_tien_tam_ung",
                "detail.ke_hoach_tam_ung", "detail.so_tien_DAC", "detail.hop_dong_DAC", "detail.muc_tieu_DAC", "detail.thuc_te_DAC",
                "detail.so_tien_PAC", "detail.hop_dong_PAC", "detail.muc_tieu_PAC", "detail.thuc_te_PAC", "detail.so_tien_FAC",
                "detail.hop_dong_FAC", "detail.muc_tieu_FAC", "detail.thuc_te_FAC", "detail.general_issue", "detail.solution",
                "detail.ke_hoach_tuan_nay", "detail.ke_hoach_tuan_sau", "detail.ket_qua_tuan_truoc", "detail.ket_qua_tuan_nay",
                "detail.created_by", "detail.last_updated_by", "detail.created_at", "detail.updated_at")->first();

            // Lấy ra người tạo dự án
            $detail->created_by = $this->get_user_name_by_id($detail->created_by)->user_name;

            // Lấy ra người cập nhật cuối
            $detail->last_updated_by = $this->get_user_name_by_id($detail->last_updated_by)->user_name;
        } else {
            $detail = $this->inner_join_for_detail($id)
                ->select("detail.id", "detail.am_name", "detail.manager_name", "customer.customer", "project_type.project_type",
                "priority.priority", "project_status.project_status", "currency_unit.currency_unit", "detail.week", "detail.year",
                "project.project_name", "detail.job_name", "detail.description", "detail.tong_muc_dau_tu_du_kien",
                "detail.hinh_thuc_dau_tu", "detail.muc_do_kha_thi", "detail.phan_tich_swot", "detail.general_issue",
                "detail.solution", "detail.ke_hoach_tuan_nay", "detail.ke_hoach_tuan_sau", "detail.ket_qua_tuan_truoc",
                "detail.ket_qua_tuan_nay", "detail.created_by", "detail.last_updated_by", "detail.created_at", "detail.updated_at")
                ->first();
        }

        return view('user.project.detail', compact('detail'));
    }

    // Update dữ liệu từ trang detail
    public function update_from_detail(Request $request) {
        $result = Detail::where('id', $request->detail_id)
            ->update([
                'job_name' => $request->job_name,
                'last_updated_by' => $request->last_updated_by,
                'updated_at' => DB::raw('now()'),
            ]);

        // Lấy ra dữ liệu thay thế
        if ($result == 1) {
            $detail = Detail::join('pic', 'pic.id', '=', 'detail.pic_id')
                ->join('project', 'project.id', '=', 'pic.project_id')
                ->select('project.project_name', "detail.type_id", 'detail.job_name', 'detail.created_by', 'detail.created_at', 'detail.last_updated_by', 'detail.created_at')
                ->where('detail.id', $request->detail_id)->first();

            // Lấy ra người tạo dự án
            $detail->created_by = $this->get_user_name_by_id($detail->created_by)->user_name;

            // Lấy ra người cập nhật cuối
            $detail->last_updated_by = $this->get_user_name_by_id($detail->last_updated_by)->user_name;
        } else {
            return $result;
        }

        return view('user.ajaxReplaceContent.table_detail_card_1', compact('detail'));
    }
}
