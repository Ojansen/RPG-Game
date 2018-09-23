INSERT INTO planet (planet_name, planet_temperature, planet_climate, planet_description, place_id, species_id)
VALUES 	('Earth', 25, 'Normal', 'Its litterly called dirt', 1, 1),
	   	('Venus', 480, 'Hot', 'The hot red planet', 2, 2),
	   	('Mars', 30, 'Normal', 'You can say its the second Earth', 3, 3),
	   	('Saturn', -200, 'Cold', 'The planet with a thousend rings', 4, 4),
	   	('Uranus', -400, 'Cold', 'The big blue ball', 5, 5);


INSERT INTO species (species_type, species_stats, home_planet_id, species_description, species_benefits, species_health, species_stamania, species_attack, species_defence)
VALUES 	('Human', 'Overall a good character', 1, 'Us', 'High income', 120, 120, 120, 120),
	   	('Venusiän', 'High health / defence', 2, 'it cant move fast because its very hot', 'Very high resistance against high temprature', 180, 90, 90, 180),
	   	('Martian', 'High attack / stamania', 3, 'They are red in the sun. but pitch black in the shadow', 'They have a high stamania because they are very energetic', 90, 180, 180, 90),
	   	('Saturnian', 'High health / attack', 4, 'Very slow but high hitters', 'Good agains cold enviorments', 180, 90, 180, 90),
	   	('Uranian', 'High defence / stamania', 5, 'They are a tank with high agility', 'Long endurance', 90, 180, 90, 180);

INSERT INTO place (place_id, planet_id, shop_id, hospital_id, dome_id, motel_id, spaceship_id, wilderness_id)
VALUES	(1, 1, 1, 1, NULL, 1, NULL, 1),
		(2, 2, 2, NULL, NULL, 2, NULL, NULL),
		(3, 3, NULL, 3, 3, NULL, 3, 3),
		(4, 4, 4, NULL, NULL, 4, 4, NULL),
		(5, 5, NULL, 5, 5, NULL, 5, 5);

INSERT INTO `weapons` (`weapon_id`, `weapon_name`, `weapon_type`, `rarity`, `available_at_lvl`, `only_for_species_id`, `weapon_damage`, `weapon_firespeed`, `weapon_rounds`, `weapon_clip`, `weapon_accuracy`, `weapon_crit_hit`, `weapon_crit_chance`, `weapon_price`, `weapon_sprite`, `num_weapon_shop`, `shop_id`, `weapon_description`) 
VALUES 	(NULL, 'plasma handgun', 'plasma', 'epic', '5', NULL, '50', '1.2', '1', '10', '100', '50', '50', '500', NULL, '50', '1', 'a plasma rifle');

INSERT INTO `shop` (`shop_id`, `shop_name`, `shop_sprite`, `species_id`, `npc_id`, `planet_id`, `weapon_id`, `armour_id`, `food_id`, `item_id`, `home_id`, `vehicle_id`, `hardware_id`, `is_black_shop`) 
VALUES 	(NULL, 'wallmart', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

INSERT INTO `enemy` (`enemy_id`, `enemy_name`, `species_id`, `enemy_level`, `rarity`, `enemy_sprite`, `enemy_health`, `enemy_defence`, `enemy_attack`, `enemy_stamania`, `weapon_equipped`, `armour_equipped`, `inventory_id`, `loot_id`, `planet_id`, `enemy_description`, `enemy_exp`) 
VALUES 	(NULL, 'Cyborg', NULL, '2', 'common', NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, 3, NULL, 50);