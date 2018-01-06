<?php

namespace App\Http\Controllers\Siswa;

use App\Siswa;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $siswa = Siswa::find(Auth::user()->siswaAccount()->first()->siswa()->first()->id);
        $siswa->nama = $request->input('nama');
        $siswa->kelas_id = $request->input('kelas');
        $siswa->save();

//        return redirect(route('siswa.show_edit_profile'));
        return response()->json([
            'success' => true,
            'route' => route('siswa.show_edit_profile'),
            'message' => 'berhasil edit profile'
        ]);
    }
}
