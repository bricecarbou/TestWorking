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
            'discord_id' => (string) ($trader->discord_id),
            'email' => $trader->email
        ];


        return response()->json(['data' => $myInfos], 200, [], JSON_NUMERIC_CHECK);
    }
}
