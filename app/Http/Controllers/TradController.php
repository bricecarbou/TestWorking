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
          

          $trad->card_id = request('btn_cardwant');
          $trad->trader_id = auth()->user()->id;
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
}
