<?php

namespace App\Http\ViewComposers;

use App\Kelas;
use App\Siswa;
use App\SiswaAccount;
use App\User;
use Illuminate\View\View;

class SiswaHomeComposer
{
    protected $siswa;
    protected $kelas;
    protected $username;

    public function __construct()
    {
        $user = User::where('id', auth()->user()["id"])->first();
        $siswaAccount = $user->siswaAccount()->first();
        $this->siswa = $siswaAccount->siswa()->first();
        $this->kelas = Kelas::all();
        $this->username = $user->username;
    }

    public function compose(View $view)
    {
        $view->with([
            'siswa' => $this->siswa,
            'kelas' => $this->kelas,
            'username' => $this->username
        ]);
    }
}