<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama'=>'SI3901'
        ]);
        DB::table('kelas')->insert([
            'nama'=>'SI3810'
        ]);
        DB::table('kelas')->insert([
            'nama'=>'SI39INT'
        ]);
    }
}
