<?php

namespace App\Http\Controllers;

use App\Trader;

class TradersController extends Controller
{
    public function liste()
    {
        $traders = \App\Trader::all();

        return view('traders', [
            'traders' => $traders,
        ]);
    }

}
