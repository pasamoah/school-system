<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoomLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoom_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('zoom_title');
            $table->string('zoom_id');
            $table->string('zoom_class');
            $table->string('zoom_date');
            $table->string('zoom_start_time');
            $table->string('zoom_end_time');
            $table->string('zoom_created_by')->nullable();
            $table->string('zoom_status')->nullable();
            $table->string('zoom_remark')->nullable();
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
        Schema::dropIfExists('zoom_lessons');
    }
}
