<?php

namespace App\Http\Controllers\HealthCare;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('pages.healthcare.home');
    }

    public function registerNewPatient(Request $request){

    }

    public function showRegisterNewPatient(){
        return view('pages.healthcare.register_new_patient');
    }
}
