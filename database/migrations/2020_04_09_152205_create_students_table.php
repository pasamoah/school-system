<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            

            $table->id('std_id');
            $table->unsignedBigInteger('student_reference_table');
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
            $table->string('section')->nullable();
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
            $table->string('std_status')->nullable();
            $table->timestamps();

            $table->foreign('student_reference_table')
            ->references('student_reference')
            ->on('users')
            ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
