<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function showJoinUsForm(){
        return view('auth.register');
    }

    public function showSignInForm(){
        return view('auth.login');
    }
}
