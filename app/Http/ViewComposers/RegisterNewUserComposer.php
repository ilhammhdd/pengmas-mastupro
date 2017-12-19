<?php

namespace App\Http\ViewComposers;

use App\Guru;
use App\Siswa;
use Illuminate\View\View;

class RegisterNewUserComposer
{
    protected $siswas;
    protected $gurus;

    public function __construct()
    {
        $this->siswas = Siswa::doesntHave('siswaAccount')->get();
        $this->gurus = Guru::doesntHave('guruAccount')->get();
    }

    public function compose(View $view)
    {
        $view->with([
            'siswas' => $this->siswas,
            'gurus' => $this->gurus
        ]);
    }
}