<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'nik'=>'110222325',
            'nama'=>'Graham',
            'nama_file'=>'dummy5.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'110897799',
            'nama_file'=>'dummy6.jpg',
            'nama'=>'Julius',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'110897791',
            'nama_file'=>'dummy7.jpg',
            'nama'=>'Alex',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
    }
}
