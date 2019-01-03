<?php

namespace App\Http\Controllers;

use App\Trad;
use App\Trader;
use Illuminate\Database\Eloquent\Builder;

class TradController extends Controller
{

    public function newtrad()
    {

        $cards = \App\Card::all();
        $cardsTrader = \App\Trader::RecoverTraderCards(auth()->user()->cr_key);
        $cardsToTrade = array();

        foreach($cardsTrader as $cardTrader)
        {
            if( ($cardTrader[3] === "Common") AND (($cardTrader[2] >= '250') OR ($cardTrader[4] > '12')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
            }
            if( ($cardTrader[3] === "Rare") AND (($cardTrader[2] >= '50') OR ($cardTrader[4] > '12')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
            }
            if( ($cardTrader[3] === "Epic") AND (($cardTrader[2] >= '10' )OR ($cardTrader[4] > '12')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
            }
            if( ($cardTrader[3] === "Legendary") AND (!($cardTrader[2] === false)) AND (((($cardTrader[2] >= '1') AND ($cardTrader[4] > '9')) OR ($cardTrader[2] >= '2') AND ($cardTrader[4] > '8')) OR ($cardTrader[4] > '12')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
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
            auth()->user(),
            \App\Card::find($traddest->card_id)->CardName,
            $trad->card->CardName
        );

        return back();
    }

    public function delete(\App\Trad $trad)
    {
		$trad->delete();

        return back();
    }

    public function allTrads()
    {
        $clan = request('clan');
        $searchcard = request('searchcard');
        $alltrads_loc = collect([]);
        $alltrads = collect([]);

        if (($clan === "all") OR ($clan === null)) {
            $alltrads_loc = Trad::all();
        } else {
            $traders = Trader::where('clan', $clan)->get();

            foreach ($traders as $trader)
            {
                $trads = Trad::where('trader_id', $trader->id)->get();
                if (! $trads->isEmpty()) {
                    $alltrads_loc = $alltrads_loc->merge($trads);
                }
            }
        }
        dump("here1");

        if (($searchcard === "all") OR ($searchcard === null)) {
            $alltrads = $alltrads_loc;
        } else {
            foreach ($alltrads_loc as $trad)
            {  
                dump("here2 $trad->card_id   $searchcard ");
                if ($trad->card_id === $searchcard) {
                    dump("here3");
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
            'trads' => \App\Trad::all(),
        ]);
    }

}
