<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Loot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loot', function (Blueprint $table) {
            $table->increments('loot_id');
            $table->string('loot_name', 20);
            $table->integer('enemy_id');
            $table->binary('loot_sprite')->nullable();
            $table->string('rarity', 20);
            $table->integer('loot_value')->nullable();
            $table->smallInteger('loot_item')->nullable();
            $table->smallInteger('loot_weapon')->nullable();
            $table->smallInteger('loot_armour')->nullable();
            $table->smallInteger('loot_meds')->nullable();
            $table->smallInteger('loot_food')->nullable();

            // $table->foreign('loot_weapon')->references('weapon_id')->on('weapons');
            // $table->foreign('loot_armour')->references('armour_id')->on('armour');
            // $table->foreign('loot_food')->references('food_id')->on('food');
            // $table->foreign('loot_meds')->references('meds_id')->on('meds');
            // $table->foreign('loot_item')->references('item_id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loot');
    }
}
