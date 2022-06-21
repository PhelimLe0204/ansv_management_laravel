<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'staff_code'    => '123456',
                'name'          => 'Lê Văn Thành',
                'email'         => 'levanthanh@gmail.com',
                'password'      => Hash::make('123456'),
                'avatar'        => 'abc.jpg',
                'enabled'       => 1,
                'description'   => 'Đây là user 1',
            ],
            [
                'staff_code'    => '654321',
                'name'          => 'Bùi Đức Tiến',
                'email'         => 'buiductien@gmail.com',
                'password'      => Hash::make('123456'),
                'avatar'        => 'xyz.jpg',
                'enabled'       => 1,
                'description'   => 'Đây là user 2',
            ],
            [
                'staff_code'    => '135246',
                'name'          => 'Cù Đức Hiệp',
                'email'         => 'cuduchiep@gmail.com',
                'password'      => Hash::make('123456'),
                'avatar'        => 'hik.jpg',
                'enabled'       => 1,
                'description'   => 'Đây là user 3',
            ],
            [
                'staff_code'    => '246135',
                'name'          => 'Nguyễn Minh Thy',
                'email'         => 'nguyenminhthy@gmail.com',
                'password'      => Hash::make('123456'),
                'avatar'        => 'hik.jpg',
                'enabled'       => 1,
                'description'   => 'Đây là user 4',
            ],
            [
                'staff_code'    => '123234',
                'name'          => 'Trần Thanh Nga',
                'email'         => 'tranthanhnga@gmail.com',
                'password'      => Hash::make('123456'),
                'avatar'        => 'hik.jpg',
                'enabled'       => 1,
                'description'   => 'Đây là user 5',
            ],
            [
                'staff_code'    => '123234',
                'name'          => 'Nguyễn Văn A',
                'email'         => 'nguyenvana@gmail.com',
                'password'      => Hash::make('123456'),
                'avatar'        => 'hik.jpg',
                'enabled'       => 1,
                'description'   => 'Đây là user 6',
            ],
            [
                'staff_code'    => '123234',
                'name'          => 'Lê Văn B',
                'email'         => 'levanb@gmail.com',
                'password'      => Hash::make('123456'),
                'avatar'        => 'hik.jpg',
                'enabled'       => 1,
                'description'   => 'Đây là user 7',
            ],
            [
                'staff_code'    => '123234',
                'name'          => 'Trần Thị c',
                'email'         => 'tranthic@gmail.com',
                'password'      => Hash::make('123456'),
                'avatar'        => 'hik.jpg',
                'enabled'       => 1,
                'description'   => 'Đây là user 8',
            ],
        ]);

        DB::table('role')->insert([
            [
                'name'          => 'ROLE_ADMIN',
                'level'         => 1,
                'role_explain'  => 'Administrator',
                'display'       => 'Quản trị viên',
            ],
            [
                'name'          => 'ROLE_CEO',
                'level'         => 2,
                'role_explain'  => 'Chief Executive Officer',
                'display'       => 'Tổng giám đốc',
            ],
            [
                'name'          => 'ROLE_DGM',
                'level'         => 3,
                'role_explain'  => 'Deputy General Manager',
                'display'       => 'Phó tổng giám đốc',
            ],
            [
                'name'          => 'ROLE_ES',
                'level'         => 4,
                'role_explain'  => 'Executive Secretary',
                'display'       => 'Thư ký ban giám đốc',
            ],
            [
                'name'          => 'ROLE_SE',
                'level'         => 5,
                'role_explain'  => 'Secretary',
                'display'       => 'Thư ký',
            ],
            [
                'name'          => 'ROLE_BM',
                'level'         => 6,
                'role_explain'  => 'Branch Manager',
                'display'       => 'Giám đốc chi nhánh',
            ],
            [
                'name'          => 'ROLE_DD',
                'level'         => 7,
                'role_explain'  => 'Deputy Director',
                'display'       => 'Phó giám đốc chi nhánh',
            ],
            [
                'name'          => 'ROLE_HoD',
                'level'         => 8,
                'role_explain'  => 'Head of Department',
                'display'       => 'Trưởng phòng',
            ],
            [
                'name'          => 'ROLE_DoD',
                'level'         => 9,
                'role_explain'  => 'Deputy of Department',
                'display'       => 'Phó phòng',
            ],
            [
                'name'          => 'ROLE_TL',
                'level'         => 10,
                'role_explain'  => 'Team Leader',
                'display'       => 'Trưởng nhóm',
            ],
            [
                'name'          => 'ROLE_AM',
                'level'         => 11,
                'role_explain'  => 'Account Manager',
                'display'       => 'Người cung cấp dự án',
            ],
            [
                'name'          => 'ROLE_PM',
                'level'         => 12,
                'role_explain'  => 'Project Manager',
                'display'       => 'Người thực hiện dự án',
            ],
            [
                'name'          => 'ROLE_MB',
                'level'         => 13,
                'role_explain'  => 'Member',
                'display'       => 'Thành viên / Nhân viên',
            ],
        ]);

        DB::table('user_roles')->insert([
            [   'user' => 1, 'role' => 1,   ],
            [   'user' => 2, 'role' => 2,   ],
            [   'user' => 3, 'role' => 3,   ],
            [   'user' => 4, 'role' => 11,  ],
            [   'user' => 5, 'role' => 11,  ],
            [   'user' => 6, 'role' => 12,  ],
            [   'user' => 7, 'role' => 12,  ],
            [   'user' => 8, 'role' => 13,  ],
        ]);

        DB::table('customer')->insert([
            [
                'customer'  => 'Khách hàng 1',
                'enabled'   => '1',
            ],
            [
                'customer'  => 'Khách hàng 2',
                'enabled'   => '1',
            ],
            [
                'customer'  => 'Khách hàng 3',
                'enabled'   => '1',
            ],
            [
                'customer'  => 'Khách hàng 4',
                'enabled'   => '1',
            ],
            [
                'customer'  => 'Khách hàng 5',
                'enabled'   => '1',
            ],
        ]);

        DB::table('project_type')->insert([
            [
                'project_type'  => 'Viễn thông',
                'explain'       => 'Dự án giai đoạn 1',
            ],
            [
                'project_type'  => 'Chuyển đổi số',
                'explain'       => 'Dự án giai đoạn 1',
            ],
            [
                'project_type'  => 'Triển khai',
                'explain'       => 'Dự án giai đoạn 2',
            ],
        ]);

        DB::table('priority')->insert([
            [
                'priority'  => 'First',
                'explain'   => 'Ưu tiên mức độ cao',
            ],
            [
                'priority'  => 'Second',
                'explain'   => 'Ưu tiên mức độ trung bình',
            ],
            [
                'priority'  => 'Third',
                'explain'   => 'Ưu tiên mức độ thấp',
            ],
            [
                'priority'  => 'None',
                'explain'   => 'Không được ưu tiên',
            ],
        ]);

        DB::table('project_status')->insert([
            [
                'project_status'    => 'High',
                'explain'           => 'Tiến độ dự án đáng báo động',
            ],
            [
                'project_status'    => 'Medium',
                'explain'           => 'Tiến độ dự án chậm',
            ],
            [
                'project_status'    => 'Low',
                'explain'           => 'Tiến độ dự án suôn sẻ',
            ],
            [
                'project_status'    => 'None',
                'explain'           => 'Không có tình trạng',
            ],
        ]);

        DB::table('currency_unit')->insert([
            [
                'currency_unit' => 'VNĐ',
                'explain'       => 'Đồng Việt Nam',
            ],
            [
                'currency_unit' => 'USD',
                'explain'       => 'Đồng đô la Mỹ',
            ],
            [
                'currency_unit' => 'EURO',
                'explain'       => 'Đồng tiền chung châu Âu',
            ],
        ]);

        DB::table('project')->insert([
            [
                'customer_id'   => 1,
                'project_name'  => 'Dự án 1',
                'description'   => 'Đây là dự án 1',
                'enabled'       => 1,
            ],
            [
                'customer_id'   => 2,
                'project_name'  => 'Dự án 2',
                'description'   => 'Đây là dự án 2',
                'enabled'       => 1,
            ],
            [
                'customer_id'   => 3,
                'project_name'  => 'Dự án 3',
                'description'   => 'Đây là dự án 3',
                'enabled'       => 1,
            ],
            [
                'customer_id'   => 4,
                'project_name'  => 'Dự án 4',
                'description'   => 'Đây là dự án 4',
                'enabled'       => 1,
            ],
            [
                'customer_id'   => 5,
                'project_name'  => 'Dự án 5',
                'description'   => 'Đây là dự án 5',
                'enabled'       => 1,
            ],
        ]);

        DB::table('pic')->insert([
            // PIC dự án 1
            [
                'project_id'    => 1,
                'user_id'       => 4,
                'level'         => 1,
                'progress'      => 30,
                'enabled'       => 1,
                'assigned_by'   => 'System',
            ],

            // PIC dự án 2
            [
                'project_id'    => 2,
                'user_id'       => 5,
                'level'         => 1,
                'progress'      => 40,
                'enabled'       => 1,
                'assigned_by'   => 'System',
            ],

            // PIC dự án 3
            [
                'project_id'    => 3,
                'user_id'       => 4,
                'level'         => 1,
                'progress'      => 80,
                'enabled'       => 1,
                'assigned_by'   => 'System',
            ],
            [
                'project_id'    => 3,
                'user_id'       => 6,
                'level'         => 2,
                'progress'      => 30,
                'enabled'       => 1,
                'assigned_by'   => 'Nguyễn Minh Thy',
            ],

            // PIC dự án 4
            [
                'project_id'    => 4,
                'user_id'       => 5,
                'level'         => 1,
                'progress'      => 80,
                'enabled'       => 1,
                'assigned_by'   => 'System',
            ],
            [
                'project_id'    => 4,
                'user_id'       => 7,
                'level'         => 2,
                'progress'      => 35,
                'enabled'       => 1,
                'assigned_by'   => 'Trần Thanh Nga',
            ],
        ]);

        DB::table('detail')->insert([
            // Báo cáo dự án 1
            [
                'pic_id'                    => 1,
                'type_id'                   => 1,
                'priority_id'               => 3,
                'status_id'                 => 2,
                'currency_unit_id'          => 1,
                'week'                      => 25,
                'year'                      => 2022,
                'contract_code'             => null,
                'accounting_code'           => null,
                'job_name'                  => 'Báo cáo lần 1 - Dự án 1',

                'description'               => 'Đây là bài báo cáo lần 1 của dự án 1',
                'tong_muc_dau_tu_du_kien'   => '1 tỷ',
                'hinh_thuc_dau_tu'          => 'Không xác định',
                'muc_do_kha_thi'            => 75,
                'phan_tich_SWOT'            => 'Phân tích SWOT 1',

                'pham_vi_cung_cap'          => null,
                'tong_gia_tri_thuc_te'      => null,
                'so_tien_tam_ung'           => null,
                'ke_hoach_tam_ung'          => null,

                'so_tien_DAC'               => null,
                'hop_dong_DAC'              => null,
                'muc_tieu_DAC'              => null,
                'thuc_te_DAC'               => null,

                'so_tien_PAC'               => null,
                'hop_dong_PAC'              => null,
                'muc_tieu_PAC'              => null,
                'thuc_te_PAC'               => null,

                'so_tien_FAC'               => null,
                'hop_dong_FAC'              => null,
                'muc_tieu_FAC'              => null,
                'thuc_te_FAC'               => null,

                'general_issue'             => 'Vấn đề chung 1',
                'solution'                  => 'Giải pháp 1',
                'ke_hoach_tuan_nay'         => 'Kế hoạch tuần này 1',
                'ke_hoach_tuan_sau'         => 'Kế hoạch tuần sau 1',
                'ket_qua_tuan_truoc'        => 'Kết quả tuần trước 1',
                'ket_qua_tuan_nay'          => 'Kết quả tuần này 1',
            ],
            [
                'pic_id'                    => 1,
                'type_id'                   => 1,
                'priority_id'               => 2,
                'status_id'                 => 1,
                'currency_unit_id'          => 1,
                'week'                      => 26,
                'year'                      => 2022,
                'contract_code'             => null,
                'accounting_code'           => null,
                'job_name'                  => 'Báo cáo lần 2 - Dự án 1',

                'description'               => 'Đây là bài báo cáo lần 2 của dự án 1',
                'tong_muc_dau_tu_du_kien'   => '1.5 tỷ',
                'hinh_thuc_dau_tu'          => 'Không xác định',
                'muc_do_kha_thi'            => 80,
                'phan_tich_SWOT'            => 'Phân tích SWOT 1',

                'pham_vi_cung_cap'          => null,
                'tong_gia_tri_thuc_te'      => null,
                'so_tien_tam_ung'           => null,
                'ke_hoach_tam_ung'          => null,

                'so_tien_DAC'               => null,
                'hop_dong_DAC'              => null,
                'muc_tieu_DAC'              => null,
                'thuc_te_DAC'               => null,

                'so_tien_PAC'               => null,
                'hop_dong_PAC'              => null,
                'muc_tieu_PAC'              => null,
                'thuc_te_PAC'               => null,

                'so_tien_FAC'               => null,
                'hop_dong_FAC'              => null,
                'muc_tieu_FAC'              => null,
                'thuc_te_FAC'               => null,

                'general_issue'             => 'Vấn đề chung 2',
                'solution'                  => 'Giải pháp 2',
                'ke_hoach_tuan_nay'         => 'Kế hoạch tuần này 2',
                'ke_hoach_tuan_sau'         => 'Kế hoạch tuần sau 2',
                'ket_qua_tuan_truoc'        => 'Kết quả tuần trước 2',
                'ket_qua_tuan_nay'          => 'Kết quả tuần này 2',
            ],

            // Báo cáo dự án 2
            [
                'pic_id'                    => 2,
                'type_id'                   => 2,
                'priority_id'               => 2,
                'status_id'                 => 3,
                'currency_unit_id'          => 1,
                'week'                      => 25,
                'year'                      => 2022,
                'contract_code'             => null,
                'accounting_code'           => null,
                'job_name'                  => 'Báo cáo lần 1 - Dự án 2',

                'description'               => 'Đây là bài báo cáo lần 1 của dự án 2',
                'tong_muc_dau_tu_du_kien'   => '2 tỷ',
                'hinh_thuc_dau_tu'          => 'Không xác định',
                'muc_do_kha_thi'            => 66,
                'phan_tich_SWOT'            => 'Phân tích SWOT 1',

                'pham_vi_cung_cap'          => null,
                'tong_gia_tri_thuc_te'      => null,
                'so_tien_tam_ung'           => null,
                'ke_hoach_tam_ung'          => null,

                'so_tien_DAC'               => null,
                'hop_dong_DAC'              => null,
                'muc_tieu_DAC'              => null,
                'thuc_te_DAC'               => null,

                'so_tien_PAC'               => null,
                'hop_dong_PAC'              => null,
                'muc_tieu_PAC'              => null,
                'thuc_te_PAC'               => null,

                'so_tien_FAC'               => null,
                'hop_dong_FAC'              => null,
                'muc_tieu_FAC'              => null,
                'thuc_te_FAC'               => null,

                'general_issue'             => 'Vấn đề chung 3',
                'solution'                  => 'Giải pháp 3',
                'ke_hoach_tuan_nay'         => 'Kế hoạch tuần này 3',
                'ke_hoach_tuan_sau'         => 'Kế hoạch tuần sau 3',
                'ket_qua_tuan_truoc'        => 'Kết quả tuần trước 3',
                'ket_qua_tuan_nay'          => 'Kết quả tuần này 3',
            ],
            [
                'pic_id'                    => 2,
                'type_id'                   => 2,
                'priority_id'               => 1,
                'status_id'                 => 3,
                'currency_unit_id'          => 1,
                'week'                      => 26,
                'year'                      => 2022,
                'contract_code'             => null,
                'accounting_code'           => null,
                'job_name'                  => 'Báo cáo lần 2 - Dự án 2',

                'description'               => 'Đây là bài báo cáo lần 2 của dự án 2',
                'tong_muc_dau_tu_du_kien'   => '2.3 tỷ',
                'hinh_thuc_dau_tu'          => 'Không xác định',
                'muc_do_kha_thi'            => 88,
                'phan_tich_SWOT'            => 'Phân tích SWOT 1',

                'pham_vi_cung_cap'          => null,
                'tong_gia_tri_thuc_te'      => null,
                'so_tien_tam_ung'           => null,
                'ke_hoach_tam_ung'          => null,

                'so_tien_DAC'               => null,
                'hop_dong_DAC'              => null,
                'muc_tieu_DAC'              => null,
                'thuc_te_DAC'               => null,

                'so_tien_PAC'               => null,
                'hop_dong_PAC'              => null,
                'muc_tieu_PAC'              => null,
                'thuc_te_PAC'               => null,

                'so_tien_FAC'               => null,
                'hop_dong_FAC'              => null,
                'muc_tieu_FAC'              => null,
                'thuc_te_FAC'               => null,

                'general_issue'             => 'Vấn đề chung 4',
                'solution'                  => 'Giải pháp 4',
                'ke_hoach_tuan_nay'         => 'Kế hoạch tuần này 4',
                'ke_hoach_tuan_sau'         => 'Kế hoạch tuần sau 4',
                'ket_qua_tuan_truoc'        => 'Kết quả tuần trước 4',
                'ket_qua_tuan_nay'          => 'Kết quả tuần này 4',
            ],

            // Báo cáo dự án 3
            [
                'pic_id'                    => 3,
                'type_id'                   => 2,
                'priority_id'               => 1,
                'status_id'                 => 2,
                'currency_unit_id'          => 1,
                'week'                      => 25,
                'year'                      => 2022,
                'contract_code'             => null,
                'accounting_code'           => null,
                'job_name'                  => 'Báo cáo lần 1 - Dự án 3',

                'description'               => 'Đây là bài báo cáo lần 1 của dự án 3',
                'tong_muc_dau_tu_du_kien'   => '11 tỷ',
                'hinh_thuc_dau_tu'          => 'Không xác định',
                'muc_do_kha_thi'            => 58,
                'phan_tich_SWOT'            => 'Phân tích SWOT 1',

                'pham_vi_cung_cap'          => null,
                'tong_gia_tri_thuc_te'      => null,
                'so_tien_tam_ung'           => null,
                'ke_hoach_tam_ung'          => null,

                'so_tien_DAC'               => null,
                'hop_dong_DAC'              => null,
                'muc_tieu_DAC'              => null,
                'thuc_te_DAC'               => null,

                'so_tien_PAC'               => null,
                'hop_dong_PAC'              => null,
                'muc_tieu_PAC'              => null,
                'thuc_te_PAC'               => null,

                'so_tien_FAC'               => null,
                'hop_dong_FAC'              => null,
                'muc_tieu_FAC'              => null,
                'thuc_te_FAC'               => null,

                'general_issue'             => 'Vấn đề chung 5',
                'solution'                  => 'Giải pháp 5',
                'ke_hoach_tuan_nay'         => 'Kế hoạch tuần này 5',
                'ke_hoach_tuan_sau'         => 'Kế hoạch tuần sau 5',
                'ket_qua_tuan_truoc'        => 'Kết quả tuần trước 5',
                'ket_qua_tuan_nay'          => 'Kết quả tuần này 5',
            ],
            [
                'pic_id'                    => 4,
                'type_id'                   => 3,
                'priority_id'               => 2,
                'status_id'                 => 2,
                'currency_unit_id'          => 1,
                'week'                      => 26,
                'year'                      => 2022,
                'contract_code'             => null,
                'accounting_code'           => null,
                'job_name'                  => 'Báo cáo lần 2 - Dự án 3',

                'description'               => null,
                'tong_muc_dau_tu_du_kien'   => null,
                'hinh_thuc_dau_tu'          => null,
                'muc_do_kha_thi'            => null,
                'phan_tich_SWOT'            => null,

                'pham_vi_cung_cap'          => 'Phạm vi cung cấp 1',
                'tong_gia_tri_thuc_te'      => '12312836138',
                'so_tien_tam_ung'           => 32492429479,
                'ke_hoach_tam_ung'          => null,

                'so_tien_DAC'               => 123971491739173,
                'hop_dong_DAC'              => null,
                'muc_tieu_DAC'              => null,
                'thuc_te_DAC'               => null,

                'so_tien_PAC'               => 2749274924,
                'hop_dong_PAC'              => null,
                'muc_tieu_PAC'              => null,
                'thuc_te_PAC'               => null,

                'so_tien_FAC'               => 2034248204,
                'hop_dong_FAC'              => null,
                'muc_tieu_FAC'              => null,
                'thuc_te_FAC'               => null,

                'general_issue'             => 'Vấn đề chung 6',
                'solution'                  => 'Giải pháp 6',
                'ke_hoach_tuan_nay'         => 'Kế hoạch tuần này 6',
                'ke_hoach_tuan_sau'         => 'Kế hoạch tuần sau 6',
                'ket_qua_tuan_truoc'        => 'Kết quả tuần trước 6',
                'ket_qua_tuan_nay'          => 'Kết quả tuần này 6',
            ],

            // Báo cáo dự án 4
            [
                'pic_id'                    => 5,
                'type_id'                   => 1,
                'priority_id'               => 3,
                'status_id'                 => 3,
                'currency_unit_id'          => 1,
                'week'                      => 25,
                'year'                      => 2022,
                'contract_code'             => null,
                'accounting_code'           => null,
                'job_name'                  => 'Báo cáo lần 1 - Dự án 4',

                'description'               => 'Đây là bài báo cáo lần 1 của dự án 4',
                'tong_muc_dau_tu_du_kien'   => '1.1 tỷ',
                'hinh_thuc_dau_tu'          => 'Không xác định',
                'muc_do_kha_thi'            => 98,
                'phan_tich_SWOT'            => 'Phân tích SWOT 1',

                'pham_vi_cung_cap'          => null,
                'tong_gia_tri_thuc_te'      => null,
                'so_tien_tam_ung'           => null,
                'ke_hoach_tam_ung'          => null,

                'so_tien_DAC'               => null,
                'hop_dong_DAC'              => null,
                'muc_tieu_DAC'              => null,
                'thuc_te_DAC'               => null,

                'so_tien_PAC'               => null,
                'hop_dong_PAC'              => null,
                'muc_tieu_PAC'              => null,
                'thuc_te_PAC'               => null,

                'so_tien_FAC'               => null,
                'hop_dong_FAC'              => null,
                'muc_tieu_FAC'              => null,
                'thuc_te_FAC'               => null,

                'general_issue'             => 'Vấn đề chung 7',
                'solution'                  => 'Giải pháp 7',
                'ke_hoach_tuan_nay'         => 'Kế hoạch tuần này 7',
                'ke_hoach_tuan_sau'         => 'Kế hoạch tuần sau 7',
                'ket_qua_tuan_truoc'        => 'Kết quả tuần trước 7',
                'ket_qua_tuan_nay'          => 'Kết quả tuần này 7',
            ],
            [
                'pic_id'                    => 6,
                'type_id'                   => 3,
                'priority_id'               => 1,
                'status_id'                 => 1,
                'currency_unit_id'          => 1,
                'week'                      => 26,
                'year'                      => 2022,
                'contract_code'             => null,
                'accounting_code'           => null,
                'job_name'                  => 'Báo cáo lần 2 - Dự án 4',

                'description'               => null,
                'tong_muc_dau_tu_du_kien'   => null,
                'hinh_thuc_dau_tu'          => null,
                'muc_do_kha_thi'            => null,
                'phan_tich_SWOT'            => null,

                'pham_vi_cung_cap'          => 'Phạm vi cung cấp 1223',
                'tong_gia_tri_thuc_te'      => '12312836138',
                'so_tien_tam_ung'           => 32492429479,
                'ke_hoach_tam_ung'          => null,

                'so_tien_DAC'               => 123971491739173,
                'hop_dong_DAC'              => null,
                'muc_tieu_DAC'              => null,
                'thuc_te_DAC'               => null,

                'so_tien_PAC'               => 2749274924,
                'hop_dong_PAC'              => null,
                'muc_tieu_PAC'              => null,
                'thuc_te_PAC'               => null,

                'so_tien_FAC'               => 2034248204,
                'hop_dong_FAC'              => null,
                'muc_tieu_FAC'              => null,
                'thuc_te_FAC'               => null,

                'general_issue'             => 'Vấn đề chung 8',
                'solution'                  => 'Giải pháp 8',
                'ke_hoach_tuan_nay'         => 'Kế hoạch tuần này 8',
                'ke_hoach_tuan_sau'         => 'Kế hoạch tuần sau 8',
                'ket_qua_tuan_truoc'        => 'Kết quả tuần trước 8',
                'ket_qua_tuan_nay'          => 'Kết quả tuần này 8',
            ],
        ]);

        DB::table('statistic_of_detail')->insert([
            [
                'type_id'       => 1,
                'year'          => 2022,
                'week'          => 26,
                'first_high'   => 1,
                'first_medium'  => 2,
                'first_low'     => 3,
                'second_high'  => 4,
                'second_medium' => 5,
                'second_low'    => 6,
                'third_high'   => 7,
                'third_medium'  => 8,
                'third_low'     => 9,
                'done'          => 10,
                'note'          => 'Thống kê tuần 26 năm 2022 - Viễn thông',
            ],
            [
                'type_id'       => 2,
                'year'          => 2022,
                'week'          => 26,
                'first_high'   => 10,
                'first_medium'  => 9,
                'first_low'     => 8,
                'second_high'  => 7,
                'second_medium' => 6,
                'second_low'    => 5,
                'third_high'   => 4,
                'third_medium'  => 3,
                'third_low'     => 2,
                'done'          => 1,
                'note'          => 'Thống kê tuần 26 năm 2022 - Chuyển đổi số',
            ],
            [
                'type_id'       => 3,
                'year'          => 2022,
                'week'          => 26,
                'first_high'   => 12,
                'first_medium'  => 45,
                'first_low'     => 23,
                'second_high'  => 9,
                'second_medium' => 16,
                'second_low'    => 19,
                'third_high'   => 28,
                'third_medium'  => 11,
                'third_low'     => 25,
                'done'          => 19,
                'note'          => 'Thống kê tuần 26 năm 2022 - Triển khai',
            ],
        ]);
    }
}
