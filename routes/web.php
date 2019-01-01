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

// traders route
Route::get('/traders', 'TradersController@liste')->middleware('App\Http\Middleware\Auth');

// Subcription route
Route::get('/subscribe', 'SubscribeController@form');
Route::post('/subscribe', 'SubscribeController@processing');

//Connexion Route
Route::get('/connexion', 'ConnexionController@form');
Route::post('/connexion', 'ConnexionController@processing');

// account
Route::get('/my-account', 'AccountController@home')->middleware('App\Http\Middleware\Auth');
Route::get('/disconnect', 'AccountController@disconnect')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-password', 'AccountController@modifypassword')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-cr_key', 'AccountController@modifycr_key')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-discord_id', 'AccountController@modifyDiscordID')->middleware('App\Http\Middleware\Auth');
Route::post('/modify-clan', 'AccountController@modifyclan')->middleware('App\Http\Middleware\Auth');
Route::get('/admin_card_enter', 'AccountController@admin_card_enter')->middleware('App\Http\Middleware\Auth');
Route::get('/admin_card_delete', 'AccountController@admin_card_delete')->middleware('App\Http\Middleware\Auth');

// admin
Route::post('/admin_card_id_recover', 'AdminController@cardIdRecover')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_card_enter', 'AdminController@new')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_card_delete', 'AdminController@delete')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_trader_delete', 'AdminController@traderDelete')->middleware('App\Http\Middleware\Auth');
Route::get('/admin_trader_account/{trader}', 'AdminController@traderAccount')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_modify-cr_key/{trader}', 'AccountController@admin_modifycr_key')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_modify-discord_id/{trader}', 'AccountController@admin_modifyDiscordID')->middleware('App\Http\Middleware\Auth');
Route::post('/admin_modify-clan/{trader}', 'AccountController@admin_modifyclan')->middleware('App\Http\Middleware\Auth');

// trade
Route::get('/new-trad', 'TradController@newtrad')->middleware('App\Http\Middleware\Auth');
Route::post('/new-trad', 'TradController@createnewtrad')->middleware('App\Http\Middleware\Auth');
Route::get('/my-trads', 'TradController@mytrads')->middleware('App\Http\Middleware\Auth');
Route::get('/discord/{traddest}/{trad}', 'TradController@sendDiscordMsg')->middleware('App\Http\Middleware\Auth');
Route::get('/my-trads/{trad}', 'TradController@delete')->middleware('App\Http\Middleware\Auth');
Route::get('/trads','TradController@allTrads')->middleware('App\Http\Middleware\Auth');
Route::get('/traders','TradersController@liste')->middleware('App\Http\Middleware\Auth');
Route::get('/updateAll','TradController@updateAll')->middleware('App\Http\Middleware\Auth');




Route::get('/{nick}', 'AccountController@home');

