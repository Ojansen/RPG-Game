<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->increments('vehicle_id');
            $table->string('vehicle_name', 30);
            $table->string('rarity', 20);
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->tinyInteger('only_for_species_id')->nullable();
            $table->integer('vehicle_speed');
            $table->binary('vehicle_sprite')->nullable();
            $table->string('vehicle_type', 20);
            $table->bigInteger('vehicle_price')->nullable();
            $table->bigInteger('vehicle_value')->nullable();
            $table->integer('vehicle_fuel')->nullable();
            $table->tinyInteger('shop_id')->nullable();
            $table->string('vehicle_description', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle');
    }
}
