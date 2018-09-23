<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dome', function (Blueprint $table) {
            $table->increments('dome_id');
            $table->string('dome_name', 20);
            $table->binary('dome_sprite')->nullable();
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->string('npc_id')->nullable();

            // $table->foreign('enemy_id')->references('enemy_id')->on('enemy');
            // $table->foreign('weapon_id')->references('weapon_id')->on('weapons');
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
        Schema::dropIfExists('dome');
    }
}
