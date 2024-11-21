<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OriginalAuthController extends Controller
{
    //
    public function register(Request $request){
            $user = User::create([
                "name"=>$request->input("name"),
                "email"=>$request->input("email"),
                "password"=>Hash::make($request->input("password")),
            ]);
            
            $jwt = $user->createToken("token")->plainTextToken;
            $cookie = cookie("jwt",$jwt, 60 * 24);
            return response(["user"=>$user]);
    }
    
    public function login2(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);
    if (Auth::attempt($credentials)) {
    
        $request->session()->regenerate();
    
        return redirect('shoplisttop/');
    
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.'
    ]);
}
}
