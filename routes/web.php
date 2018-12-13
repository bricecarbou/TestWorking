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
Route::get('/traders', 'TradersController@liste');

// Subcription route
Route::get('/subscribe', 'SubscribeController@form');
Route::post('/subscribe', 'SubscribeController@processing');

//Connexion Route
Route::get('/connexion', 'ConnexionController@form');
Route::post('/connexion', 'ConnexionController@processing');

// account
Route::get('/my-account', 'AccountController@home');
Route::get('/disconnect', 'AccountController@disconnect');
Route::post('/modify-password', 'AccountController@modifypassword');

Route::get('/{nick}', 'AccountController@look');