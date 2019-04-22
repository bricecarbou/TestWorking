<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function form()
    {
        return view('connexion');
    }

    public function processing()
    {
        request()->validate([
            'nick' => ['required'],
            'password' => ['required'],
        ]);
    
        $result = auth()->attempt([
            'nick' => request('nick'),
            'password' => request('password'),
        ]);


        if ($result) {
            flash("Your are connected")->success();

            $trader = auth()->user();

            if ($trader->nick != "admin") {
                // check the clan
                $a = \App\Trader::RecoverTraderClan($trader->cr_key);

                if ($a == "error") {
                    flash("Error in your CR key")->error();
        
                    return redirect('/my-trads');
                }
        
                //trouver le clan
                $clan = \App\Clan::where('name', $a)->get()->first();
                
                if ($clan == null) {
                    $crTrad = \App\Clan::where('name', 'CR Trad')->get()->first();
                    if ($crTrad == null) {
                        flash("Error in your CR key")->error();
        
                        return redirect('/my-trads');
                    }
                    flash("Your clan doesn't exist, you are automatically register to <CR Trad> group")->warning();
                    $trader->clan_id = $crTrad->id;
                } else {
                    $trader->clan_id = $clan->id;
                }
        
                $trader->save();
            }

            return redirect('/my-trads');
        }

        return back()->withInput()->withErrors([
            'nick' => 'Your credentials are incorrect.',
        ]);    
    }
}
