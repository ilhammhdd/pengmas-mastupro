<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            'nama' => 'X'
        ]);
        DB::table('points')->insert([
            'nama' => 'Y'
        ]);
        DB::table('points')->insert([
            'nama' => 'Z'
        ]);
        DB::table('points')->insert([
            'nama' => 'R'
        ]);
        DB::table('points')->insert([
            'nama' => "+-"
        ]);
    }
}
