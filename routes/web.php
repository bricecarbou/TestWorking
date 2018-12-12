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
    return view('welcome');
});


Route::get('/subscribe', function () {
    return view('subscribe');
});

Route::post('/subscribe', function () {
    request()->validate([
      'nick'=>['required'],
      'password'=>['required', 'confirmed', 'min:8'],
      'password_confirmation' => ['required'],
      'nick'=>'unique:traders'
    ]);

    
    $trader = new App\Trader;
    $trader->nick = request('nick');
    $trader->clan = request('clan');
    $trader->password = bcrypt(request('password'));
    $trader->save();

    return "Your Nickname is " . request('nick') . " and your clan is " . request('clan');
});
