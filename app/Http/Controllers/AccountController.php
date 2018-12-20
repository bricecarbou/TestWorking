<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home()
    {
  
        $nick = auth()->user()->nick;

        return  view('my-account', [
            'nick' => $nick,
        ]);
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
            'password' => ['required', 'confirmed', 'min:4'],
            'password_confirmation' => ['required'],
        ]);

        $user = auth()->user();

        auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);

        flash("Your password has been updated.")->success();

        return redirect('/my-account');
    }

    public function modifycr_key()
    {
        request()->validate([
            'cr_key' => ['required'],
        ]);

        $user = auth()->user();
        $user->cr_key = request('cr_key');

        $user->save();

        flash("Your Clash Royale ID has been updated.")->success();

        return redirect('/my-account');
    }

    public function modifyclan()
    {
        request()->validate([
            'clan' => ['required'],
        ]);

        $user = auth()->user();
        $user->clan = request('clan');

        $user->save();

        flash("Your Clan has been updated.")->success();

        return redirect('/my-account');
    }


    public function admin_card_enter()
    {

        $nick = auth()->user()->nick;

        if ($nick === 'admin')
        {
            return view('admin_card_enter');
        }

        flash("Only the admin can access to this page.")->error();
        return back();
    }

    public function admin_card_delete()
    {

        $nick = auth()->user()->nick;

        if ($nick === 'admin')
        {
            return view('admin_card_delete');
        }

        flash("Only the admin can access to this page.")->error();
        return back();
    }

    public function admin_analyse()
    {

        $nick = auth()->user()->nick;

        if ($nick === 'admin')
        {
            return view('admin_analyse');
        }

        flash("Only the admin can access to this page.")->error();
        return back();
    }

}
