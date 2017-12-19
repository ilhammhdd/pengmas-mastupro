<?php

use App\Siswa;
use App\SiswaAccount;
use App\User;
use Illuminate\Database\Seeder;

class SiswaAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = Siswa::where('id',1);
        $user = User::where('id',4);

        $siswaAccount = new SiswaAccount();
        $siswaAccount->siswa()->associate($siswa);
        $siswaAccount->user()->associate($user);
        $siswaAccount->save();
    }
}
