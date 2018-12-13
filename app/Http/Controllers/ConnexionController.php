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
            return redirect('/my-account');
        }

        return back()->withInput()->withErrors([
            'nick' => 'Your credentials are incorrect.',
        ]);    
    }
}
