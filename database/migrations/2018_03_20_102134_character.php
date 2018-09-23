<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Character extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->increments('character_id');
            $table->string('character_name', 50)->unique();
            $table->bigInteger('character_level');
            $table->bigInteger('character_exp')->nullable();
            $table->bigInteger('virtual_coins');
            $table->bigInteger('character_health');
            $table->bigInteger('character_stamania');
            $table->bigInteger('character_attack');
            $table->bigInteger('character_defence');
            $table->tinyInteger('weapon_equipped')->nullable();
            $table->tinyInteger('armour_equipped')->nullable();
            $table->smallInteger('user_id')->unique();
            $table->smallInteger('vehicle_id')->nullable();
            $table->smallInteger('home_id')->nullable();
            $table->bigInteger('inventory_id')->nullable();
            $table->tinyInteger('species_id');
            $table->tinyInteger('current_place_id');

            // $table->foreign('user_id')->references('user_id')->on('users');
            // $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicle');
            // $table->foreign('home_id')->references('home_id')->on('home');
            // $table->foreign('inventory_id')->references('inventory_id')->on('inventory');
            // $table->foreign('species_id')->references('species_id')->on('species');
            // $table->foreign('current_planet_id')->references('planet_id')->on('planet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character');
    }
}
