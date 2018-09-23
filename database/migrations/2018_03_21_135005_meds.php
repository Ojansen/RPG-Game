<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Meds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meds', function (Blueprint $table) {
            $table->increments('meds_id');
            $table->string('meds_name', 20);
            $table->string('meds_type', 20);
            $table->integer('hospital_id')->nullable();
            $table->binary('meds_sprite')->nullable();
            $table->string('rarity', 20);
            $table->integer('meds_effect');
            $table->integer('meds_time');
            $table->integer('meds_price');
            $table->tinyInteger('only_for_species_id')->nullable();
            $table->string('meds_description', 255);

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
        Schema::dropIfExists('meds');
    }
}
