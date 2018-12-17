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
          

          $trad->card_id =  request('btn_cardwant');
          $trad->cards()->sync('btn_cardtrad[]');
 /*         if (!empty($_POST['btn_cardtrad'])) {
              // Loop to store and display values of individual checked checkbox.
              foreach ($_POST['btn_cardtrad'] as $selected) {
                $trad->cards()->trad_id = $trad->id;

              }
          }
          */
          $trad->save();



        flash("The new Trad is created.")->success();
        return  back();
    }

    public function mytrads()
    {
        return view('my-trads');
    }
}
