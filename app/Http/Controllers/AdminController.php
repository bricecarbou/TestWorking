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
            'card_type' => ['required'],
            'card_image_url' => ['required'],
        ]);

        // Création d'un message dans la base de données avec Eloquent
        Card::create([
            'CardName' => request('card_name'),
            'TypeId' => request('card_type'),
            'CardImagePath' => request('card_image_url'),
        ]);

        // Redirection vers la page de profil avec un message flash.
        flash("New card submitted.")->success();
        return back();
    }
}
