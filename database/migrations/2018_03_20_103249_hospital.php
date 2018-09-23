<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hospital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital', function (Blueprint $table) {
            $table->increments('hospital_id');
            $table->string('hospital_name', 20);
            $table->binary('hospital_sprite')->nullable();
            $table->tinyInteger('species_id')->nullable();
            $table->string('npc_id');

            // $table->foreign('meds_id')->references('meds_id')->on('meds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital');
    }
}
