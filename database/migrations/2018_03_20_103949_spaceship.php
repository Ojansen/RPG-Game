<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Spaceship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaceship', function (Blueprint $table) {
            $table->increments('spaceship_id');
            $table->string('spaceship_name', 20);
            $table->binary('spaceship_sprite')->nullable();
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->tinyInteger('only_for_species_id')->nullable();
            $table->tinyInteger('shop_id')->nullable();
            $table->tinyInteger('npc_id');

            // $table->foreign('only_for_species_id')->references('species_id')->on('species');
            // $table->foreign('planet_id')->references('planet_id')->on('planet');
            // $table->foreign('shop_id')->references('shop_id')->on('shop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spaceship');
    }
}
