<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_name', 20);
            $table->string('item_type', 20);
            $table->binary('item_sprite')->nullable();
            $table->string('rarity', 20);
            $table->integer('item_effect');
            $table->tinyInteger('available_at_lvl')->nullable();
            $table->tinyInteger('only_for_spieces_id')->nullable();
            $table->integer('item_price');
            $table->tinyInteger('shop_id')->nullable();
            $table->string('item_description', 255);

            // $table->foreign('only_for_spieces_id')->references('species_id')->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
