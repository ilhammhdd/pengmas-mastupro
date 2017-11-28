<?php

use App\HealthCare;
use App\HealthCareAccount;
use App\User;
use Illuminate\Database\Seeder;

class HealthCareAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pindadUser = User::where('username', 'pindad')->first();
        $pindadHealthCare = HealthCare::where('nama', 'RS. Pindad')->first();

        $pindadAccount = new HealthCareAccount();
        $pindadAccount->user()->associate($pindadUser);
        $pindadAccount->healthCare()->associate($pindadHealthCare);
        $pindadAccount->save();
    }
}
