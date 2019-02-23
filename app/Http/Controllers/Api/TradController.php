<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TradController extends Controller
{

    public function mytrads()
    {
        $trads = auth()->user()->Trads()->get();

        //dd($trads);

        return response()->json(['data' => $trads], 200, [], JSON_NUMERIC_CHECK);
    }
}
