<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticOfDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic_of_detail', function (Blueprint $table) {
            $table->id();

            $table->integer('type_id');
            $table->integer('year');
            $table->integer('week');
            $table->integer('high_danger');
            $table->integer('high_warning');
            $table->integer('high_ongoing');
            $table->integer('medium_danger');
            $table->integer('medium_warning');
            $table->integer('medium_ongoing');
            $table->integer('low_danger');
            $table->integer('low_warning');
            $table->integer('low_ongoing');
            $table->integer('done');
            $table->string('note')->nullable();

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
        Schema::dropIfExists('statistic_of_detail');
    }
}
