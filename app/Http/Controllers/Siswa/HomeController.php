<?php

namespace App\Http\Controllers\Siswa;

use App\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view('pages.siswa.home');
    }

    public function showEditProfile()
    {
        return view('pages.siswa.edit_profile');
    }

    public function editProfile(Request $request)
    {
        $guru = Siswa::find(Auth::user()->siswaAccount()->first()->siswa()->first()->id);
        $guru->nama = $request->input('nama');
        $guru->nis = $request->input('nis');
        $guru->save();

        return redirect(route('siswa.show_edit_profile'));
    }
}
