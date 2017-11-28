<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function showJoinUs(){
        return view('auth.register');
    }

    public function showSignIn(){
        return view('auth.login');
    }
}
