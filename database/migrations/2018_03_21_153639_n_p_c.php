<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NPC extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npc', function (Blueprint $table) {
            $table->string('npc_id');
            $table->string('npc_name', 20);
            $table->string('npc_description', 255);
            $table->binary('npc_sprite')->nullable();
            $table->tinyInteger('npc_species');

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
        Schema::dropIfExists('npc');
    }
}
