<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Misc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('misc', function (Blueprint $table) {
            $table->increments('misc_id');
            $table->string('misc_name', 20);
            $table->binary('misc_sprite')->nullable();
            $table->smallInteger('character_id');
            $table->string('misc_description', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('misc');
    }
}
