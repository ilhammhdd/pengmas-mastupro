<?php

namespace App\Http\Controllers\Guru;

use App\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.guru.home');
    }

    public function showEditProfile()
    {
        return view('pages.guru.edit_profile');
    }

    public function editProfile(Request $request)
    {
        $guru = Guru::find(Auth::user()->guruAccount()->first()->guru()->first()->id);
        $guru->nama = $request->input('nama');
        $guru->nik = $request->input('nik');
        $guru->save();

        return redirect(route('guru.show_edit_profile'));
    }
}
