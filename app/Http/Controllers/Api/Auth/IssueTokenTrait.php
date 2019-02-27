<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Route;

trait IssueTokenTrait{

    function IssueToken(Request $request, $grantType, $scope ="*"){

        $client = Client::find(2);
        
        $params = [
            'grant_type' => $grantType,
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'username' => $request->username ?: $request->nick,
            'scope' => $scope
        ];
     

        $request->request->add($params);

        $proxy = Request::create('oauth/token', 'POST');

        return Route::dispatch($proxy);
    }
}