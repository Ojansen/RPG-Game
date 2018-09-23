<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Motel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motel', function (Blueprint $table) {
            $table->increments('motel_id');
            $table->string('motel_name', 20);
            $table->binary('motel_sprite')->nullable();
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->tinyInteger('npc_id')->nullable();
            $table->tinyInteger('species_id')->nullable();
            $table->string('owner', 20);
            $table->integer('motel_price')->nullable();

            // $table->foreign('species_id')->references('species_id')->on('species');
            // $table->foreign('owner')->references('character_id')->on('character');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motel');
    }
}
