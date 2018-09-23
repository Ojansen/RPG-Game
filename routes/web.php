<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	// 		Beginning
	Route::get('/', function () { return redirect('Character'); });
	// still need to route login to character
	Route::get('/home', function () { return redirect('Character'); });
	Route::get('/Character', 'CharacterController@Index')->name('CharacterIndex');
	Route::post('/Character', 'CharacterController@Create')->name('CreateCharacter');

	//		Misc controllers

	// Leaderboard
	Route::get('/Leaderbord', 'LeaderbordController@Index')->name('LeaderbordIndex');
	Route::post('/Leaderbord/Character/', 'LeaderbordController@NameSearch')->name('NameSearch');
	Route::get('/Leaderbord/Character/', 'LeaderbordController@NameSearch')->name('NameSearch');

	// to use the inventory
	Route::get('/Character/UseMeds/{meds_id}', 'InventoryController@UseMeds');
	Route::get('/Character/UseFood/{food_id}', 'InventoryController@UseFood');
	Route::get('/Character/EquipWeapon/{weapon_id}', 'InventoryController@EquipWeapon');
	Route::get('/Character/EquipArmour/{armour_id}', 'InventoryController@EquipArmour');

	// To create the universe
	Route::get('/World', 'WorldController@Index')->name('WorldIndex');
	Route::get('/World/{planet_name}', 'WorldController@Planet');

	// Ostilia's shit
	Route::get('/World/Ostilia/Shop', 'ShopController@Shop')->name('OstiliaShop');
	Route::get('/World/Ostilia/Shop/weapon/{weapon_id}', 'ShopController@BuyWeapon');
	Route::get('/World/Ostilia/Shop/armour/{armour_id}', 'ShopController@BuyArmour');

	Route::get('/World/Ostilia/Hospital', 'HospitalController@Hospital')->name('OstiliaHospital');
	Route::get('/World/Ostilia/Hospital/Heal', 'HospitalController@Heal')->name('OstiliaHeal');
	Route::get('/World/Ostilia/Hospital/meds/{meds_id}', 'ShopController@BuyMeds');

	// Mars shit

	// Wilderness
	Route::get('/World/{planet_name}/Wilderness', 'WildernessController@WildernessIndex')->name('WildernessIndex');
	Route::get('/World/{planet_name}/Wilderness/{enemy_id}', 'WildernessController@AttackWilderness');

	// Naiyrus Shit
 	Route::get('/World/Naiyrus/Shop', 'ShopController@Shop')->name('NaiyrusShop');
	Route::get('/World/Naiyrus/Shop/weapon/{weapon_id}', 'ShopController@BuyWeapon');
	Route::get('/World/Naiyrus/Shop/armour/{armour_id}', 'ShopController@BuyArmour');
});

// Route::get('/Character/Index', 'CharacterController@index')->name('')
