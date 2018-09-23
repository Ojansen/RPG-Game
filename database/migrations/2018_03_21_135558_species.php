<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Species extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species', function (Blueprint $table) {
            $table->increments('species_id');
            $table->string('species_type', 20);
            $table->binary('species_sprite')->nullable();
            $table->string('species_stats', 255);
            $table->tinyInteger('home_planet_id');
            $table->text('species_description');
            $table->string('species_benefits', 255);
            $table->smallInteger('species_health');
            $table->smallInteger('species_stamania');
            $table->smallInteger('species_attack');
            $table->smallInteger('species_defence');
            $table->tinyInteger('base_weapon_id')->nullable();
            $table->tinyInteger('base_armour_id')->nullable();

            // $table->foreign('home_planet_id')->references('planet_id')->on('planet');
            // $table->foreign('base_armour_id')->references('armour_id')->on('armour');
            // $table->foreign('base_weapon_id')->references('weapon_id')->on('weapons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('species');
    }
}
