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
            'kelas_id' => '1'
        ]);
        DB::table('siswas')->insert([
            'nis' => '221877657',
            'nama' => 'Martin',
            'nama_file' => 'dummy3.jpg',
            'kelas_id' => '2'
        ]);
        DB::table('siswas')->insert([
            'nis' => '221980888',
            'nama' => 'James',
            'nama_file' => 'dummy2.jpg',
            'kelas_id' => '1'
        ]);
    }
}
