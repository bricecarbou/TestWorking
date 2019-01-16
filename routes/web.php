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

Route::view('/','welcome');

// Subcription route
Route::get('/subscribe', 'SubscribeController@form');
Route::post('/subscribe', 'SubscribeController@processing');

//Connexion Route
Route::get('/connexion', 'ConnexionController@form');
Route::post('/connexion', 'ConnexionController@processing');

Route::view('/password_recovering', 'password_recovering');
Route::post('/password_recovering', 'AccountController@password_recovering');
Route::get('/update_password/{hash}', 'AccountController@password_recovering_decodehash');
Route::post('/update_password', 'AccountController@password_recovering_post');

// account
Route::get('/my-account', 'AccountController@home')->middleware('App\Http\Middleware\Auth');
Route::get('/disconnect', 'AccountController@disconnect')->middleware('App\Http\Middleware\Auth');
Route::get('/delete_my_account', 'AccountController@delete')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-email', 'AccountController@modifyemail')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-password', 'AccountController@modifypassword')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-cr_key', 'AccountController@modifycr_key')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-discord_id', 'AccountController@modifyDiscordID')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-clan', 'AccountController@modifyclan')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-group', 'AccountController@modifygroup')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_modify-cr_key/{trader}', 'AccountController@admin_modifycr_key')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_modify-discord_id/{trader}', 'AccountController@admin_modifyDiscordID')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_modify-clan/{trader}', 'AccountController@admin_modifyclan')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_modify-role/{trader}', 'AccountController@admin_modifyrole')->middleware('App\Http\Middleware\Auth');

//leader
Route::view('/leader_page', 'leader_page')->middleware('App\Http\Middleware\Auth');
Route::post('/Add_clan', 'LeaderController@AddClan')->middleware('App\Http\Middleware\Auth');
Route::post('/Delete_clan', 'LeaderController@DeleteClan')->middleware('App\Http\Middleware\Auth');
Route::post('/Webhookurl', 'LeaderController@Webhookurl')->middleware('App\Http\Middleware\Auth');

// admin
Route::get('/admin_trader_account/{trader}/{action}', 'AdminController@traderAccount')->middleware('App\Http\Middleware\Auth');
Route::get('/admin_new_group', 'AdminController@newGroup')->middleware('App\Http\Middleware\Auth');
Route::get('/admin_card_enter', 'AdminController@admin_card_enter')->middleware('App\Http\Middleware\Auth');
Route::get('/admin_card_delete', 'AdminController@admin_card_delete')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_card_id_recover', 'AdminController@cardIdRecover')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_card_enter', 'AdminController@new')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_card_delete', 'AdminController@delete')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_new_group', 'AdminController@admin_new_group')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_delete_group', 'AdminController@admin_delete_group')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_new_role', 'AdminController@admin_new_role')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_delete_role', 'AdminController@admin_delete_role')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_leader_page', 'AdminController@admin_leader_page')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_Add_clan/{group}', 'AdminController@AddClan')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_Delete_clan/{group}', 'AdminController@DeleteClan')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_Webhookurl/{group}', 'AdminController@Webhookurl')->middleware('App\Http\Middleware\Auth');


// trade
Route::get('/new-trad', 'TradController@newtrad')->middleware('App\Http\Middleware\Auth');
Route::post('/new-trad', 'TradController@createnewtrad')->middleware('App\Http\Middleware\Auth');
Route::get('/my-trads', 'TradController@mytrads')->middleware('App\Http\Middleware\Auth');
Route::get('/discord/{traddest}/{trad}', 'TradController@sendDiscordMsg')->middleware('App\Http\Middleware\Auth');
Route::get('/my-trads/{trad}', 'TradController@delete')->middleware('App\Http\Middleware\Auth');
Route::get('/trads','TradController@allTrads')->middleware('App\Http\Middleware\Auth');
Route::post('/trads','TradController@allTrads')->middleware('App\Http\Middleware\Auth');
Route::get('/traders','TradersController@liste')->middleware('App\Http\Middleware\Auth');
Route::post('/traders','TradersController@liste')->middleware('App\Http\Middleware\Auth');
Route::get('/updateAll','TradController@updateAll')->middleware('App\Http\Middleware\Auth');
Route::view('/help_discordid','help_discordid')->middleware('App\Http\Middleware\Auth');
Route::view('/error_CR_id','error_CR_id')->middleware('App\Http\Middleware\Auth');


Route::get('/{nick}', 'AccountController@home');
