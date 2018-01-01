<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('role');
    }

    public function index(){
        return view('pages.admin.home');
    }

    public function getRegisterNewUser(){
        return view('pages.admin.register_new_user');
    }

    public function registerNewUserSiswa(Request $request){
        User::registerNewUserSiswa($request);
    }

    public function unRegisterUserSiswa(Request $request){
        User::unRegisterUserSiswa($request);
    }

    public function registerNewUserGuru(Request $request){
        User::registerNewUserGuru($request);
    }

    public function unRegisterUserGuru(Request $request){
        User::unRegisterUserGuru($request);
    }
}
