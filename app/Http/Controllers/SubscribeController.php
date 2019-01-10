<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        $trader->role_id = 4;
        $a = request('clan');
        //trouver le premier clan du group
        $clan = \App\Clan::where('group_id', $a)->get()->first();
        $trader->clan_id = $clan->id;
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

        $trader->discord_id = "to be completed";

        $password = request('password');
        $trader->password = bcrypt($password);
        $trader->save();
    
        Auth::login($trader);

        flash("Your are connected. Think to update your clan, your email (to mail recover) and your discord ID ==> on this Page")->success();

        return redirect('/my-account');
    }
}
