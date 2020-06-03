<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            if($user->role->name == "market_admin"){
                $success['user'] = $user;
                $success['token'] = $user->createToken('local_market_token')->accessToken;
                $success['user']['text'] = "Welcome back ".$user->name."!";
                return response()->json($success,200);
            }else{
                Auth::logout();
                return response()->json(['error'=>'Invalid User'], 401);
            }
        }else{
            return response()->json(['error'=>'Invalid User'], 401);
        }
    }
}
