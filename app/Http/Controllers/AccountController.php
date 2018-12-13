<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home()
    {
        if (! auth()->check()) {
                flash("You must be connected to access to this page.")->error();
                return redirect('/connexion');
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
        if (auth()->guest()) {
            flash("You must be connected to access to this page.")->error();

            return redirect('/connexion');
        }

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
}
