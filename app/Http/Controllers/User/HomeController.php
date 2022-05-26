<?php

namespace App\Http\Controllers\user;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Detail;
use App\Models\Pic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function getCurrentTimes () {
        $now = Carbon::now();
        $week = $now->weekOfYear + 1;
        $year = $now->year;

        Session::put('week', $week);
        Session::put('year', $year);
    }

    public function getDatatable (Request $request) {
        $projects = Detail::select('project.id', 'customer.customer', 'users.name', 'detail.job_name',
                                'detail.general_issue', 'detail.ke_hoach_tuan_sau')
                            ->join('pic', 'pic.id', '=', 'detail.pic_id')
                            ->join('users', 'users.id', '=', 'pic.user_id')
                            ->join('project', 'project.id', '=', 'pic.project_id')
                            ->join('customer', 'customer.id', '=', 'project.customer_id')
                            ->join('priority', 'priority.id', '=', 'detail.priority_id')
                            ->join('project_status', 'project_status.id', '=', 'detail.status_id')
                            ->where('detail.type_id', $request->project_type)->where('pic.level', $request->pic_level)
                            ->where('project.enabled', 1)->where('pic.enabled', 1)
                            ->where('detail.week', $request->week)->where('detail.year', $request->year)
                            ->get();
        return $projects;
    }

    public function index () {
        $this->getCurrentTimes(); // Láy ra "tuần hiện tại" và năm hiện tại -> lưu session
        $now = Carbon::now('Asia/Ho_Chi_Minh');

        $innerJoin = Detail::join('pic', 'pic.id', '=', 'detail.pic_id')
                            ->join('users', 'users.id', '=', 'pic.user_id')
                            ->join('project', 'project.id', '=', 'pic.project_id')
                            ->join('customer', 'customer.id', '=', 'project.customer_id')
                            ->join('priority', 'priority.id', '=', 'detail.priority_id')
                            ->join('project_status', 'project_status.id', '=', 'detail.status_id')
                            ->where('detail.type_id', 3)->where('pic.level', 2)
                            ->where('project.enabled', 1)->where('pic.enabled', 1)
                            ->where('detail.week', ($now->weekOfYear + 1))->where('detail.year', $now->year);

        // Dữ liệu Datatable (dự án Triển khai)
        $project_table = $innerJoin->select('detail.id', 'customer.customer', 'users.name AS pic_name', 'detail.job_name', 'detail.type_id',
                                        'priority.priority', 'detail.general_issue', 'detail.ke_hoach_tuan_sau')
                                        ->get();

        // Dữ liệu Slideshow (dự án Triển khai)
        $project_slideshow = $innerJoin->join('currency_unit', 'currency_unit.id', '=', 'detail.currency_unit_id')
                                        ->select('detail.id', 'project.id AS id_from', 'project.project_name', 'customer.customer', 'users.name AS pm_name', 'priority.priority',
                                        'project_status.project_status', 'currency_unit.currency_unit', 'detail.contract_code',
                                        'accounting_code', 'detail.job_name', 'detail.pham_vi_cung_cap', 'detail.tong_gia_tri_thuc_te',
                                        'detail.so_tien_tam_ung', 'detail.ke_hoach_tam_ung',
                                        'detail.so_tien_DAC', 'detail.hop_dong_DAC', 'detail.muc_tieu_DAC', 'detail.thuc_te_DAC',
                                        'detail.so_tien_PAC', 'detail.hop_dong_PAC', 'detail.muc_tieu_PAC', 'detail.thuc_te_PAC',
                                        'detail.so_tien_FAC', 'detail.hop_dong_FAC', 'detail.muc_tieu_FAC', 'detail.thuc_te_FAC',
                                        'detail.general_issue', 'detail.ke_hoach_tuan_sau', 'detail.ket_qua_tuan_nay')
                                        ->get();

        foreach ($project_slideshow as $item){
            $item->am_name = User::select('users.name')
                                    ->join('pic', 'pic.user_id', '=', 'users.id')
                                    ->join('project', 'project.id', '=', 'pic.project_id')
                                    ->where('project.id', $item->id_from)
                                    ->where('pic.level', 1)
                                    ->first()->name;
        }

        // return($project_slideshow);
        return view('user.index', compact('project_table', 'project_slideshow'));
    }
}
