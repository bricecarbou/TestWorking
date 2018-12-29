<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradController extends Controller
{
    public function newtrad()
    {

        $cards = \App\Card::all();
        $cardsTrader = \App\Trader::RecoverTraderCards(auth()->user()->cr_key);
        $cardTrader = array();
 
        foreach($cardsTrader as $cardTrader)
        {
            if( ($cardTrader[3] === "Common") AND (($cardTrader[2] >= '250') OR ($cardTrader[4] > '12')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
            }
            if( ($cardTrader[3] === "Rare") AND (($cardTrader[2] >= '50') OR ($cardTrader[4] > '10')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
            }
            if( ($cardTrader[3] === "Epic") AND (($cardTrader[2] >= '10' )OR ($cardTrader[4] > '7')))
            {
                $cardsToTrade[] = \App\Card::find($cardTrader[0]);
            }
            if( ($cardTrader[3] === "Legendary") AND (((($cardTrader[2] >= '1') AND ($cardTrader[4] > '1')) OR ($cardTrader[2] >= '2') AND ($cardTrader[4] > '0')) OR ($cardTrader[4] > '4')))
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
        /*$trads = \App\Trad::all();

        foreach ($trads as $trad) 
        {
            dump($trad);
            dump(\App\Trader::find($trad->trader_id)->nick);
        }
        */
        $trads_tayeb = \App\Trad::where('trader_id', '43')->get();
        foreach ($trads_tayeb as $trad) 
        {
            dump($trad->trader_id);
            $trad->delete();
        }       

        
        /*return view('trads',[
            'trads' => \App\Trad::all(),
        ]);*/
    }

    public function updateAll()
    {
         \App\Trad::updateAll();
        
        return view('trads',[
            'trads' => \App\Trad::all(),
        ]);
    }

}
