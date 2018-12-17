<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardsToFindCardController extends Controller
{
  public function new()
  {
    $CardToFind = CardsToFind.request(id);
    $Card = $card_id;

    $CardToFind->CardTrad()->attach($Card)

    return back();
  }
}
