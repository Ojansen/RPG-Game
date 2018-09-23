<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('inventory_id');
            $table->smallInteger('character_id')->nullable();
            $table->binary('inventory_sprite')->nullable();
            $table->smallInteger('enemy_id')->nullable();
            $table->smallInteger('armour_id')->nullable();
            $table->smallInteger('weapon_id')->nullable();
            $table->smallInteger('hardware_id')->nullable();
            $table->smallInteger('item_id')->nullable();
            $table->smallInteger('food_id')->nullable();
            $table->smallInteger('meds_id')->nullable();

            $table->bigInteger('num_of_armour_id')->nullable();
            $table->bigInteger('num_of_weapon_id')->nullable();
            $table->bigInteger('num_of_hardware_id')->nullable();
            $table->bigInteger('num_of_item_id')->nullable();
            $table->bigInteger('num_of_food_id')->nullable();
            $table->bigInteger('num_of_meds_id')->nullable();

            // $table->foreign('character_id')->references('character_id')->on('character');
            // $table->foreign('meds_id')->references('meds_id')->on('meds');
            // $table->foreign('armour_id')->references('armour_id')->on('armour');
            // $table->foreign('weapon_id')->references('weapon_id')->on('weapons');
            // $table->foreign('item_id')->references('item_id')->on('items');
            // $table->foreign('food_id')->references('food_id')->on('food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
