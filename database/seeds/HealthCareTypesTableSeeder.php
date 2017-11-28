<?php

use App\HealthCareType;
use Illuminate\Database\Seeder;

class HealthCareTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $healthCareType = new HealthCareType();
        $healthCareType->nama = 'RSA';
        $healthCareType->save();

        $healthCareType = new HealthCareType();
        $healthCareType->nama = 'RSB';
        $healthCareType->save();

        $healthCareType = new HealthCareType();
        $healthCareType->nama = 'RSC';
        $healthCareType->save();

        $healthCareType = new HealthCareType();
        $healthCareType->nama = 'RSD';
        $healthCareType->save();

        $healthCareType = new HealthCareType();
        $healthCareType->nama = 'klinik';
        $healthCareType->save();
    }
}
