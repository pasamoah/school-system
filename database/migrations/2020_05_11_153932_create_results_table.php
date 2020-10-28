<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_results_id');
            $table->string('subject');
            $table->string('class_mark');
            $table->string('exams_mark');   
            $table->string('total_mark');
            $table->string('remark'); 
            $table->string('teacher_name'); 
            $table->string('academic_year');
            $table->string('semester');               
            $table->timestamps();

            $table->foreign('student_results_id')
                    ->references('std_id')
                    ->on('students')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
