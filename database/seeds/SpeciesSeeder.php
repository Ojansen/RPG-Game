<?php

use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('species')->insert([
        	[
        		'species_type' => 'Epox',
        		'species_stats' => 'Overall great',
        		'home_planet_id' => 1,
        		'species_description' => 'They look humen but are evolved to a type 2 civilization. and became more like a hybrid humanoids',
        		'species_benefits' => '10% More income.',
        		'species_health' => 120,
        		'species_stamania' => 120,
        		'species_attack' => 120,
        		'species_defence' => 120
        	],
        	[
        		'species_type' => 'Cessron',
        		'species_stats' => 'High health / defence',
        		'home_planet_id' => 2,
        		'species_description' => 'These aliens are a type of reptile. They have four arms and two big legs, with a short, muscular tail.',
        		'species_benefits' => 'Doesn\'t need additional protection from hot environments.',
        		'species_health' => 180,
        		'species_stamania' => 90,
        		'species_attack' => 90,
        		'species_defence' => 180
        	],
        	[
        		'species_type' => 'Milott',
        		'species_stats' => 'High health / stamania',
        		'home_planet_id' => 3,
        		'species_description' => 'This type of alien is very long. There eyes are invisible but their eyesight is very good. they have a long thin tail.',
        		'species_benefits' => 'They have a high stamania because, they need long endurance in the mountains,',
        		'species_health' => 90,
        		'species_stamania' => 180,
        		'species_attack' => 180,
        		'species_defence' => 90
        	],
        	[
        		'species_type' => 'Cekkorr',
        		'species_stats' => 'High health / attack',
        		'home_planet_id' => 4,
        		'species_description' => 'Their wide mouths and almost hidden noses often make these aliens appear to be distant. Their ears are narrow and long and their hearing is almost among the best.',
        		'species_benefits' => 'Doesn\'t need additional protection from cold environments.',
        		'species_health' => 180,
        		'species_stamania' => 90,
        		'species_attack' => 180,
        		'species_defence' => 90
        	],
        	[
        		'species_type' => 'Serun',
        		'species_stats' => 'High defence / stamania',
        		'home_planet_id' => 5,
        		'species_description' => 'Their skin is thick and fairly strong. It\'s covered in short hairs. Their skin colors are mostly black, red, dark orange and light grey, which tend to become darker as they age.',
        		'species_benefits' => 'Doesn\'t need additional protection from cold environments.',
        		'species_health' => 90,
        		'species_stamania' => 180,
        		'species_attack' => 90,
        		'species_defence' => 180
        	]
        ]);
    }
}
