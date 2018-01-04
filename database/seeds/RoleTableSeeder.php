<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'nama' => 'admin'
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'nama' => 'guru'
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'nama' => 'siswa'
        ]);
    }
}
