<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
        return view('pages.siswa.test');
    }

    public function showHistory(){
        return view('pages.siswa.test_history');
    }
}
