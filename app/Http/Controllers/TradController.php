<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradController extends Controller
{
    public function newtrad()
    {
        $cards = \App\card::all();
        return view('new-trad', [
            'cards' => $cards,
        ]);
    }

    public function createnewtrad()
    {
        request()->validate([
            'btn_cardwant'=>['required'],
            'btn_cardtrad'=>['required']
          ]);


          $trad = new \App\Trad;
          $cardtofind = new \App\CardsToFind;
          $cardtotradeCard = new \App\CardsTotrade;

          $cardtofind->Card_id =  request('btn_cardwant');
          $cardtotrade->CardToTradeCard() = request('btn_cardtrad');
          $trad->nick = auth()->user()->nick;

          $trad->save();



        flash("The new Trad is created.")->success();
        return  back();
    }

    public function mytrads()
    {
        return view('my-trads');
    }
}
