<?php

use App\Guru;
use App\GuruAccount;
use App\User;
use Illuminate\Database\Seeder;

class GuruAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('id',5);
        $guru = Guru::where('id',2);

        $guruAccount = new GuruAccount();
        $guruAccount->user()->associate($user);
        $guruAccount->guru()->associate($guru);
        $guruAccount->save();
    }
}
