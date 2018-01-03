<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->json("data")["username"];
        $password = $request->json("data")["password"];

        $user = User::where('username', $username)->first();

        if ($user == null) {
            return response()->json([
                'authenticated' => false,
                'message' => 'User with this username doesn\'t exists'
            ]);
        } else {
            if (Hash::check($password, $user->password)) {
                return response()->json([
                    'authenticated' => true,
                    'api_token' => $user->api_token,
                    'message' => 'User Authenticated'
                ]);
            } else if (!Hash::check($password, $user->password)) {
                return response()->json([
                    'authenticated' => false,
                    'api_token' => $user->api_token,
                    'message' => 'Password incorrect'
                ]);
            }
        }
    }
}