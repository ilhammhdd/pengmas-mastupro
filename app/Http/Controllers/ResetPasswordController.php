<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ResetPasswordController extends Controller
{
    public function editPassword(Request $request)
    {
        $user = User::where('id', auth()->user()["id"])->first();
        $user->password = bcrypt($request->input('new_password'));
        $user->remember_token = Crypt::encryptString('remember_this');
        $user->save();
    }
}
