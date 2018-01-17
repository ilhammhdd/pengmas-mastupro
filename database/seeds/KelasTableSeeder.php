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
            'nama'=>'TKJ 1'
        ]);
        DB::table('kelas')->insert([
            'nama'=>'TKJ 2'
        ]);
        DB::table('kelas')->insert([
            'nama'=>'TSM 1'
        ]);
        DB::table('kelas')->insert([
            'nama'=>'TSM 2'
        ]);
        DB::table('kelas')->insert([
            'nama'=>'AK 1'
        ]);
        DB::table('kelas')->insert([
            'nama'=>'AK 2'
        ]);
    }
}
