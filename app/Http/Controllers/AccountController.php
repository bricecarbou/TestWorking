<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home()
    {
  
        if (auth()->user()->nick === 'admin'){
            return view('/admin_card_enter');
        }
        
        return view('my-account');
    }

    public function disconnect()
    {
        auth()->logout();

        flash("You are disconnected.")->success();

        return redirect('/');
    }

    public function modifypassword()
    {
        request()->validate([
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        $user = auth()->user();

        auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);

        flash("Your password has been updated.")->success();

        return redirect('/my-account');
    }

    public function look()
    {
        $nick = request('nick');
        
        $user = \App\Trader::where('nick', $nick)->first();

        return  view('trader', [
            'trader' => $user,
        ]);
    }

    public function admin_card_enter()
    {

        // Validation des données
        request()->validate([
            'message' => ['required'],
        ]);

        // Création d'un message dans la base de données avec Eloquent
        Message::create([
            'utilisateur_id' => auth()->id(),
            'contenu' => request('message'),
        ]);

        // Redirection vers la page de profil avec un message flash.
        flash("Votre message a bien été publié.")->success();
        return back();
    }

}
