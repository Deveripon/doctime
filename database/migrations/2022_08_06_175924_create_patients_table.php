<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email') -> unique();
            $table->string('mobile') -> unique();
            $table->string('photo') -> default('avatar.png');
            $table->string('password');
            $table->string('date_of_birth') ->nullable();
            $table->string('age') -> nullable();
            $table->string('city') -> nullable();
            $table->string('country') -> nullable();
            $table->string('blood_group') -> nullable();
            $table->string('address') -> nullable();
            $table->string('zip_code') -> nullable();
            $table->string('access_token') -> nullable();
            $table->boolean('status') -> default(false);
            $table->boolean('trash') -> default(false);
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
};
