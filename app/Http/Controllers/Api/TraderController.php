<?php

namespace App\Http\Controllers;

use App\Trader;

class TraderController extends Controller
{
    public function myInfos()
    {

        $trader = auth()->user()->get();

        $myInfos[] = [
            'nick' => $trader->nick,
            'role' => $trader->role_id,
            'cr_id' => $trader->cr_key,
            'discord_id' => $trader->discord_id,
            'email' => $trader->email
        ];


        return response()->json(['data' => $myInfos], 200, [], JSON_NUMERIC_CHECK);
    }
}
