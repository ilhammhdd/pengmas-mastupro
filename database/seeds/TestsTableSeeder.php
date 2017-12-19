<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            'nama' => 'DiSC',
            'status' => true,
            'enrollment_key' => 'testaja'
        ]);
        DB::table('tests')->insert([
            'nama' => 'MBTI',
            'status' => false,
            'enrollment_key' => 'testaja'
        ]);
    }
}
