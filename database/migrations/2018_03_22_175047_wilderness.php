<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wilderness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilderness', function (Blueprint $table) {
            $table->increments('wilderness_id');
            $table->string('wilderness_name', 20);
            $table->binary('wilderness_sprite')->nullable();
            $table->string('wilderness_description', 255);
            $table->tinyInteger('place_id');
            $table->smallInteger('enemy_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilderness');
    }
}
