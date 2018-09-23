<?php

use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planet')->insert([
        	[	
        		'planet_name' => 'Ostilia',
        		'planet_temperature' => 25,
        		'planet_climate' => 'Normal',
        		'planet_description' => 'The plant-like organisms on this planet are mostly many types of fungi, but there are a good amount of bushes, shrubs and trees as well. Flowers, on the other hand, are almost non-existent, which is hard to tell, as many fungi species can be confused for flowers due to their shapes and colors, especially when looked at from a distance. But not all fungi species are small and colorful, some can reach incredible heights and may on occasion even surpass the height of the local trees.',
        		'place_id' => 1,
        		'species_id' => 1
        	],
        	[	
        		'planet_name' => 'Naiyrus',
        		'planet_temperature' => 470,
        		'planet_climate' => 'Extreme hot',
        		'planet_description' => 'When nutrients are scarce, many organisms have methods of storing those nutrients for times of need. Some have become so specialized in this they can go for very long times without the need of additional food. However some species on this planet didn\'t develop such methods. Instead, they simply take what they need, whenever they need it, from wherever they can. If nutrients aren\'t available in the ground, it will take them from others, including its own kind. This has occasionally lead to the survival of this species, but the downfall of another.',
        		'place_id' => 2,
        		'species_id' => 2
        	],
        	[	
        		'planet_name' => 'Lioti',
        		'planet_temperature' => 30,
        		'planet_climate' => 'Normal',
        		'planet_description' => 'While the intelligent lifeforms on this planet aren\'t technologically advanced and it\'s still a uncertain what they know or think they know about the universe, they are quite advanced nonetheless. Their current stage can be compared roughly to that of the late ancient Egyptians, but only in terms of progress. Their societies are completely different, as they tend to live in harmony with one another. This is mostly due to the species lack of strong emotions, which has developed over millions of years without a real natural enemy, besides diseases.',
        		'place_id' => 3,
        		'species_id' => 3
        	],
        	[	
        		'planet_name' => 'Oreon-7',
        		'planet_temperature' => -200,
        		'planet_climate' => 'Extreme cold',
        		'planet_description' => 'Beautiful as this planet may be, life will be hard becase of the extreme cold. But in terms of research, this planet has plenty of secrets and answers ready to be discovered. If nothing else, this planet at least makes for a gorgeous sight in the night skies of the planets around it.',
        		'place_id' => 4,
        		'species_id' => 4
        	],
        	[	
        		'planet_name' => 'Cepri',
        		'planet_temperature' => -400,
        		'planet_climate' => 'Extreme cold',
        		'planet_description' => 'With the exception of a handful of species, none of them have developed into anything advanced. Most species still rely on simple photosynthesis to survive. A few species do have the basic beginnings of thorns and specialized leaves though, but it will be a long time before those are fully developed.',
        		'place_id' => 5,
        		'species_id' => 5
        	]
        ]);
    }
}
