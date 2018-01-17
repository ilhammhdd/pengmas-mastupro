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
            'nik'=>'444001',
            'nama'=>'GURU 01',
            'nama_file'=>'dummy5.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'444002',
            'nama'=>'GURU 02',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'444003',
            'nama'=>'GURU 03',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'444004',
            'nama'=>'GURU 04',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'444005',
            'nama'=>'GURU 05',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);

        DB::table('gurus')->insert([
            'nik'=>'444006',
            'nama'=>'GURU 06',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'444007',
            'nama'=>'GURU 07',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'444008',
            'nama'=>'GURU 08',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'444009',
            'nama'=>'GURU 09',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('gurus')->insert([
            'nik'=>'444010',
            'nama'=>'GURU 10',
            'nama_file'=>'dummy6.jpg',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
    }
}
