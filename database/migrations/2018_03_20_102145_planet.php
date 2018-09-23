<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Planet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planet', function (Blueprint $table) {
            $table->increments('planet_id');
            $table->string('planet_name', 20);
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->binary('planet_sprite')->nullable();
            $table->smallInteger('planet_temperature');
            $table->string('planet_climate', 50);
            $table->text('planet_description');
            $table->tinyInteger('place_id')->nullable();
            $table->tinyInteger('species_id')->nullable();

            // $table->foreign('enemy_id')->references('enemy_id')->on('enemy');
            // $table->foreign('item_id')->references('item_id')->on('items');
            // $table->foreign('food_id')->references('food_id')->on('food');
            // $table->foreign('species_id')->references('species_id')->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planet');
    }
}
