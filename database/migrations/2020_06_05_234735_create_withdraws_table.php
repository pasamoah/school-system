<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->string('std_id');
            $table->string('student_reference_table');
            $table->string('Programme');
            $table->string('c_level');
            $table->string('image')->nullable();
            $table->string('surname');
            $table->string('f_name');
            $table->string('f_email');
            $table->string('DoB');
            $table->string('p_address');
            $table->string('nationality');
            $table->string('region');
            $table->string('home_town');
            $table->string('phone');
            $table->string('mobile');
            $table->string('p_school');
            $table->string('p_location');
            $table->string('disability');
            $table->string('gender');
            $table->string('fee_category');
            $table->string('religion');
            $table->string('title');
            $table->string('g_surName');
            $table->string('g_fname');
            $table->string('occupation');
            $table->string('gp_address');
            $table->string('p_region');
            $table->string('g_mobile');
            $table->string('g_mail');
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
        Schema::dropIfExists('withdraws');
    }
}
