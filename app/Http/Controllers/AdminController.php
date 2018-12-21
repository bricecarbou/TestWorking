<?php

namespace App\Http\Controllers;

use App\Card;

class AdminController extends Controller
{
    public function new()
    {
       
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->nick === 'admin')) {
            flash("Only the admin can  access to this page.")->error();

            return redirect('/connexion');
        }

        // Validation des données
        request()->validate([
            'card_name' => ['required'],
            'card_image_url' => ['required'],
        ]);


        // Card create
/*        Card::create([
            'CardName' => request('card_name'),
            'card_type_id' => request('card_type'),
            'CardImagePath' => request('card_image_url'),
        ]);
*/
        $card = new \App\Card;

        $card->CardName = request('card_name');
        $card->CardImagePath = request('card_image_url');
        $card->card_type_id = request('card_type');

        $card->save();

       // Redirection vers la page avec un message flash.
        flash("New card submitted.")->success();
        return back();
    }

    public function delete()
    {
       
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->nick === 'admin')) {
            flash("Only the admin can  access to this page.")->error();

            return redirect('/connexion');
        }

        // Validation des données
        request()->validate([
            'btn_cardwantdelete'=>['required'],
        ]);

        $array_id=request('btn_cardwantdelete');

        foreach ($array_id as $card_id) 
        {
            Card::find($card_id)->delete();
        }

        flash("Card(s) deleted.")->success();
        return back();
    }

    public function traderDelete()
    {
       
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->nick === 'admin')) {
            flash("Only the admin can  access to this page.")->error();

            return redirect('/connexion');
        }

        // Validation des données
        request()->validate([
            'btn_traderwantdelete'=>['required'],
        ]);

        $array_id=request('btn_traderwantdelete');
        
        foreach ($array_id as $trader_id) 
        {
            \App\Trader::find($trader_id)->delete();
        }

        flash("Trader(s) deleted.")->success();
        return back();
    }
}
