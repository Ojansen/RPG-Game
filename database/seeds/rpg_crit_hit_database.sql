-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 mrt 2018 om 13:59
-- Serverversie: 10.1.31-MariaDB
-- PHP-versie: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpg_crit_hit`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `armour`
--

CREATE TABLE `armour` (
  `armour_id` int(10) UNSIGNED NOT NULL,
  `armour_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `armout_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `armour_sprite` blob,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `armour_defence` smallint(6) NOT NULL,
  `armour_price` bigint(20) NOT NULL,
  `armour_weight` decimal(10,1) NOT NULL,
  `only_for_species_id` tinyint(4) DEFAULT NULL,
  `resist_weapon_id` smallint(6) DEFAULT NULL,
  `no_resist_weapon_id` smallint(6) DEFAULT NULL,
  `num_armour_shop` smallint(6) DEFAULT NULL,
  `armour_owned` tinyint(4) DEFAULT NULL,
  `armour_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `character`
--

CREATE TABLE `character` (
  `character_id` int(10) UNSIGNED NOT NULL,
  `character_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `character_level` bigint(20) NOT NULL,
  `character_exp` bigint(20) DEFAULT NULL,
  `virtual_coins` bigint(20) NOT NULL,
  `character_health` smallint(6) NOT NULL,
  `character_stamania` smallint(6) NOT NULL,
  `character_attack` smallint(6) NOT NULL,
  `character_defence` smallint(6) NOT NULL,
  `weapon_equipped` tinyint(4) DEFAULT NULL,
  `armour_equipped` tinyint(4) DEFAULT NULL,
  `user_id` smallint(6) NOT NULL,
  `vehicle_id` smallint(6) DEFAULT NULL,
  `home_id` smallint(6) DEFAULT NULL,
  `species_id` tinyint(4) NOT NULL,
  `current_place_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `character`
--

INSERT INTO `character` (`character_id`, `character_name`, `character_level`, `character_exp`, `virtual_coins`, `character_health`, `character_stamania`, `character_attack`, `character_defence`, `weapon_equipped`, `armour_equipped`, `user_id`, `vehicle_id`, `home_id`, `species_id`, `current_place_id`) VALUES
(1, 'Admin', 1, 0, 500, 87, 180, 180, 90, 1, NULL, 1, NULL, NULL, 3, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dome`
--

CREATE TABLE `dome` (
  `dome_id` int(10) UNSIGNED NOT NULL,
  `dome_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dome_sprite` blob,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `npc_id` tinyint(4) DEFAULT NULL,
  `enemy_id` smallint(6) NOT NULL,
  `weapon_id` smallint(6) DEFAULT NULL,
  `armour_id` smallint(6) DEFAULT NULL,
  `food_id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `enemy`
--

CREATE TABLE `enemy` (
  `enemy_id` int(10) UNSIGNED NOT NULL,
  `enemy_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `species_id` tinyint(4) DEFAULT NULL,
  `enemy_level` smallint(6) NOT NULL,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enemy_sprite` blob,
  `enemy_health` smallint(6) NOT NULL,
  `enemy_defence` smallint(6) NOT NULL,
  `enemy_attack` smallint(6) NOT NULL,
  `enemy_stamania` smallint(6) NOT NULL,
  `weapon_equipped` int(11) DEFAULT NULL,
  `armour_equipped` int(11) DEFAULT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `loot_id` smallint(6) DEFAULT NULL,
  `planet_id` tinyint(4) DEFAULT NULL,
  `enemy_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `enemy`
--

INSERT INTO `enemy` (`enemy_id`, `enemy_name`, `species_id`, `enemy_level`, `rarity`, `enemy_sprite`, `enemy_health`, `enemy_defence`, `enemy_attack`, `enemy_stamania`, `weapon_equipped`, `armour_equipped`, `inventory_id`, `loot_id`, `planet_id`, `enemy_description`) VALUES
(1, 'Cyborg', NULL, 2, 'common', NULL, -50, 100, 100, 100, 2, NULL, NULL, NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `food`
--

CREATE TABLE `food` (
  `food_id` int(10) UNSIGNED NOT NULL,
  `food_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `food_effect` smallint(6) DEFAULT NULL,
  `only_for_species_id` tinyint(4) DEFAULT NULL,
  `effect_on_species_id` tinyint(4) DEFAULT NULL,
  `planet_id` tinyint(4) DEFAULT NULL,
  `food_price` int(11) DEFAULT NULL,
  `food_sprite` blob,
  `num_food_shop` int(11) DEFAULT NULL,
  `num_food_inventory` int(11) DEFAULT NULL,
  `food_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hardware`
--

CREATE TABLE `hardware` (
  `hardware_id` int(10) UNSIGNED NOT NULL,
  `hardware_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_sprite` blob,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_price` bigint(20) NOT NULL,
  `hardware_value` int(11) DEFAULT NULL,
  `hardware_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware_specs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `only_for_species_id` int(11) DEFAULT NULL,
  `num_hardware_inventory` int(11) DEFAULT NULL,
  `num_hardware_shop` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `home`
--

CREATE TABLE `home` (
  `home_id` int(10) UNSIGNED NOT NULL,
  `home_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `home_benefits` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_sprite` blob,
  `home_value` bigint(20) DEFAULT NULL,
  `home_price` bigint(20) DEFAULT NULL,
  `planet_id` tinyint(4) DEFAULT NULL,
  `character_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(10) UNSIGNED NOT NULL,
  `hospital_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_sprite` blob,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `health_price` smallint(6) DEFAULT NULL,
  `meds_id` smallint(6) NOT NULL,
  `npc_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(10) UNSIGNED NOT NULL,
  `character_id` smallint(6) DEFAULT NULL,
  `inventory_sprite` blob,
  `enemy_id` smallint(6) DEFAULT NULL,
  `armour_id` smallint(6) DEFAULT NULL,
  `weapon_id` smallint(6) DEFAULT NULL,
  `hardware_id` smallint(6) DEFAULT NULL,
  `item_id` smallint(6) DEFAULT NULL,
  `food_id` smallint(6) DEFAULT NULL,
  `meds_id` smallint(6) DEFAULT NULL,
  `num_of_armour_id` smallint(6) DEFAULT NULL,
  `num_of_weapon_id` smallint(6) DEFAULT NULL,
  `num_of_hardware_id` smallint(6) DEFAULT NULL,
  `num_of_item_id` smallint(6) DEFAULT NULL,
  `num_of_food_id` smallint(6) DEFAULT NULL,
  `num_of_meds_id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `character_id`, `inventory_sprite`, `enemy_id`, `armour_id`, `weapon_id`, `hardware_id`, `item_id`, `food_id`, `meds_id`, `num_of_armour_id`, `num_of_weapon_id`, `num_of_hardware_id`, `num_of_item_id`, `num_of_food_id`, `num_of_meds_id`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_sprite` blob,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_effect` int(11) NOT NULL,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `only_for_spieces_id` tinyint(4) DEFAULT NULL,
  `item_price` int(11) NOT NULL,
  `item_value` int(11) DEFAULT NULL,
  `num_item_inventory` int(11) DEFAULT NULL,
  `num_item_shop` int(11) DEFAULT NULL,
  `item_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `loot`
--

CREATE TABLE `loot` (
  `loot_id` int(10) UNSIGNED NOT NULL,
  `loot_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enemy_id` int(11) NOT NULL,
  `loot_sprite` blob,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loot_value` smallint(6) DEFAULT NULL,
  `loot_item` smallint(6) DEFAULT NULL,
  `loot_weapon` smallint(6) DEFAULT NULL,
  `loot_armour` smallint(6) DEFAULT NULL,
  `loot_meds` smallint(6) DEFAULT NULL,
  `loot_food` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `loot`
--

INSERT INTO `loot` (`loot_id`, `loot_name`, `enemy_id`, `loot_sprite`, `rarity`, `loot_value`, `loot_item`, `loot_weapon`, `loot_armour`, `loot_meds`, `loot_food`) VALUES
(1, 'vc', 1, NULL, 'common', 60, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `meds`
--

CREATE TABLE `meds` (
  `meds_id` int(10) UNSIGNED NOT NULL,
  `meds_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meds_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meds_sprite` blob,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meds_effect` int(11) NOT NULL,
  `meds_price` int(11) NOT NULL,
  `only_for_species_id` tinyint(4) DEFAULT NULL,
  `num_meds_inventory` int(11) DEFAULT NULL,
  `num_meds_shop` int(11) DEFAULT NULL,
  `meds_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_20_102134_character', 1),
(4, '2018_03_20_102145_planet', 1),
(5, '2018_03_20_102445_vehicle', 1),
(6, '2018_03_20_102459_home', 1),
(7, '2018_03_20_102629_weapons', 1),
(8, '2018_03_20_102732_dome', 1),
(9, '2018_03_20_102847_motel', 1),
(10, '2018_03_20_102911_shop', 1),
(11, '2018_03_20_102942_enemy', 1),
(12, '2018_03_20_103008_armour', 1),
(13, '2018_03_20_103249_hospital', 1),
(14, '2018_03_20_103335_food', 1),
(15, '2018_03_20_103949_spaceship', 1),
(16, '2018_03_20_104026_items', 1),
(17, '2018_03_20_104154_hardware', 1),
(18, '2018_03_21_135005_meds', 1),
(19, '2018_03_21_135014_loot', 1),
(20, '2018_03_21_135558_species', 1),
(21, '2018_03_21_151759_inventory', 1),
(22, '2018_03_21_153639_n_p_c', 1),
(23, '2018_03_21_184209_place', 1),
(24, '2018_03_22_175047_wilderness', 1),
(25, '2018_03_23_115132_misc', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `misc`
--

CREATE TABLE `misc` (
  `misc_id` int(10) UNSIGNED NOT NULL,
  `misc_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misc_sprite` blob,
  `character_id` smallint(6) NOT NULL,
  `misc_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `motel`
--

CREATE TABLE `motel` (
  `motel_id` int(10) UNSIGNED NOT NULL,
  `motel_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motel_sprite` blob,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `npc_id` tinyint(4) DEFAULT NULL,
  `species_id` tinyint(4) DEFAULT NULL,
  `owner` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motel_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `npc`
--

CREATE TABLE `npc` (
  `npc_id` int(10) UNSIGNED NOT NULL,
  `npc_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npc_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npc_sprite` blob,
  `npc_species` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `place`
--

CREATE TABLE `place` (
  `place_id` int(10) UNSIGNED NOT NULL,
  `planet_id` tinyint(4) DEFAULT NULL,
  `shop_id` tinyint(4) DEFAULT NULL,
  `hospital_id` tinyint(4) DEFAULT NULL,
  `dome_id` tinyint(4) DEFAULT NULL,
  `motel_id` tinyint(4) DEFAULT NULL,
  `spaceship_id` tinyint(4) DEFAULT NULL,
  `wilderness_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `place`
--

INSERT INTO `place` (`place_id`, `planet_id`, `shop_id`, `hospital_id`, `dome_id`, `motel_id`, `spaceship_id`, `wilderness_id`) VALUES
(1, 1, 1, 1, NULL, 1, NULL, 1),
(2, 2, 2, NULL, NULL, 2, NULL, NULL),
(3, 3, NULL, 3, 3, NULL, 3, 3),
(4, 4, 4, NULL, NULL, 4, 4, NULL),
(5, 5, NULL, 5, 5, NULL, 5, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `planet`
--

CREATE TABLE `planet` (
  `planet_id` int(10) UNSIGNED NOT NULL,
  `planet_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `planet_sprite` blob,
  `planet_temperature` smallint(6) NOT NULL,
  `planet_climate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` tinyint(4) DEFAULT NULL,
  `species_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `planet`
--

INSERT INTO `planet` (`planet_id`, `planet_name`, `available_at_lvl`, `planet_sprite`, `planet_temperature`, `planet_climate`, `planet_description`, `place_id`, `species_id`) VALUES
(1, 'Earth', NULL, NULL, 25, 'Normal', 'Its litterly called dirt', 1, 1),
(2, 'Venus', NULL, NULL, 480, 'Hot', 'The hot red planet', 2, 2),
(3, 'Mars', NULL, NULL, 30, 'Normal', 'You can say its the second Earth', 3, 3),
(4, 'Saturn', NULL, NULL, -200, 'Cold', 'The planet with a thousend rings', 4, 4),
(5, 'Uranus', NULL, NULL, -400, 'Cold', 'The big blue ball', 5, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `shop_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_sprite` blob,
  `species_id` tinyint(4) DEFAULT NULL,
  `npc_id` tinyint(4) NOT NULL,
  `planet_id` tinyint(4) DEFAULT NULL,
  `weapon_id` smallint(6) DEFAULT NULL,
  `armour_id` smallint(6) DEFAULT NULL,
  `food_id` smallint(6) DEFAULT NULL,
  `item_id` smallint(6) DEFAULT NULL,
  `home_id` smallint(6) DEFAULT NULL,
  `vehicle_id` smallint(6) DEFAULT NULL,
  `hardware_id` smallint(6) DEFAULT NULL,
  `is_black_shop` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `shop`
--

INSERT INTO `shop` (`shop_id`, `shop_name`, `shop_sprite`, `species_id`, `npc_id`, `planet_id`, `weapon_id`, `armour_id`, `food_id`, `item_id`, `home_id`, `vehicle_id`, `hardware_id`, `is_black_shop`) VALUES
(1, 'wallmart', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `spaceship`
--

CREATE TABLE `spaceship` (
  `spaceship_id` int(10) UNSIGNED NOT NULL,
  `spaceship_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spaceship_sprite` blob,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `only_for_species_id` tinyint(4) DEFAULT NULL,
  `shop_id` tinyint(4) DEFAULT NULL,
  `npc_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `species`
--

CREATE TABLE `species` (
  `species_id` int(10) UNSIGNED NOT NULL,
  `species_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `species_sprite` blob,
  `species_stats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_planet_id` tinyint(4) NOT NULL,
  `species_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `species_benefits` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `species_health` smallint(6) NOT NULL,
  `species_stamania` smallint(6) NOT NULL,
  `species_attack` smallint(6) NOT NULL,
  `species_defence` smallint(6) NOT NULL,
  `base_weapon_id` tinyint(4) DEFAULT NULL,
  `base_armour_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `species`
--

INSERT INTO `species` (`species_id`, `species_type`, `species_sprite`, `species_stats`, `home_planet_id`, `species_description`, `species_benefits`, `species_health`, `species_stamania`, `species_attack`, `species_defence`, `base_weapon_id`, `base_armour_id`) VALUES
(1, 'Human', NULL, 'Overall a good character', 1, 'Us', 'High income', 120, 120, 120, 120, NULL, NULL),
(2, 'Venusiän', NULL, 'High health / defence', 2, 'it cant move fast because its very hot', 'Very high resistance against high temprature', 180, 90, 90, 180, NULL, NULL),
(3, 'Martian', NULL, 'High attack / stamania', 3, 'They are red in the sun. but pitch black in the shadow', 'They have a high stamania because they are very energetic', 90, 180, 180, 90, NULL, NULL),
(4, 'Saturnian', NULL, 'High health / attack', 4, 'Very slow but high hitters', 'Good agains cold enviorments', 180, 90, 180, 90, NULL, NULL),
(5, 'Uranian', NULL, 'High defence / stamania', 5, 'They are a tank with high agility', 'Long endurance', 90, 180, 90, 180, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'obejansen7@gmail.com', '$2y$10$iX3xcCkXmo1AhlM/Ssalv.NoalBM4AYlZPNRDud3805gjnDWc0JDK', NULL, '2018-03-30 09:14:43', '2018-03-30 09:14:43');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `vehicle_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `only_for_species_id` tinyint(4) DEFAULT NULL,
  `vehicle_speed` int(11) NOT NULL,
  `vehicle_sprite` blob,
  `vehicle_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_price` bigint(20) DEFAULT NULL,
  `vehicle_value` bigint(20) DEFAULT NULL,
  `vehicle_fuel` int(11) DEFAULT NULL,
  `num_vehicle_shop` tinyint(4) DEFAULT NULL,
  `vehicle_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `weapons`
--

CREATE TABLE `weapons` (
  `weapon_id` int(10) UNSIGNED NOT NULL,
  `weapon_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weapon_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rarity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_at_lvl` tinyint(4) DEFAULT NULL,
  `only_for_species_id` tinyint(4) DEFAULT NULL,
  `weapon_damage` smallint(6) NOT NULL,
  `weapon_firespeed` decimal(10,1) DEFAULT NULL,
  `weapon_rounds` smallint(6) NOT NULL,
  `weapon_clip` smallint(6) NOT NULL,
  `weapon_accuracy` smallint(6) NOT NULL,
  `weapon_crit_hit` smallint(6) NOT NULL,
  `weapon_crit_chance` smallint(6) NOT NULL,
  `weapon_price` bigint(20) NOT NULL,
  `weapon_sprite` blob,
  `num_weapon_shop` smallint(6) DEFAULT NULL,
  `shop_id` tinyint(4) DEFAULT NULL,
  `weapon_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `weapons`
--

INSERT INTO `weapons` (`weapon_id`, `weapon_name`, `weapon_type`, `rarity`, `available_at_lvl`, `only_for_species_id`, `weapon_damage`, `weapon_firespeed`, `weapon_rounds`, `weapon_clip`, `weapon_accuracy`, `weapon_crit_hit`, `weapon_crit_chance`, `weapon_price`, `weapon_sprite`, `num_weapon_shop`, `shop_id`, `weapon_description`) VALUES
(1, 'plasma handgun', 'plasma', 'epic', 5, NULL, 50, '1.2', 1, 10, 100, 50, 50, 500, 0x89504e470d0a1a0a0000000d494844520000005d000000210806000000bb91a77900000006624b474400ff00ff00ffa0bda793000000097048597300000b1300000b1301009a9c180000000774494d4507e2031d06293564f3c2c10000001d69545874436f6d6d656e7400000000004372656174656420776974682047494d50642e6507000004104944415468deed9abd6ae34014858f162feb6a110481bb906208040469d2a47499d2cfa02eeefc1cee9ccecfe032450a956ed2080481a0c2a433888048a59042dbe48a99c9fcc9b62caf930bc692258d3ddf3df7cc8c64e027f61ede77ea6c1fa868bbecb0efbfbe9bca6e2713dc4e264202f61dbd6354b249c5abd5ca5a057cb45111deff6207ae2a0680bbe9540bab0f5437a31100e07eb1400978f2f7503bb6b68e4ee97da0e23baf8a87870730c60000676767ce6d17450100b81e0eb18ce34a86acab86a386ae026e025114c597e3a62a59c631ae87c31afcdd740a52ffb7f47402be5aad70bf5828cf21608c31645906c658ad5edff771331a59957f379d0ae0ef178b7a7f139b6b62415e977075be4cc059182aafcdd2b40694e779fd791004f5b6effbd6df20835ec6b19054fa4c55057c529bfa7eaf2d782ed9973b431de13b94a5e997eb5818d616c183e61390e7b9704c57312ad0ba31804fcc36339cdeb6a0a3f1587bde7c36ab4c3f88ef0cefdba4f22c4dc1c2b086797171a1ecb44ae97212780bcaf3bcde676108c698f09d7208ed28aa2f4bd3aa35a5136c13683ea2f1d8085e56a39c0402c9775a15beefd7de2ebf174561bd9e94ae3b4f9588d607521beccbcb4b613f49922fe0756528835fc6b152e5b542b963fc2cc414411020cb32abddec6290dc1abaabb2932411c0d336c1a7eb75aad7f92f6f2b4f4f4f7a256a542e83f67d1f45510849a06d7980de6691664b5aaf296c59d5a650c127f025e065695a91479a06be3ccf6bf09b864ded3ae04dec54c7671c4582d87a4d95cd5b876b2278f82af0ba014a3590e9809282e577d5acc6b55d6e42b0959dcce67301bcb7c900d924cbba18479150767da0a2291cf9360d6e04872092a79bd4c98375190855ed2ce378277ede07aa4ff02801afa72b2197eccad75015b8c097b3af521e590effb90b70f9fcabd381f2bcb7f70f3caf5f8d55d6c4cf5d13e4e91a7669a0e9acc6a4f83e50b13044100482da55a1832e27cd045c055df67bdbec485ef5d25d4b13ab12f0763215b22d966cf0c751242c3c78f02e839eca9b09f8e3cb5a09feedfd03008c4aa7aa728d2c4d8d62ed03d5cea0cb0d6f023e4992dad278c5eb946eeb3c81564127e03cf45d2c801ad94b97e055b3a1f96cd64861364b21f03c6c1e7a1b0ba04ea037b11a1df84d42e7e18f2f6b9c0f4e8e17ba49ed26ab51c13725c26421ba415306ffbc7eddfb3f035afb374009783ab52649a25d64d9bcffea7450bf5c43672b5d00dff8d6eeae4237afe7f7e5e4bcbd7fe0ef9fdf1b813e1f9c7462277b53ba4ded36e5ebaa8180aaa0da8e1d02f0563dddd5df9bdef7500d86045477ac2bef3e487b7181ad7a86e91aa4ec4350f7dea17fda8cd3233e02eef270c206bb3cd03f53ed4de925779f87546c82ef7adbf5906da4534fb7ddaf6923b93ff11342fc037a9ad8d861c704870000000049454e44ae426082, 50, 1, 'a plasma rifle'),
(2, 'dummy', '0', '0', NULL, NULL, 1, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wilderness`
--

CREATE TABLE `wilderness` (
  `wilderness_id` int(10) UNSIGNED NOT NULL,
  `wilderness_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilderness_sprite` blob,
  `wilderness_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` tinyint(4) NOT NULL,
  `enemy_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `armour`
--
ALTER TABLE `armour`
  ADD PRIMARY KEY (`armour_id`);

--
-- Indexen voor tabel `character`
--
ALTER TABLE `character`
  ADD PRIMARY KEY (`character_id`),
  ADD UNIQUE KEY `character_character_name_unique` (`character_name`),
  ADD UNIQUE KEY `character_user_id_unique` (`user_id`);

--
-- Indexen voor tabel `dome`
--
ALTER TABLE `dome`
  ADD PRIMARY KEY (`dome_id`);

--
-- Indexen voor tabel `enemy`
--
ALTER TABLE `enemy`
  ADD PRIMARY KEY (`enemy_id`);

--
-- Indexen voor tabel `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexen voor tabel `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`hardware_id`);

--
-- Indexen voor tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexen voor tabel `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexen voor tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexen voor tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexen voor tabel `loot`
--
ALTER TABLE `loot`
  ADD PRIMARY KEY (`loot_id`);

--
-- Indexen voor tabel `meds`
--
ALTER TABLE `meds`
  ADD PRIMARY KEY (`meds_id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `misc`
--
ALTER TABLE `misc`
  ADD PRIMARY KEY (`misc_id`);

--
-- Indexen voor tabel `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`motel_id`);

--
-- Indexen voor tabel `npc`
--
ALTER TABLE `npc`
  ADD PRIMARY KEY (`npc_id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexen voor tabel `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`planet_id`);

--
-- Indexen voor tabel `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexen voor tabel `spaceship`
--
ALTER TABLE `spaceship`
  ADD PRIMARY KEY (`spaceship_id`);

--
-- Indexen voor tabel `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`species_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexen voor tabel `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexen voor tabel `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`weapon_id`);

--
-- Indexen voor tabel `wilderness`
--
ALTER TABLE `wilderness`
  ADD PRIMARY KEY (`wilderness_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `armour`
--
ALTER TABLE `armour`
  MODIFY `armour_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `character`
--
ALTER TABLE `character`
  MODIFY `character_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `dome`
--
ALTER TABLE `dome`
  MODIFY `dome_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `enemy`
--
ALTER TABLE `enemy`
  MODIFY `enemy_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `hardware`
--
ALTER TABLE `hardware`
  MODIFY `hardware_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `loot`
--
ALTER TABLE `loot`
  MODIFY `loot_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `meds`
--
ALTER TABLE `meds`
  MODIFY `meds_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT voor een tabel `misc`
--
ALTER TABLE `misc`
  MODIFY `misc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `motel`
--
ALTER TABLE `motel`
  MODIFY `motel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `npc`
--
ALTER TABLE `npc`
  MODIFY `npc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `planet`
--
ALTER TABLE `planet`
  MODIFY `planet_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `spaceship`
--
ALTER TABLE `spaceship`
  MODIFY `spaceship_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `species`
--
ALTER TABLE `species`
  MODIFY `species_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `weapons`
--
ALTER TABLE `weapons`
  MODIFY `weapon_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `wilderness`
--
ALTER TABLE `wilderness`
  MODIFY `wilderness_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
