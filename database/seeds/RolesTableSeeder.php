<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = new Role();
        $roleAdmin->nama = 'admin';
        $roleAdmin->save();

        $roleHealthCare = new Role();
        $roleHealthCare->nama = 'healthcare';
        $roleHealthCare->save();

        $rolePatient = new Role();
        $rolePatient->nama = 'patient';
        $rolePatient->save();
    }
}
