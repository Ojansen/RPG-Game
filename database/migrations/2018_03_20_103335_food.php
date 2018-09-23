<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Food extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->increments('food_id');
            $table->string('food_name', 20);
            $table->string('food_type', 20);
            $table->string('rarity', 20);
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->smallInteger('food_effect')->nullable();
            $table->tinyInteger('only_for_species_id')->nullable();
            $table->tinyInteger('effect_on_species_id')->nullable();
            $table->tinyInteger('planet_id')->nullable();
            $table->integer('food_price')->nullable();
            $table->binary('food_sprite')->nullable();
            $table->tinyInteger('hospital_id')->nullable();
            $table->tinyInteger('shop_id')->nullable();
            $table->string('food_description', 255);

            // $table->foreign('only_for_species_id')->references('species_id')->on('species');
            // $table->foreign('effect_on_species_id')->references('species_id')->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}
