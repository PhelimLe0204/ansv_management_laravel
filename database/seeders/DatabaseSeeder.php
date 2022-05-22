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
                'staff_code' => '123456',
                'name' => 'Lê Văn Thành',
                'email' => 'levanthanh@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'abc.jpg',
                'enabled' => 1,
                'description' => 'Đây là user 1',
            ],
            [
                'staff_code' => '654321',
                'name' => 'Bùi Đức Tiến',
                'email' => 'buiductien@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'xyz.jpg',
                'enabled' => 1,
                'description' => 'Đây là user 2',
            ],
            [
                'staff_code' => '135246',
                'name' => 'Cù Đức Hiệp',
                'email' => 'cuduchiep@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'hik.jpg',
                'enabled' => 1,
                'description' => 'Đây là user 3',
            ],
            [
                'staff_code' => '246135',
                'name' => 'Nguyễn Minh Thy',
                'email' => 'nguyenminhthy@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'hik.jpg',
                'enabled' => 1,
                'description' => 'Đây là user 4',
            ],
            [
                'staff_code' => '123234',
                'name' => 'Trần Thanh Nga',
                'email' => 'tranthanhnga@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'hik.jpg',
                'enabled' => 1,
                'description' => 'Đây là user 5',
            ],
            [
                'staff_code' => '123234',
                'name' => 'Tạ Duy Đoàn',
                'email' => 'taduydoan@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'hik.jpg',
                'enabled' => 1,
                'description' => 'Đây là user 6',
            ],
        ]);

        DB::table('role')->insert([
            [
                'name' => 'ROLE_ADMIN',
                'level' => 1,
                'role_explain' => 'Administrator',
                'display' => 'Quản trị viên',
            ],
            [
                'name' => 'ROLE_CEO',
                'level' => 2,
                'role_explain' => 'Chief Executive Officer',
                'display' => 'Tổng giám đốc',
            ],
            [
                'name' => 'ROLE_DGM',
                'level' => 3,
                'role_explain' => 'Deputy General Manager',
                'display' => 'Phó tổng giám đốc',
            ],
            [
                'name' => 'ROLE_ES',
                'level' => 4,
                'role_explain' => 'Executive Secretary',
                'display' => 'Thư ký ban giám đốc',
            ],
            [
                'name' => 'ROLE_SE',
                'level' => 5,
                'role_explain' => 'Secretary',
                'display' => 'Thư ký',
            ],
            [
                'name' => 'ROLE_BM',
                'level' => 6,
                'role_explain' => 'Branch Manager',
                'display' => 'Giám đốc chi nhánh',
            ],
            [
                'name' => 'ROLE_DD',
                'level' => 7,
                'role_explain' => 'Deputy Director',
                'display' => 'Phó giám đốc chi nhánh',
            ],
            [
                'name' => 'ROLE_HoD',
                'level' => 8,
                'role_explain' => 'Head of Department',
                'display' => 'Trưởng phòng',
            ],
            [
                'name' => 'ROLE_DoD',
                'level' => 9,
                'role_explain' => 'Deputy of Department',
                'display' => 'Phó phòng',
            ],
            [
                'name' => 'ROLE_TL',
                'level' => 10,
                'role_explain' => 'Team Leader',
                'display' => 'Trưởng nhóm',
            ],
            [
                'name' => 'ROLE_AM',
                'level' => 11,
                'role_explain' => 'Account Manager',
                'display' => 'Người cung cấp dự án',
            ],
            [
                'name' => 'ROLE_PM',
                'level' => 12,
                'role_explain' => 'Project Manager',
                'display' => 'Người thực hiện dự án',
            ],
            [
                'name' => 'ROLE_MB',
                'level' => 13,
                'role_explain' => 'Member',
                'display' => 'Thành viên / Nhân viên',
            ],
        ]);

        DB::table('user_roles')->insert([
            [
                'user' => '1',
                'role' => '1',
            ],
            [
                'user' => '2',
                'role' => '2',
            ],
            [
                'user' => '3',
                'role' => '3',
            ],
            [
                'user' => '4',
                'role' => '11',
            ],
            [
                'user' => '5',
                'role' => '12',
            ],
            [
                'user' => '6',
                'role' => '13',
            ],
        ]);
    }
}
