<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nameAR');
            $table->string('nameEN');
            $table->string('servicesAR');
            $table->string('servicesEN');
            $table->string('titleAR');
            $table->string('titleEN');
            $table->integer('clinic_id');
            $table->integer('general_specialization_id');
            $table->integer('direct_specialization_id');
            $table->integer('insurance_id');
            $table->string('website');
            $table->string('fees');
            $table->string('wait');
            $table->integer('duration_id');
            $table->string('lat');
            $table->string('long');
            $table->text('descriptionAR');
            $table->text('descriptionEN');
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
        Schema::dropIfExists('doctors');
    }
}
