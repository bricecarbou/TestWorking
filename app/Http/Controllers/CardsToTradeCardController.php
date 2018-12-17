<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardsToTradeCardController extends Controller
{
    public function new()
    {
      $CardToTrade = CardsToTrade.request(id);
      $Card = $card_id;

      $CardToTrade->CardTrad()->attach($Card)

      return back();
    }
}
