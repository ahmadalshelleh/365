<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('nameAR');
            $table->string('nameEN');
            $table->string('email');
            $table->string('phone');
            $table->string('active');
            $table->string('country_id');
            $table->string('city_id');
            $table->string('area_id');
            $table->string('location');
            $table->string('insurance_id');
            $table->string('lat');
            $table->string('long');
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
        Schema::dropIfExists('clinics');
    }
}
