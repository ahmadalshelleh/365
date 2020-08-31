<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('image_id')->nullable();
            $table->integer('active')->nullable();
            $table->string('name')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email');
            $table->integer('role')->default(0);
            $table->string('password');
            $table->string('auth');
            $table->enum('group', ['normalUser', 'writer', 'editor', 'admin', 'supervisor'])->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('users');
    }
}
