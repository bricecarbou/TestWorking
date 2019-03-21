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

        //$concat_cards = array_merge($cards_leg,  $cards_epi,  $cards_rar,  $cards_com);

        $cards_android[] =  [ 'cards' => $cards_leg];
        $cards_android[] =  [ 'cards' => $cards_epi];
        $cards_android[] =  [ 'cards' => $cards_rar];
        $cards_android[] =  [ 'cards' => $cards_com];

        return response()->json(['data' => $cards_android], 200, [], JSON_NUMERIC_CHECK);
    }

    public function recoverCardsToTrade($cardId)
    {
 
        $cardsTrader = \App\Trader::RecoverTraderCards(auth()->user()->cr_key);
       
        $cardToTrade = \App\Card::find($cardId);
        $type = \App\CardType::find($cardToTrade->card_type_id);

        // lister les cartes à echanger


        foreach($cardsTrader as $cardTrader)
        { 
            // Common
            if( ($cardTrader[3] === "Common") AND ($type->name === "Common") AND (($cardTrader[2] >= '250') OR ($cardTrader[4] > '12')))
            {

                $card = \App\Card::find($cardTrader[0]);

                $cards_totrade[] = [
                    'id' => $card->id,
                    'name' => $card->CardName,
                    'type' => $card->card_type_id,
                    'url' => $card->CardImagePath
                ];

                /*if ($cardTrader[4] > '12')
                {
                    end($cardsToTrade)->CardName = "max";
                }
                else
                {
                    end($cardsToTrade)->CardName = $cardTrader[2] . "/" . $cardTrader[5];
                }*/
            }
           // Rare
            elseif( ($cardTrader[3] === "Rare") AND ($type->name === "Rare") AND (($cardTrader[2] >= '50') OR ($cardTrader[4] > '10')))
            {
                $card = \App\Card::find($cardTrader[0]);

                $cards_totrade[] = [
                    'id' => $card->id,
                    'name' => $card->CardName,
                    'type' => $card->card_type_id,
                    'url' => $card->CardImagePath
                ];

                /*if ($cardTrader[4] > '10')
                {
                    end($cardsToTrade)->CardName = "max";
                }
                else
                {
                    end($cardsToTrade)->CardName = $cardTrader[2] . "/" . $cardTrader[5];
                }*/
            }
            // Epic
            elseif( ($cardTrader[3] === "Epic") AND ($type->name === "Epic") AND (($cardTrader[2] >= '10' )OR ($cardTrader[4] > '7')))
            {
                $card = \App\Card::find($cardTrader[0]);

                $cards_totrade[] = [
                    'id' => $card->id,
                    'name' => $card->CardName,
                    'type' => $card->card_type_id,
                    'url' => $card->CardImagePath
                ];
                /*if ($cardTrader[4] > '7')
                {
                    end($cardsToTrade)->CardName = "max";
                }
                else
                {
                    end($cardsToTrade)->CardName = $cardTrader[2] . "/" . $cardTrader[5];
                }*/
            }
            // Legendary
            elseif( ($cardTrader[3] === "Legendary") AND ($type->name === "Legendary") AND ((($cardTrader[2] >= '1') AND ($cardTrader[4] > '1')) OR (($cardTrader[2] >= '2') AND ($cardTrader[4] > '0')) OR ($cardTrader[4] > '4')))
            {
                $card = \App\Card::find($cardTrader[0]);
                $cards_totrade[] = [
                    'id' => $card->id,
                    'name' => $card->CardName,
                    'type' => $card->card_type_id,
                    'url' => $card->CardImagePath
                ];

                /*if ($cardTrader[4] > '4')
                {
                    end($cardsToTrade)->CardName = "max";
                }
                else
                {
                    end($cardsToTrade)->CardName = $cardTrader[2] . "/" . $cardTrader[5];
                }*/
            } 
        }

        //$concat_cards = array_merge($cards_leg,  $cards_epi,  $cards_rar,  $cards_com);

        $cards_android[] =  [ 'cards' => $cards_totrade];

        return response()->json(['data' => $cards_android], 200, [], JSON_NUMERIC_CHECK);
    }

    public function deleteTrade($tradeId)
    {
        $trad = \App\Trad::find($tradeId);
        $trad->delete();

        return response()->json('Removed successfully.');
    }
}
