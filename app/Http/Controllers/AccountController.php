<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home()
    {
  
        $nick = auth()->user()->nick;
        $discord = \App\Discordid::where('trader_id', auth()->user()->id)->get();

        if(!($discord->isEmpty()))
        {
            return  view('my-account', [
                'nick' => $nick,
                'discord_id'  => $discord[0]->discord_id,
            ]);
        }
        else
        {
            return  view('my-account', [
                'nick' => $nick,
                'discord_id'  => "to be completed",
            ]);            
        }
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
        $cr_key = request('cr_key');

        if (substr($cr_key, 0 , 1) == "#")
        {
            $user->cr_key = substr($cr_key, 1);
        }
        else
        {
          $user->cr_key = $cr_key;
        }

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

    public function modifyDiscordID()
    {
        request()->validate([
            'discordID' => ['required'],
        ]);

        $discord = \App\Discordid::where('trader_id', auth()->user()->id)->get();

        if ($discord->isEmpty()) 
        {
            $newdiscord = new \App\Discordid;

            $user = auth()->user();
            $newdiscord->discord_id = request('discordID');
            $newdiscord->trader_id = $user->id;
            $newdiscord->save();

        }
        else
        {
            $discord[0]->discord_id = request('discordID');
            $discord[0]->save();

        }



        flash("Your Discord id has been updated.")->success();

        return redirect('/my-account');
    }

    public function admin_card_enter()
    {

        $nick = auth()->user()->nick;

        if ($nick === 'admin')
        {
            return view('admin_card_enter',[
                'card_id_recover' => ' ',
            ]);
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

    public function admin_trader_delete()
    {

        $nick = auth()->user()->nick;

        if ($nick === 'admin')
        {
            return view('admin_trader_delete');
        }

        flash("Only the admin can access to this page.")->error();
        return back();
    }

}
