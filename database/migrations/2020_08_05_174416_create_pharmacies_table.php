<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->integer('image_id');
            $table->string('nameAR');
            $table->string('nameEN');
            $table->string('active');
            $table->string('ownerAR');
            $table->string('ownerEN');
            $table->string('email');
            $table->string('phone');
            $table->string('mobile');
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
        Schema::dropIfExists('pharmacies');
    }
}
