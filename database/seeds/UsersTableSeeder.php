<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('nama', 'admin')->get(['id']);
        $roleHealthCare = Role::where('nama', 'healthcare')->get(['id']);
        $rolePatient = Role::where('nama', 'patient')->get(['id']);

        $admin = new User();
        $admin->email = 'admin@admin.com';
        $admin->username = 'admin';
        $admin->password = bcrypt('gaspolremblong');
        $admin->save();
        $admin->role()->attach($roleAdmin);
        $admin->role()->attach($roleHealthCare);
        $admin->role()->attach($rolePatient);

        $patient = new User();
        $patient->email = 'patient@patient.com';
        $patient->username = 'martin';
        $patient->password = bcrypt('password');
        $patient->save();
        $patient->role()->attach($rolePatient);

        $healthCare = new User();
        $healthCare->email = 'healthCare@healthCare.com';
        $healthCare->username = 'pindad';
        $healthCare->password = bcrypt('password');
        $healthCare->save();
        $healthCare->role()->attach($roleHealthCare);
    }
}
