<?php

namespace App\Http\Controllers;

use App\User;
use App\Siswa;
use App\Guru;
use App\SiswaAccount;
use App\GuruAccount;
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

    public function resetPasswordSiswaByAdmin(Request $request)
    {
        $siswa = Siswa::where('nis', '=', $request->rpNisSiswa)->first();
        $siswaAccount = SiswaAccount::where('siswa_id', '=', $siswa->id)->first();
        $user = User::where('id', $siswaAccount->user_id)->first();
        if (isset($request->newPass)){
          $user->password = bcrypt($request->newPass);
        }
        if (isset($request->newUsername)){
          $user->username = $request->newUsername;
        }
        $user->remember_token = Crypt::encryptString('remember_this');
        $user->save();
        return redirect()->route('admin.show_data_siswa');
    }

    public function resetPasswordGuruByAdmin(Request $request)
    {
        $guru = Guru::where('nik', '=', $request->rpNikGuru)->first();
        $guruAccount = GuruAccount::where('guru_id', '=', $guru->id)->first();
        $user = User::where('id', $guruAccount->user_id)->first();
        if (isset($request->newPass)){
          $user->password = bcrypt($request->newPass);
        }
        if (isset($request->newUsername)){
          $user->username = $request->newUsername;
        }
        $user->remember_token = Crypt::encryptString('remember_this');
        $user->save();
        return redirect()->route('admin.show_data_guru');
    }
}
