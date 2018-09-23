<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Enemy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enemy', function (Blueprint $table) {
            $table->increments('enemy_id');
            $table->string('enemy_name', 20);
            $table->tinyInteger('species_id')->nullable();
            $table->smallInteger('enemy_exp');
            $table->smallInteger('enemy_level');
            $table->string('rarity', 20);
            $table->binary('enemy_sprite')->nullable();
            $table->smallInteger('enemy_health');
            $table->smallInteger('enemy_defence');
            $table->smallInteger('enemy_attack');
            $table->smallInteger('enemy_stamania');
            $table->integer('weapon_equipped')->nullable();
            $table->integer('armour_equipped')->nullable();
            $table->integer('inventory_id')->nullable();
            $table->smallInteger('loot_id')->nullable();
            $table->smallInteger('dome_id')->nullable();
            $table->tinyInteger('planet_id')->nullable();
            $table->string('enemy_description')->nullable();

            // $table->foreign('weapon_id')->references('weapon_id')->on('weapons');
            // $table->foreign('species_id')->references('species_id')->on('species');
            // $table->foreign('armour_id')->references('armour_id')->on('armour');
            // $table->foreign('item_id')->references('item_id')->on('items');
            // $table->foreign('loot_id')->references('loot_id')->on('loot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enemy');
    }
}
