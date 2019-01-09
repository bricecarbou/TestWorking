<?php

namespace App\Http\Controllers;

use App\Trader;

class TradersController extends Controller
{
    public function liste()
    {

        $clan_id = request('clan_id');
        $alltraders_clan = collect([]);

        if (($clan_id === "all") OR ($clan_id === null)) {
            if (auth()->user()->role->name === 'admin') 
            {
                $alltraders_clan = Trader::all();
            }
            else
            {
                $alltraders_clan = \App\Trader::whereHas('clan', function ($query) {
                    return $query->where('group_id', auth()->user()->clan->group_id);
                })
                ->get();
            }
        } else {
            $traders = Trader::where('clan_id', $clan_id)->get();

            foreach ($traders as $trader)
            {
                $alltraders_clan = $alltraders_clan->push($trader);
            }
        }

        return view('traders', [
            'traders' => $alltraders_clan,
        ]);
    }
}
