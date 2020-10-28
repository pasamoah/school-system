<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leave_staff_id');
            $table->string('leave_type');
            $table->string('leave_from');
            $table->string('leave_to');
            $table->string('leave_number_of_day')->nullable();
            $table->string('leave_remaining')->nullable();
            $table->string('leave_reason');
            $table->string('leave_status')->nullable();
            $table->timestamps();

            $table->foreign('leave_staff_id')
            ->references('staff_id')
            ->on('staff')
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
        Schema::dropIfExists('leaves');
    }
}
