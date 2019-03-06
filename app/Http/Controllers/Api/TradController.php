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

        return response()->json(['data' => $trads_android], 200, [], JSON_NUMERIC_CHECK);
    }

    public function recoverCards()
    {
        
        $cards = \App\Card::where('card_type_id', 1)->get();
        foreach ($cards as $card)
        {
            $cards_leg[] = [
                'id' => $card->id,
                'name' => $card->CardName,
                'type' => $card->card_type_id,
                'url' => $card->CardImagePath
            ];
        }
        $cards = \App\Card::where('card_type_id', 2)->get();
        foreach ($cards as $card)
        {
            $cards_epi[] = [
                'id' => $card->id,
                'name' => $card->CardName,
                'type' => $card->card_type_id,
                'url' => $card->CardImagePath
            ];
        }
        $cards = \App\Card::where('card_type_id', 3)->get();
        foreach ($cards as $card)
        {
            $cards_rar[] = [
                'id' => $card->id,
                'name' => $card->CardName,
                'type' => $card->card_type_id,
                'url' => $card->CardImagePath
            ];
        }
        $cards= \App\Card::where('card_type_id', 4)->get();
        foreach ($cards as $card)
        {
            $cards_com[] = [
                'id' => $card->id,
                'name' => $card->CardName,
                'type' => $card->card_type_id,
                'url' => $card->CardImagePath
            ];
        }

       $cards_android[] = [
           'cardLeg' => $cards_leg,
           'cardEpi' => $cards_epi,
           'cardRar' => $cards_rar,
           'cardCom' => $cards_com,
       ];

       return response()->json(['data' => $cards_android], 200, [], JSON_NUMERIC_CHECK);
    }

    public function deleteTrade($tradeId)
    {
        $trad = \App\Trad::find($tradeId);
        $trad->delete();

        return response()->json('Removed successfully.');
    }
}
