<?php

namespace App\Http\Controllers;

use App\Trad;
use App\Trader;
use Illuminate\Database\Eloquent\Builder;

class TradController extends Controller
{

    public function newtrad()
    {

        if (auth()->user()->role->name === 'new') {

            flash("Your account shall be validated by your leader to access to trads")->error();

            return back();
        }
           

        $cards = \App\Card::all();
        $cardsTrader = \App\Trader::RecoverTraderCards(auth()->user()->cr_key);

        if ($cardsTrader === "error")
        {
            return view('error_CR_id');
        }
        
        $cardsToTrade = array();
        $cardsMax = array();

        foreach($cardsTrader as $cardTrader)
        {
            if( ($cardTrader[3] === "Common") AND (($cardTrader[2] >= '250') OR ($cardTrader[4] > '12')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
                if ($cardTrader[4] > '12')
                {
                    end($cardsToTrade)->CardName = "max";
                }
                else
                {
                    end($cardsToTrade)->CardName = $cardTrader[2];
                }
            }
            elseif( ($cardTrader[3] === "Rare") AND (($cardTrader[2] >= '50') OR ($cardTrader[4] > '10')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
                if ($cardTrader[4] > '10')
                {
                    end($cardsToTrade)->CardName = "max";
                }
                else
                {
                    end($cardsToTrade)->CardName = $cardTrader[2];
                }
            }
            elseif( ($cardTrader[3] === "Epic") AND (($cardTrader[2] >= '10' )OR ($cardTrader[4] > '7')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
                if ($cardTrader[4] > '7')
                {
                    end($cardsToTrade)->CardName = "max";
                }
                else
                {
                    end($cardsToTrade)->CardName = $cardTrader[2];
                }
            }
            elseif( ($cardTrader[3] === "Legendary") AND ((($cardTrader[2] >= '1') AND ($cardTrader[4] > '1')) OR (($cardTrader[2] >= '2') AND ($cardTrader[4] > '0')) OR ($cardTrader[4] > '4')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
                if ($cardTrader[4] > '4')
                {
                    end($cardsToTrade)->CardName = "max";
                }
                else
                {
                    end($cardsToTrade)->CardName = $cardTrader[2];
                }
            } 
        }

        return view('new-trad', [
            'cards' => $cards,
            'cardsToTrade' => $cardsToTrade,
        ]);
    }

    public function createnewtrad()
    {

        request()->validate([
            'btn_cardwant'=>['required'],
            'btn_cardtrad'=>['required']
        ]);


        $trad = new \App\Trad;
    
        $trad->card_id = request('btn_cardwant');


        $trad->trader_id = auth()->user()->id;

        // check that cards type  is similar and card id is different
        $type_id = $trad->card->find($trad->card_id)->card_type_id;
        $array_id=request('btn_cardtrad');

        foreach($array_id as $card_id)
        {
            if(!($trad->card->find($card_id)->card_type_id === $type_id))
            {
                flash("The  Trad is invalid (cards have no same type).")->error();
                return  back();
            }

            if ($card_id === $trad->card_id)
            {
                flash("The  Trad is invalid (you have selected the same card).")->error();
                return  back();
            }
        }

        $trad->save();


        $trad->cards()->sync(request('btn_cardtrad'));


        flash("The new Trad is created.")->success();
        
        return  back();
    }

    public function mytrads()
    {
        return view('my-trads',[
            'trads' => auth()->user()->Trads()->get(),
        ]);
    }

    public function sendDiscordMsg (\App\Trad $traddest, \App\Trad $trad)
    {

        \App\Trader::sendDiscordMsg (
            \App\Trader::find($traddest->trader_id),
            \App\Trader::find($trad->trader_id),
            \App\Card::find($traddest->card_id)->CardName,
            $trad->card->CardName
        );

        flash("A message to traders is sent")->success();
        return redirect(url()->previous().'#'.$trad->id);
        //return back();
    }

    public function delete(\App\Trad $trad)
    {
        $id = $trad->id;
        $trad->delete();

        //return back();
        return redirect(url()->previous().'#'.$id);
    }

    public function allTrads()
    {
        $name = request('name');
        $clan = request('clan');
        $searchcard = request('searchcard');
        $wantcard = request('wantcard');
        $alltrads_clan = collect([]);
        $alltrads_card = collect([]);
        $alltrads_wantcard = collect([]);
        $alltrads = collect([]);


        if (($clan === "all") OR ($clan === null)) {
            if (auth()->user()->role->name === 'admin') 
            {
                $alltrads_clan = Trad::all();
            }
            else
            {
                $alltrads_clan = \App\Trad::whereHas('trader', function ($query) {
                    return $query->whereHas('clan', function($query_group){
                        return $query_group->where('group_id', auth()->user()->clan->group_id);
                    });
                })
                ->get();
            }
        } else {
            $traders = Trader::where('clan_id', $clan)->get();

            foreach ($traders as $trader)
            {
                $trads = Trad::where('trader_id', $trader->id)->get();
                if (! $trads->isEmpty()) {
                    $alltrads_clan = $alltrads_clan->merge($trads);
                }
            }
        }

        if (($searchcard === "all") OR ($searchcard === null)) {
            $alltrads_card = $alltrads_clan;
        } else {
            foreach ($alltrads_clan as $trad)
            {  
                if ("$trad->card_id" === $searchcard) {
                    $alltrads_card = $alltrads_card->push($trad);
                }
            }
        }

        if (($wantcard === "all") OR ($wantcard === null)) {
            $alltrads_wantcard = $alltrads_card;
        } else {
            foreach ($alltrads_card as $trad)
            {  
                foreach ($trad->cards as $card) {
                    if ("$card->id" === $wantcard) {
                        $alltrads_wantcard = $alltrads_wantcard->push($trad);
                    }
                }
            }
        }

        if (($name === "all") OR ($name === null)) {
            $alltrads = $alltrads_wantcard;
        } else {
            foreach ($alltrads_wantcard as $trad)
            {  
                if ("$trad->trader_id" === $name) {
                    $alltrads = $alltrads->push($trad);
                }
            }
        }

        return view('trads', [
            'trads' => $alltrads,
        ]);
    }


    public function updateAll()
    {
         \App\Trad::updateAll();
        
        return view('trads',[
            'trads' => \App\Trad::allTradsGroup(),
        ]);
    }

}
