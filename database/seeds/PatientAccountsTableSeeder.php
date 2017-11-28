<?php

use App\Patient;
use App\PatientAccount;
use App\User;
use Illuminate\Database\Seeder;

class PatientAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $martinUser = User::where('username', 'martin')->first();
        $martinPatient = Patient::where('nama', 'James Martin Buchanan Jr.')->first();

        $martinAccount = new PatientAccount();
        $martinAccount->user()->associate($martinUser);
        $martinAccount->patient()->associate($martinPatient);
        $martinAccount->save();
    }
}
