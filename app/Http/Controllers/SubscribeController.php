<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function form()
    {
        return view('subscribe');
    }

    public function processing()
    {
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
    }
}
