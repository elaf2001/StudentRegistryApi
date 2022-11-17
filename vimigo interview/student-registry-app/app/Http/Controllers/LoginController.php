<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{
    public function login(Request $request){
        // validate request 
        $login = $request->validate([
            'email' => 'required|string', 
            'password' => 'required|string'
        ]); 

        if( !Auth::attempt($login)){
            return Response::json(['message' => 'Invalid login credentials']);
        }

        $accessToken = Auth::user()->createToken['authToken']->accessToken;
        return Response::json(['user' => Auth::user(), 'access_token' => $accessToken]); 
    }
}
