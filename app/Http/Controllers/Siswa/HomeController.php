<?php

namespace App\Http\Controllers\Siswa;

use App\Siswa;
use App\User;
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
        $siswa = Siswa::find(Auth::user()->siswaAccount()->first()->siswa()->first()->id);
        $siswa->nama = $request->input('nama');
        $siswa->kelas_id = $request->input('kelas');
        $siswa->save();

        return redirect(route('siswa.show_edit_profile'));
    }

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
        } else {
            $user = User::where('username', $request->input('old_username'))->first();
            $user->username = $request->input('new_username');
            $user->save();

            return response()->json([
                'success' => true,
                'username_exists' => false,
                'route' => route('siswa.show_edit_profile'),
                'message' => 'berhasil edit username'
            ]);
        }
    }
}
