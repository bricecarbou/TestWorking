<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TradController extends Controller
{

    public function myTrades()
    {
        $trads = auth()->user()->Trads()->get();

        $trads_android = [];
        $cardsToDo = [];
        $traders = [];

        foreach ($trads as $trad)
        {
            foreach ($trad->cards as $card)
            {
                $cardsToDo[] = $card->CardImagePath;
            }
           
            foreach($trad->getMatchTrads() as $traddest)
            {
                $traders[] = [
                    'trader_id' => $traddest->trader_id,
                    'nick' => \App\Trader::find($traddest->trader_id)->nick,
                    'clan' => \App\Trader::find($traddest->trader_id)->clan->name
                ];
            }

            $trads_android[] = [
                'trad_id' => $trad->id,
                'card_to_search_url' => $trad->card->CardImagePath,
                'cards_to_do_url' => $cardsToDo,
                'traders' => $traders
            ];

            $cardsToDo = [];
            $traders = [];

        } 

        //dd($trads);
        return response()->json(['data' => $trads_android], 200, [], JSON_NUMERIC_CHECK);
    }

    public function createTrade()
    {
       $trads = auth()->user()->Trads()->get();

       //dd($trads);
       return response()->json(['data' => $trads], 200, [], JSON_NUMERIC_CHECK);
    }

    public function deleteTrade($tradeId)
    {
        $trad = \App\Trad::find($tradeId);
        $answer = $trad->delete();

        return response()->json(['data' => $answer], 200, [], JSON_NUMERIC_CHECK);
    }
}
