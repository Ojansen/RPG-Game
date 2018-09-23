<?php

use Illuminate\Database\Seeder;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop')->insert([
        	[
        		'shop_id' => 1,
        		'shop_name' => 'Wallmart',
        		'species_id' => 1,
        		'npc_id' => 'store_1',
        		'planet_id' => 1,
        		'is_black_shop' => Null
        	],
        	[
        		'shop_id' => 2,
        		'shop_name' => 'Valles',
        		'species_id' => 2,
        		'npc_id' => 'store_2',
        		'planet_id' => 2,
        		'is_black_shop' => Null
        	],
        	[
        		'shop_id' => 4,
        		'shop_name' => 'Rings',
        		'species_id' => 4,
        		'npc_id' => 'store_4',
        		'planet_id' => 4,
        		'is_black_shop' => 1
        	]
    	]);

    	DB::table('dome')->insert([
    		[
    			'dome_id' => 3,
    			'dome_name' => 'Overon',
    			'available_at_lvl' => 50,
    			'npc_id' => 'dome_3'
    		],
    		[
    			'dome_id' => 5,
    			'dome_name' => 'Terrordome',
    			'available_at_lvl' => 100,
    			'npc_id' => 'dome_5'
    		]
    	]);

    	DB::table('hospital')->insert([
    		[
    			'hospital_id' => 1,
    			'hospital_name' => 'Health Back',
    			'species_id' => 1,
    			'npc_id' => 'hospital_1'
    		],
    		[
    			'hospital_id' => 3,
    			'hospital_name' => 'Light Beacon',
    			'species_id' => 3,
    			'npc_id' => 'hospital_3'
    		],
    		[
    			'hospital_id' => 5,
    			'hospital_name' => 'Revived',
    			'species_id' => 5,
    			'npc_id' => 'hospital_5'
    		]
    	]);

    }
}
