<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nis' => '221980212',
            'nama' => 'Saul',
            'nama_file' => 'dummy1.jpg',
            'kelas_id' => '1',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('siswas')->insert([
            'nis' => '221877657',
            'nama' => 'Martin',
            'nama_file' => 'dummy3.jpg',
            'kelas_id' => '2',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
        DB::table('siswas')->insert([
            'nis' => '221980888',
            'nama' => 'James',
            'nama_file' => 'dummy2.jpg',
            'kelas_id' => '1',
            'created_at' => '2017-12-29 09:14:30',
            'updated_at' => '2017-12-29 09:14:30'
        ]);
    }
}
