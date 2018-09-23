<?php

use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapons')->insert([
        	[
        		'weapon_name' => 'Supernova Photon',
        		'weapon_type' => 'Plasma',
        		'rarity' => 'Common',
        		'available_at_lvl' => 0,
        		'only_for_species_id' => null,
        		'weapon_damage' => 100,
        		'weapon_firespeed' => 1.2,
        		'weapon_rounds' => 1,
        		'weapon_clip' => 12,
        		'weapon_accuracy' => 25,
        		'weapon_crit_hit' => 200,
        		'weapon_crit_chance' => 10,
        		'weapon_price' => 2000,
        		'shop_id' => 1,
        		'weapon_description' => 'This weapon is a prototype, but sold to people across the globe and prominent due to its cheap cost and good reliability.'
        	],
        	[
        		'weapon_name' => 'Ebon Fusion Cannon',
        		'weapon_type' => 'Rifle',
        		'rarity' => 'Common',
        		'available_at_lvl' => 0,
        		'only_for_species_id' => null,
        		'weapon_damage' => 200,
        		'weapon_firespeed' => 1,
        		'weapon_rounds' => 1,
        		'weapon_clip' => 1,
        		'weapon_accuracy' => 20,
        		'weapon_crit_hit' => 400,
        		'weapon_crit_chance' => 10,
        		'weapon_price' => 2250,
        		'shop_id' => 1,
        		'weapon_description' => 'This weapon is fear inducing, but well-known across the galaxy and known for its high damage.', 
        	],
        	[
        		'weapon_name' => 'Battlestar Electron Pistol',
        		'weapon_type' => 'Pistol',
        		'rarity' => 'Common',
        		'available_at_lvl' => 0,
        		'only_for_species_id' => null,
        		'weapon_damage' => 50,
        		'weapon_firespeed' => 1.5,
        		'weapon_rounds' => 1,
        		'weapon_clip' => 12,
        		'weapon_accuracy' => 20,
        		'weapon_crit_hit' => 150,
        		'weapon_crit_chance' => 10,
        		'weapon_price' => 750,
        		'shop_id' => 1,
        		'weapon_description' => 'This weapon is a one of a kind, but admired by many and praised for its reliability.', 
        	],
        	[
        		'weapon_name' => 'Trinity Flux Gun',
        		'weapon_type' => 'Pistol',
        		'rarity' => 'Common',
        		'available_at_lvl' => 0,
        		'only_for_species_id' => null,
        		'weapon_damage' => 20,
        		'weapon_firespeed' => 1.9,
        		'weapon_rounds' => 3,
        		'weapon_clip' => 12,
        		'weapon_accuracy' => 70,
        		'weapon_crit_hit' => 40,
        		'weapon_crit_chance' => 10,
        		'weapon_price' => 1200,
        		'shop_id' => 1,
        		'weapon_description' => 'This weapon is terrifying, And known for its deadly accuracy.', 
        	]
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        	// [
        	// 	'weapon_name' => '',
        	// 	'weapon_type' => '',
        	// 	'rarity' => '',
        	// 	'available_at_lvl' => ,
        	// 	'only_for_species_id' => ,
        	// 	'weapon_damage' => ,
        	// 	'weapon_firespeed' => ,
        	// 	'weapon_rounds' => ,
        	// 	'weapon_clip' => ,
        	// 	'weapon_accuracy' => ,
        	// 	'weapon_crit_hit' => ,
        	// 	'weapon_crit_chance' => ,
        	// 	'weapon_price' => ,
        	// 	'shop_id' => ,
        	// 	'weapon_description' => , 
        	// ],
        ]);
    }
}
