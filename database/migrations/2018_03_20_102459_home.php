<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Home extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->increments('home_id');
            $table->string('home_name', 30);
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->string('home_benefits', 200);
            $table->string('home_description', 200);
            $table->binary('home_sprite')->nullable();
            $table->bigInteger('home_value')->nullable();
            $table->bigInteger('home_price')->nullable();
            $table->tinyInteger('planet_id')->nullable();
            $table->tinyInteger('character_id')->nullable();

            // $table->foreign('planet_id')->references('planet_id')->on('planet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home');
    }
}
