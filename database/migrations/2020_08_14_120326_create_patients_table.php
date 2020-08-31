<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nameAR');
            $table->string('nameEN');
            $table->string('date');
            $table->integer('insurance_id');
            $table->integer('made_surgery');
            $table->integer('diabetes');
            $table->integer('hypertension');
            $table->integer('disability');
            $table->integer('health_problem');
            $table->integer('allergy_for_drug');
            $table->string('blood');
            $table->string('lat');
            $table->string('long');
            $table->enum('status', ['single', 'married']);
            $table->enum('gender', ['male', 'female']);
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
        Schema::dropIfExists('patients');
    }
}
