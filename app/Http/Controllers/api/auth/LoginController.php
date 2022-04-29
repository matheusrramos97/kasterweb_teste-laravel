<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\api\AuthRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(!auth()->attempt($credentials)){
            return response()->json([
                'error' => 'credenciaisals do not match our records.'
            ], 400);
        }

        $token = auth()->user()->createToken('authToken')->plainTextToken;
        // $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'user' => auth()->user(),
            'token' => $token
        ]);
    }

    public function register(AuthRequest $request){
        $credentials = $request->only('name', 'email', 'password');

        return User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
        ]);
    }
}
