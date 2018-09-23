<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Armour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armour', function (Blueprint $table) {
            $table->increments('armour_id');
            $table->string('armour_name', 20);
            $table->string('armour_type', 20);
            $table->binary('armour_sprite')->nullable();
            $table->string('rarity', 20);
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->smallInteger('armour_defence');
            $table->bigInteger('armour_price');
            $table->decimal('armour_weight', 10, 1);
            $table->tinyInteger('only_for_species_id')->nullable();
            $table->smallInteger('resist_weapon_id')->nullable();
            $table->smallInteger('no_resist_weapon_id')->nullable();
            $table->tinyInteger('shop_id')->nullable();
            $table->string('armour_description', 255);

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
        Schema::dropIfExists('armour');
    }
}
