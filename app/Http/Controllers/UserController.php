<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function editUsername(Request $request)
    {
        $checkUsername = User::where('username', $request->input('new_username'))->first();
        if ($checkUsername) {
            session()->put('message', 'username sudah digunakan');

            return response()->json([
                'success' => true,
                'username_exists' => true,
                'message' => 'username sudah digunakan'
            ]);
        }

        $user = User::where('username', $request->input('old_username'))->first();
        $user->username = $request->input('new_username');
        $user->save();

        return response()->json([
            'success' => true,
            'username_exists' => false,
            'message' => 'berhasil edit username'
        ]);

    }

    public function editPassword(Request $request)
    {
        if (!Hash::check($request->input('old_password'), Auth::user()->password)) {
            return response()->json([
                'success' => true,
                'old_password_verified' => false,
                'message' => 'password lama salah'
            ]);
        }

        $user = Auth::user();
        $user->password = bcrypt($request->input('new_password'));
        $user->save();

        return response()->json([
            'success' => true,
            'old_password_verified' => true,
            'message' => 'berhasil edit password'
        ]);
    }
}
