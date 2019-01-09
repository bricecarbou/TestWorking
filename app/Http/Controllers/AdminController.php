<?php

namespace App\Http\Controllers;
use App\Card;

class AdminController extends Controller
{
    public function cardIdRecover()
    {
       
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->nick === 'admin')) {
            flash("Only the admin can  access to this page.")->error();

            return redirect('/connexion');
        }

        // Validation des données
        request()->validate([
            'card_name_recover' => ['required'],
         ]);

        $card_id_recover = \App\Card::RecoverCardId(request('card_name_recover'));

        return view('admin_card_enter',[
            'card_id_recover' => $card_id_recover,
        ]);
    }

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
        $card = new \App\Card;

        $card->CardName = request('card_name');
        $card->CardImagePath = request('card_image_url');
        $card->id = request('card_id');
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

    public function traderDelete(\App\Trader $trader)
    {
       
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->nick === 'admin')) {
            flash("Only the admin can  access to this page.")->error();

            return redirect('/connexion');
        }
 
        $trads = \App\Trad::where('trader_id', $trader->id)->get();
        foreach ($trads as $trad) 
        {
            $trad->delete();
        }        
        
        $trader->delete();

        flash("Trader(s) deleted.")->success();
        return back();
    }

    public function traderAccount(\App\Trader $trader, $action)
    {
               
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->role->name === 'admin') AND !(auth()->user()->role->name === 'leader') ) {
            flash("Only the admin or leader can  access to this page.")->error();

            return redirect('/connexion');
        }

        switch ($action) {
            case "update":
                return view('admin_trader_account', [
                    'trader' => $trader,
                ]);
            break;
    
            case "delete":
                $this->traderDelete($trader);
                return back();
            break;
        }      
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

    public function newGroup()
    {
       
        if (auth()->user()->role->name === 'admin')
        {
            return view('admin_group');
        }

        flash("Only the admin can access to this page.")->error();
        return back();
    }

    public function admin_new_group()
    {
       
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->nick === 'admin')) {
            flash("Only the admin can  access to this page.")->error();

            return redirect('/connexion');
        }

        // Validation des données
        request()->validate([
            'group_name' => ['required'],
        ]);


        // Card create
        $group = new \App\ClanGroup;

        $group->name = request('group_name');
        $group->save();

       // Redirection vers la page avec un message flash.
        flash("New group submitted.")->success();
        return back();
    }

    public function admin_delete_group()
    {
       
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->role->name === 'admin')) {
            flash("Only the admin can  access to this page.")->error();

            return redirect('/my-account');
        }

        // Validation des données
        request()->validate([
            'group' => ['required'],
        ]);


        $group_id = request('group');

        $group = \App\ClanGroup::where('id', $group_id)->get()->first();

        $group->delete();
     
        
        flash("Group deleted.")->success();
        return back();
    }
}
