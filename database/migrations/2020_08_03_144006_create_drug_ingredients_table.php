<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('ingredient');
            $table->string('name');
            $table->string('supply');
            $table->string('dosageForm');
            $table->string('Concentration');
            $table->string('drugStore');
            $table->string('atcCode');
            $table->string('company');
            $table->string('country_id');
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
        Schema::dropIfExists('drug_ingredients');
    }
}
