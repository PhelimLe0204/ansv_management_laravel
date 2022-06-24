<?php

namespace App\Http\Controllers\user;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Detail;
use App\Models\Pic;
use App\Models\StatisticOfDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use stdClass;

use function PHPSTORM_META\type;

class HomeController extends Controller
{
    //
    public function test_loadgo() {
        return view('user.demo_loadgo');
    }

    public function getCurrentTimes($week_request, $year_request) {
        $now = Carbon::now();
        $week = $now->weekOfYear + 1; // Tuần hiện tại (tính theo lịch công ty)
        $year = $now->year; // Năm hiện tại

        if ($week_request != null) {
            $week = (int)$week_request;
        }

        if ($year_request != null) {
            $year = (int)$year_request;
        }

        Session::put('week', $week);
        Session::put('year', $year);
    }

    // Hàm hỗ trợ viết SQL hiển thị trang index (1)
    public function innerjoin_for_index($week, $year) {
        $innerJoin = Detail::join('pic', 'pic.id', '=', 'detail.pic_id')
            ->join('users', 'users.id', '=', 'pic.user_id')
            ->join('project', 'project.id', '=', 'pic.project_id')
            ->join('customer', 'customer.id', '=', 'project.customer_id')
            ->join('priority', 'priority.id', '=', 'detail.priority_id')
            ->join('project_status', 'project_status.id', '=', 'detail.status_id')
            ->where('project.enabled', 1)->where('pic.enabled', 1)
            ->where('detail.week', ($week))->where('detail.year', $year);

        return $innerJoin;
    }

    // Hàm hỗ trợ viết SQL hiển thị trang index (2)
    public function statistic_query($week, $year, $type) {
        $statistic_query = StatisticOfDetail::select(
            'high_danger', 'high_warning', 'high_ongoing',
            'medium_danger', 'medium_warning', 'medium_ongoing',
            'low_danger', 'low_warning', 'low_ongoing',
            'done',
        )->where('year', $year)->where('week', $week)->where('type_id', $type)->get();

        return $statistic_query;
    }

    public function index(Request $request) {
        $this->getCurrentTimes($request->week, $request->year);
        $week = Session::get('week');
        $year = Session::get('year');

        // Dữ liệu thống kê
        $statistic_for_chart_1 = $this->statistic_query($week, $year, 3);
        $statistic_for_chart_2 = $this->statistic_query($week, $year, 1);
        $statistic_for_chart_3 = $this->statistic_query($week, $year, 2);

        // Dữ liệu Datatable (dự án Triển khai)
        $project_table_1 = $this->innerjoin_for_index($week, $year)
            ->select(
                'detail.id',
                'customer.customer',
                'detail.pm_name',
                'detail.job_name',
                'detail.type_id',
                'priority.priority',
                'project_status.project_status',
                'detail.general_issue',
                'detail.ke_hoach_tuan_sau'
            )->where('detail.type_id', 3)->where('pic.level', 2)->get();

        // Dữ liệu Datatable (dự án Viễn thông)
        $project_table_2 = $this->innerjoin_for_index($week, $year)
            ->select(
                'detail.id',
                'customer.customer',
                'detail.am_name',
                'detail.job_name',
                'detail.type_id',
                'priority.priority',
                'project_status.project_status',
                'detail.general_issue',
                'detail.ke_hoach_tuan_sau'
            )->where('detail.type_id', 1)->where('pic.level', 1)->get();

        // Dữ liệu Datatable (dự án Chuyển đổi số)
        $project_table_3 = $this->innerjoin_for_index($week, $year)
            ->select(
                'detail.id',
                'customer.customer',
                'detail.am_name',
                'detail.job_name',
                'detail.type_id',
                'priority.priority',
                'project_status.project_status',
                'detail.general_issue',
                'detail.ke_hoach_tuan_sau'
            )->where('detail.type_id', 2)->where('pic.level', 1)->get();

        // Dữ liệu Slideshow (dự án Triển khai)
        $project_slideshow = $this->innerjoin_for_index($week, $year)
            ->join('currency_unit', 'currency_unit.id', '=', 'detail.currency_unit_id')
            ->select(
                'detail.id',
                'project.id AS id_from',
                'project.project_name',
                'project.description',
                'customer.customer',
                'detail.am_name',
                'detail.pm_name',
                'detail.manager_name',
                'priority.priority',
                'project_status.project_status',
                'currency_unit.currency_unit',
                'detail.contract_code',
                'accounting_code',
                'detail.job_name',
                'detail.pham_vi_cung_cap',
                'detail.tong_gia_tri_thuc_te',
                'detail.so_tien_tam_ung',
                'detail.ke_hoach_tam_ung',

                'detail.so_tien_DAC',
                'detail.hop_dong_DAC',
                'detail.muc_tieu_DAC',
                'detail.thuc_te_DAC',

                'detail.so_tien_PAC',
                'detail.hop_dong_PAC',
                'detail.muc_tieu_PAC',
                'detail.thuc_te_PAC',

                'detail.so_tien_FAC',
                'detail.hop_dong_FAC',
                'detail.muc_tieu_FAC',
                'detail.thuc_te_FAC',

                'detail.general_issue',
                'detail.solution',
                'detail.ke_hoach_tuan_sau',
                'detail.ket_qua_tuan_nay'
            )->where('detail.type_id', 3)->where('pic.level', 2)->get();

        foreach ($project_slideshow as $item) {
            // Tính ngày chênh lệch giữa "thực tế" và "mục tiêu" (nếu "thực tế" null -> "thực tế" = "hiện tại")
            if ($item->thuc_te_DAC == null) {
                $item->cl_DAC = Carbon::parse($item->thuc_te_DAC)->diffInDays($item->muc_tieu_DAC);
                if (Carbon::parse($item->muc_tieu_DAC)->lt(now()) && $item->cl_DAC != 0) {
                    // Nếu "mục tiêu" sớm hơn "hiện tại" (quá hạn)
                    $item->cl_DAC = '<font color="red">-'.$item->cl_DAC.'</font>';
                }
            }
            if ($item->thuc_te_PAC == null) {
                $item->cl_PAC = Carbon::parse($item->thuc_te_PAC)->diffInDays($item->muc_tieu_PAC);
                if (Carbon::parse($item->muc_tieu_PAC)->lt(now()) && $item->cl_PAC != 0) {
                    // Nếu "mục tiêu" sớm hơn "hiện tại" (quá hạn)
                    $item->cl_PAC = '<font color="red">-'.$item->cl_PAC.'</font>';
                }
            }
            if ($item->thuc_te_FAC == null) {
                $item->cl_FAC = Carbon::parse($item->thuc_te_FAC)->diffInDays($item->muc_tieu_FAC);
                if (Carbon::parse($item->muc_tieu_FAC)->lt(now()) && $item->cl_FAC != 0) {
                    // Nếu "mục tiêu" sớm hơn "hiện tại" (quá hạn)
                    $item->cl_FAC = '<font color="red">-'.$item->cl_FAC.'</font>';
                }
            }
        }

        return view('user.dashboard.dashboard_index', compact('statistic_for_chart_1', 'statistic_for_chart_2', 'statistic_for_chart_3', 'project_table_1', 'project_table_2', 'project_table_3', 'project_slideshow'));
    }
}
