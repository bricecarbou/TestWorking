<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Laravel\Passport\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class RegisterController extends Controller
{
    use IssueTokenTrait;
    
    private $client;

    public function __construct(){
        $this->client = Client::find(2);
    }

    public function register(Request $request){
        

        $this->validate($request, [
            'nick'=>'required',
            'cr_key'=>'required',
            'password'=>'required','min:4',
            'nick'=>'unique:traders'
         ]);

       
        $trader = new \App\Trader;
        $trader->nick = request('nick');
        $trader->role_id = 4;

        $cr_key = request('cr_key');
        // retirer le # sur le premier charactere 
        if (substr($cr_key, 0 , 1) == "#")
        {
            $trader->cr_key = substr($cr_key, 1);
        }
        else
        {
            $trader->cr_key = $cr_key;
        }

        $a = \App\Trader::RecoverTraderClan($cr_key);

        if($a == "error")
        {
            return back();            
        }

        //trouver le clan
        $clan = \App\Clan::where('name', $a)->get()->first();
        
        if($clan == null){
            $crTrad = \App\Clan::where('name', 'CR Trad')->get()->first();
            if ($crTrad == null)
            {
                return back();   
            }
            $trader->clan_id = $crTrad->id;
        }
        else{
            $trader->clan_id = $clan->id;
        }
 
        $trader->discord_id = "tobecompleted";

        $password = request('password');
        $trader->password = bcrypt($password);
        $trader->save();

        /*
        //envoie une notification au leader
        //=======================================================================
        // Create new webhook in your Discord channel settings and copy&paste URL
        //=======================================================================
        $webhookurl = $clan->group->webhookurl;
        
        //=======================================================================
        // Compose message. You can use Markdown
        //=======================================================================
        $leaders = \App\Trader::where('role_id', '2')->get();

        foreach ($leaders as $leader) {
            if ($leader->clan->group_id === $trader->clan->group_id) {
                $msg = "Leader <@$leader->discord_id> , I have suscribed to the application ( https://cr-trade.organit.fr/ ), please set me to trader role. My nick is $trader->nick";

                (new \AG\DiscordMsg(
                    $msg, // message
                    $webhookurl, // chanel webhook link
                    "Trad Bot", // bot name
                    '' // avatar url
                ))->send();
            }
            
            if ($leader->mailling === 1) 
            {
                $title = "A new member";
                $content = "You have a new member to your clan in CR Trads: $trader->nick, Could you change his role to trader" ;

                $dest_email = $leader->email;
                $dest_name = $leader->nick;

                try {
                    $data = ['email'=> $dest_email,'name'=> $dest_name,'subject' => $title, 'content' => $content];
                    Mail::send('email.trad', $data, function ($message) use ($data, $trader, $dest_email) {
                        $subject=$data['subject'];
                        $message->from($dest_email);
                        $message->to($data['email'], $trader->nick)->subject($subject);
                    });
                } catch (\Exception $e) {
                    dd($e->getMessage());
                }
            }
        }

*/
        
        return $this->IssueToken($request, 'password');
   }
}
