<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    use IssueTokenTrait;
    
    private $client;

    public function __construct(){
        $this->client = Client::find(2);
    }
    
    public function login(Request $request){

        $this->validate($request, [
            'nick' => 'required',
            'password' => 'required'
        ]);

        return $this->IssueToken($request, 'password');
    }

    public function refresh(Request $request){
       
        $this->validate($request, [
            'refresh_token' => 'required'
        ]);

        return $this->IssueToken($request, 'refresh_token');
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
