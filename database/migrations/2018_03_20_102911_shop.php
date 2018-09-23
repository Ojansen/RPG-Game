<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->increments('shop_id');
            $table->string('shop_name', 30);
            $table->binary('shop_sprite')->nullable();
            $table->tinyInteger('species_id')->nullable();
            $table->string('npc_id');
            $table->tinyInteger('planet_id')->nullable();
            $table->smallInteger('hardware_id')->nullable();
            $table->tinyInteger('is_black_shop')->nullable();

            // $table->foreign('species_id')->references('species_id')->on('species');
            // $table->foreign('planet_id')->references('planet_id')->on('planet');
            // $table->foreign('weapon_id')->references('weapon_id')->on('weapons');
            // $table->foreign('armour_id')->references('armour_id')->on('armour');
            // $table->foreign('food_id')->references('food_id')->on('food');
            // $table->foreign('item_id')->references('item_id')->on('items');
            // $table->foreign('home_id')->references('home_id')->on('home');
            // $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicle');
            // $table->foreign('hardware_id')->references('hardware_id')->on('hardware');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
    }
}
