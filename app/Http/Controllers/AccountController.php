<?php

namespace App\Http\Controllers;

use Mail;
use Vinkla\Hashids\Facades\Hashids;
use App\Trader;
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

    public function password_recovering()
    {
        request()->validate([
            'email' => ['required'],
        ]);

        $email = request('email');
        
        $trader = \App\Trader::where('email', $email)->get()->first();

        if (!$trader)
        {
            flash("Your email is not find.")->error();
            return redirect('/password_recovering');
        }
        else
        {
            //return view('update_password', compact('trader')); 

            $title = "Password of Trad application";
            $content = "Your password is:"  ;


            $user_email = $trader->email;
            $user_name = $trader->nick;

            try
            {
                $hash = Hashids::encode($trader->id);
                $url=env('APP_URL').'update_password/'.$hash;
                $data = ['email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content, 'url'=> $url];
                Mail::send('email.recover_password', $data, function($message) use($data, $trader)
                {
                    $subject=$data['subject'];
                    $message->from('brice@organit.fr');
                    $message->to($data['email'], $trader->nick)->subject($subject);
                });
            }
            catch (\Exception $e)
            {
                dd($e->getMessage());
            }
    
            
            flash("Your password has been mail.")->success();
            return redirect('/connexion');
        }


    }
 
    public function password_recovering_post()
    {
        $trader = Trader::find(request('trader_id'));
        
        request()->validate([
            'password' => ['required', 'confirmed', 'min:4'],
            'password_confirmation' => ['required'],
        ]);

        $trader->update([
            'password' => bcrypt(request('password')),
        ]);

        flash("Your password has been updated.")->success();

        $result = auth()->attempt([
            'nick' => $trader->nick,
            'password' => request('password'),
        ]);

        if ($result) {
            return redirect('/my-trads');
        }

        return back()->withInput()->withErrors([
            'nick' => 'Your credentials are incorrect.',
        ]); 


    }

    public function password_recovering_decodehash($hash)
    {
        $id = Hashids::decode($hash);

        auth()->loginUsingId($id[0]);

        return redirect('my-account');
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

    public function modifyemail()
    {
        request()->validate([
            'email' => ['required'],
        ]);

        $user = auth()->user();

        auth()->user()->update([
            'email' => (request('email')),
        ]);

        flash("Your email has been updated.")->success();

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
        $user->clan_id = request('clan');

        $user->save();

        flash("Your Clan has been updated.")->success();

        return redirect('/my-account');
    }

    public function modifygroup()
    {
        request()->validate([
            'group' => ['required'],
        ]);

        $group_id = request('group');

        $clan = \App\Clan::where('group_id', $group_id)->first();
        $user = auth()->user();
        $user->clan_id = $clan->id;
        $user->role_id = 4;

        $user->save();

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
                $msg = "Leader <@$leader->discord_id> , I have suscribed to the application, please set me to trader role. My nick is $trader->nick";

               (new \AG\DiscordMsg(
                    $msg, // message
                    $webhookurl, // chanel webhook link
                    "Trad Bot", // bot name
                    '' // avatar url
                ))->send();         
            }
        }

        flash("Your Group has been updated.")->success();

        return redirect('/my-account');
    }

    public function modifyDiscordID()
    {
        request()->validate([
            'discordID' => ['required'],
        ]);

        $user = auth()->user();
        $user->discord_id = request('discordID');

        $user->save();

        flash("Your Discord id has been updated.")->success();

        return redirect('/my-account');
    }


    public function admin_modifycr_key(\App\Trader $trader)
    {
        request()->validate([
            'cr_key' => ['required'],
        ]);

        $cr_key = request('cr_key');

        if (substr($cr_key, 0 , 1) == "#")
        {
            $trader->cr_key = substr($cr_key, 1);
        }
        else
        {
          $trader->cr_key = $cr_key;
        }

        $trader->save();

        flash("The Clash Royale ID has been updated.")->success();

        return back();
    }

    public function admin_modifyclan(\App\Trader $trader)
    {
        request()->validate([
            'clan' => ['required'],
        ]);

        $trader->clan_id = request('clan');

        $trader->save();

        flash("The Clan has been updated.")->success();

        return back();
    }

    public function admin_modifyDiscordID(\App\Trader $trader)
    {
        request()->validate([
            'discordID' => ['required'],
        ]);

        $trader->discord_id = request('discordID');

        $trader->save();

        flash("The Discord id has been updated.")->success();

        return back();
    }

    public function admin_modifyrole(\App\Trader $trader)
    {
        request()->validate([
            'role' => ['required'],
        ]);

        $trader->role_id = request('role');

        $trader->save();

        flash("The role has been updated.")->success();

        return back();
    }

    public function delete()
    {
       
        $trader = auth()->user();
        $trader->delete();

        flash("Your account is deleted.")->success();
        return view('welcome');
    }
}
