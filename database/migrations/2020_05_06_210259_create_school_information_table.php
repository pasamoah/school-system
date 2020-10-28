<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_information', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->unique();
            $table->string('school_contact_person')->nullable();
            $table->string('school_address');
            $table->string('school_Country')->nullable();
            $table->string('school_city')->nullable();
            $table->string('school_district')->nullable();
            $table->string('school_postal_code')->nullable();
            $table->string('school_email');
            $table->string('school_phone');
            $table->string('school_mobile')->nullable();
            $table->string('school_fax')->nullable();
            $table->string('school_affiliation_number')->nullable();
            $table->string('school_tax')->nullable();
            $table->string('school_cin')->nullable();
            $table->string('school_website')->nullable();
            $table->string('school_government')->nullable();
            $table->string('school_app_name')->nullable();
            $table->string('school_favicon')->nullable();
            $table->string('school_logo')->nullable();
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
        Schema::dropIfExists('school_information');
    }
}
