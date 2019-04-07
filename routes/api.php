<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'Api\Auth\RegisterController@register');
Route::post('login' , 'Api\Auth\LoginController@login');
Route::post('refresh' , 'Api\Auth\LoginController@refresh');

Route::middleware('auth:api')->group(function(){
    Route::post('logout', 'Api\Auth\LoginController@logout');

    Route::get('myTrades', 'Api\TradController@myTrades');
    Route::get('recoverCards', 'Api\TradController@recoverCards');
    Route::get('recoverCardsToTrade/{cardId}', 'Api\TradController@recoverCardsToTrade');
    Route::post('deleteTrade/{tradeId}', 'Api\TradController@deleteTrade');
    Route::post('createTrade/{cardId}/{cardsToDo}', 'Api\TradController@createTrade');
    Route::post('sendDiscordMsd/{traderId}/{tradId}/{CardIdToDo}', 'Api\TradController@sendDiscordMsg');
});
