<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Place extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place', function (Blueprint $table) {
            $table->increments('place_id');
            $table->tinyInteger('planet_id')->nullable();
            $table->tinyInteger('shop_id')->nullable();
            $table->tinyInteger('hospital_id')->nullable();
            $table->tinyInteger('dome_id')->nullable();
            $table->tinyInteger('motel_id')->nullable();
            $table->tinyInteger('spaceship_id')->nullable();
            $table->tinyInteger('wilderness_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place');
    }
}
