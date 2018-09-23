<?php

use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('place')->insert([
        	[
        		'place_id' => 1,
        		'planet_id' => 1,
        		'shop_id' => 1,
        		'hospital_id' => 1,
        		'dome_id' => NULL,
        		'motel_id' => 1,
        		'spaceship_id' => NULL,
        		'wilderness_id' => 1
        	],
        	[
        		'place_id' => 2,
        		'planet_id' => 2,
        		'shop_id' => 2,
        		'hospital_id' => NULL,
        		'dome_id' => NULL,
        		'motel_id' => 2,
        		'spaceship_id' => NULL,
        		'wilderness_id' => NULL
        	],
        	[
        		'place_id' => 3,
        		'planet_id' => 3,
        		'shop_id' => NULL,
        		'hospital_id' => 3,
        		'dome_id' => 3,
        		'motel_id' => NULL,
        		'spaceship_id' => 3,
        		'wilderness_id' => 3
        	],
        	[
        		'place_id' => 4,
        		'planet_id' => 4,
        		'shop_id' => 4,
        		'hospital_id' => NULL,
        		'dome_id' => NULL,
        		'motel_id' => 4,
        		'spaceship_id' => 4,
        		'wilderness_id' => NULL
        	],
        	[
        		'place_id' => 5,
        		'planet_id' => 5,
        		'shop_id' => NULL,
        		'hospital_id' => 5,
        		'dome_id' => 5,
        		'motel_id' => NULL,
        		'spaceship_id' => 5,
        		'wilderness_id' => 5
        	]
        ]);
    }
}
