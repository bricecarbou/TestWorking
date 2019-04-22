<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraderController extends Controller
{
    public function myInfos()
    {

        $trader = auth()->user();

        $myInfos = [];

        $myInfos[] = [
            'nick' => $trader->nick,
            'role' => $trader->role_id,
            'cr_id' => $trader->cr_key,
            'discord_id' => $trader->discord_id,
            'email' => $trader->email
        ];


        return response()->json(['data' => $myInfos], 200, [], JSON_NUMERIC_CHECK);
    }

    public function modifyAccount(Request $request)
    {

        $trader = auth()->user();

        $cr_key = request('cr_key');

        if (substr($cr_key, 0 , 1) == "#")
        {
            $trader->cr_key = substr($cr_key, 1);
        }
        else
        {
          $trader->cr_key = $cr_key;
        }

        $trader->email = request('email');
        $trader->discord_id = request('discord_id');

        $trader->save();
    }
}
