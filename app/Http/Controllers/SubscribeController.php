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
            'cr_key'=>['required'],
            'password'=>['required', 'confirmed', 'min:4'],
            'password_confirmation' => ['required'],
            'nick'=>'unique:traders'
        ]);
      
      
          $trader = new \App\Trader;
          $trader->nick = request('nick');
          $trader->clan = request('clan');
          $cr_key = request('cr_key');
          /* retirer le # sur le premier charactere */
          if (substr($cr_key, 0 , 1) == "#")
          {
              $trader->cr_key = substr($cr_key, 1);
          }
          else
          {
            $trader->cr_key = $cr_key;
          }

          $trader->password = bcrypt(request('password'));
          $trader->save();
      
          flash("Your subscrition is done.")->success();
          return view('connexion');
    }
}
