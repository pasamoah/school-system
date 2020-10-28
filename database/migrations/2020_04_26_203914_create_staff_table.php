<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('firstname_staff');
            $table->string('lastname_staff');
            $table->string('email_staff');
            $table->string('address_staff');
            $table->string('joining_date');
            $table->string('phone_staff');
            $table->string('department_staff');
            $table->string('designation_staff');
            $table->string('basic_salary');
            $table->string('dob_staff');
            $table->string('staff_gender');
            $table->string('edu_staff');
            $table->string('last_employer_staff')->nullable();
            $table->string('staff-aboutme')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
