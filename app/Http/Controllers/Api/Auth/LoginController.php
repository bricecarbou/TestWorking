<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    private $client;

    public function __construct(){
        $this->client = Client::find(2);
    }
    
    public function login(Request $request){

        $this->validate($request, [
            'nick' => 'required',
            'password' => 'required'
        ]);

        $params = [
            'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'username' => request('nick'),
            'password' => request('password'),
            'scope' => '*'
        ];

  
        /*$result = auth()->attempt([
            'nick' => request('nick'),
            'password' => request('password'),
        ]);

        $user = auth()->user();

        $a= $user->createToken('toto');
        
        dd($a);*/
        
        $request->request->add($params);

        $proxy = Request::create('oauth/token', 'POST');


        return Route::dispatch($proxy);


    }

    public function refresh(Request $request){
       
        $this->validate($request, [
            'refresh_token' => 'required'
        ]);

        $params = [
            'grant_type' => 'refresh_token',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'username' => request('nick'),
            'password' => request('password'),
        ];

        $request->request->add($params);

        $proxy = Request::create('oauth/token', 'POST');

        return Route::dispatch($proxy);
    }

    public function logout(Request $request){

        $accessToken = auth()->user()->token();

        $refreshToken = DB::table('oauth_refresh_tokens')
            ->where('access_tokenid', $accessToken->id)
            ->update(['revoked' => true]);

        $accessToken->revoke();

        return response()->json([],204);
        
    }
}
