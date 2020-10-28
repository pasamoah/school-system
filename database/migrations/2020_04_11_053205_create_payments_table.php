<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('payment_id');
            $table->string('fee_type');
            $table->string('year');
            $table->string('current_year');
            $table->string('semester');
            $table->double('amount_expected',15,3);
            $table->double('amount',15,3);
            $table->string('paid_by');
            $table->double('balance',15,3);
            $table->string('status');
            $table->timestamps();


            $table->foreign('student_id')
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
        Schema::dropIfExists('payments');
    }
}
