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

    public function __construct()
    {
        $user = User::where('id', auth()->user()["id"])->first();
        $siswaAccount = $user->siswaAccount()->first();
        $this->siswa = $siswaAccount->siswa()->first();
        $this->kelas = Kelas::all();
    }

    public function compose(View $view)
    {
        $view->with([
            'siswa' => $this->siswa,
            'kelas' => $this->kelas
        ]);
    }
}