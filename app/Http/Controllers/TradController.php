<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradController extends Controller
{
    public function newtrad()
    {
        return view('new-trad');
    }

    public function createnewtrad()
    {
        flash("The new Trad is created.")->success();
    
       
        return  back();
    }
 
    public function mytrads()
    {
        return view('my-trads');
    }
}