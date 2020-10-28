<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_number');
            $table->string('salary_month');
            $table->string('basic');
            $table->string('tds')->nullable();
            $table->string('da')->nullable();
            $table->string('esi')->nullable();
            $table->string('hra')->nullable();
            $table->string('pf')->nullable();
            $table->string('Conveyance')->nullable();
            $table->string('leave')->nullable();
            $table->string('allowance')->nullable();
            $table->string('ptax')->nullable();
            $table->string('medical_allowance')->nullable();
            $table->string('labour_welfare')->nullable();
            $table->string('others')->nullable();
            $table->string('n_other')->nullable();
            $table->string('total_earnings')->nullable();
            $table->string('total_deductions')->nullable();
            $table->string('net_salary')->nullable();
            $table->timestamps();

            $table->foreign('staff_number')
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
        Schema::dropIfExists('salaries');
    }
}
