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
            $table->integer('first_high');
            $table->integer('first_medium');
            $table->integer('first_low');
            $table->integer('second_high');
            $table->integer('second_medium');
            $table->integer('second_low');
            $table->integer('third_high');
            $table->integer('third_medium');
            $table->integer('third_low');
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
