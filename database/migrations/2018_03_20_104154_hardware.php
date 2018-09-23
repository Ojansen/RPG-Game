<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hardware extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware', function (Blueprint $table) {
            $table->increments('hardware_id');
            $table->string('hardware_name', 20);
            $table->string('hardware_type', 20);
            $table->binary('hardware_sprite')->nullable();
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->string('rarity', 20);
            $table->bigInteger('hardware_price');
            $table->integer('hardware_value')->nullable();
            $table->string('hardware_description', 255);
            $table->string('hardware_specs', 255);
            $table->integer('only_for_species_id')->nullable();
            $table->tinyInteger('spaceship_id')->nullable();
            $table->tinyInteger('shop_id')->nullable();

            // $table->foreign('only_for_species_id')->references('species_id')->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hardware');
    }
}
