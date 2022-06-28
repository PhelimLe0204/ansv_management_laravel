<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->id();

            $table->integer('pic_id');
            $table->string('am_name')->nullable();
            $table->string('pm_name')->nullable();
            $table->string('manager_name')->nullable();
            $table->integer('type_id');
            $table->integer('priority_id');
            $table->integer('status_id');
            $table->integer('currency_unit_id');

            $table->integer('week');
            $table->integer('year');
            $table->string('contract_code')->nullable(); // Mã hợp đồng
            $table->string('accounting_code')->nullable(); // Mã số kế toán
            $table->string('job_name');

            $table->text('description')->nullable();
            $table->string('tong_muc_dau_tu_du_kien')->nullable();
            $table->string('hinh_thuc_dau_tu')->nullable();
            $table->integer('muc_do_kha_thi')->nullable();
            $table->text('phan_tich_swot')->nullable();

            $table->text('pham_vi_cung_cap')->nullable();
            $table->string('tong_gia_tri_thuc_te')->nullable();
            $table->double('so_tien_tam_ung')->nullable();
            $table->date('ke_hoach_tam_ung')->nullable();

            $table->double('so_tien_DAC')->nullable();
            $table->date('hop_dong_DAC')->nullable();
            $table->date('muc_tieu_DAC')->nullable();
            $table->date('thuc_te_DAC')->nullable();

            $table->double('so_tien_PAC')->nullable();
            $table->date('hop_dong_PAC')->nullable();
            $table->date('muc_tieu_PAC')->nullable();
            $table->date('thuc_te_PAC')->nullable();

            $table->double('so_tien_FAC')->nullable();
            $table->date('hop_dong_FAC')->nullable();
            $table->date('muc_tieu_FAC')->nullable();
            $table->date('thuc_te_FAC')->nullable();

            $table->text('general_issue')->nullable();
            $table->text('solution')->nullable();
            $table->text('ke_hoach_tuan_nay')->nullable();
            $table->text('ke_hoach_tuan_sau')->nullable();
            $table->text('ket_qua_tuan_truoc')->nullable();
            $table->text('ket_qua_tuan_nay')->nullable();
            $table->text('note')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('last_updated_by')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail');
    }
}
