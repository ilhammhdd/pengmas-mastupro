<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 24; $i++) {
            DB::table('disc_groups')->insert([
                'nomor' => $i
            ]);
        }
    }
}
