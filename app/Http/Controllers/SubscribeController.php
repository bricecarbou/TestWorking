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
        $traders = \App\Trader::all();
        
        foreach ($traders as $subscribe)
        {
            if ($subscribe->nick == request('nick'))
            {
                flash("This Login is already used")->error();

                return back();
            }
        }
        

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

        //envoie une notification au leader
        //=======================================================================
        // Create new webhook in your Discord channel settings and copy&paste URL
        //=======================================================================
        $webhookurl = $clan->group->webhookurl;
        
        //=======================================================================
        // Compose message. You can use Markdown
        //=======================================================================
        $leaders = \App\Trader::where('role_id', '2')->get();

        foreach($leaders as $leader)
        {
            if ($leader->clan->group_id === $trader->clan->group_id)
            {
                $msg = "Leader <@$leader->discord_id> , I have suscribed to the application ( https://cr-trade.organit.fr/ ), please set me to trader role. My nick is $trader->nick";

                (new \AG\DiscordMsg(
                    $msg, // message
                    $webhookurl, // chanel webhook link
                    "Trad Bot", // bot name
                    '' // avatar url
                ))->send();          
            }
        }

        Auth::login($trader);

        flash("Your are connected. Think to update your clan, your email (to mail recover) and your discord ID ==> on this Page")->success();

        return redirect('/my-account');
    }
}
