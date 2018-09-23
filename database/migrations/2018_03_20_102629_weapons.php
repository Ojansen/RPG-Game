<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Weapons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->increments('weapon_id');
            $table->string('weapon_name', 30);
            $table->string('weapon_type', 20);
            $table->string('rarity', 20);
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->tinyInteger('only_for_species_id')->nullable();
            $table->smallInteger('weapon_damage');
            $table->decimal('weapon_firespeed', 10, 1)->nullable();
            $table->smallInteger('weapon_rounds');
            $table->smallInteger('weapon_clip');
            $table->smallInteger('weapon_accuracy');
            $table->smallInteger('weapon_crit_hit');
            $table->smallInteger('weapon_crit_chance');
            $table->bigInteger('weapon_price');
            $table->binary('weapon_sprite')->nullable();
            $table->tinyInteger('shop_id')->nullable();
            $table->string('weapon_description', 255);

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
        Schema::dropIfExists('weapons');
    }
}
