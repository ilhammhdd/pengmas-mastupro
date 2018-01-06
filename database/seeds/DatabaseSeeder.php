<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PointsTableSeeder::class);
        $this->call(Graph1DictionariesTableSeeder::class);
        $this->call(Graph2DictionariesTableSeeder::class);
        $this->call(Graph3DictionariesTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(SiswaTableSeeder::class);
        $this->call(GuruTableSeeder::class);
        $this->call(DiscGroupsTableSeeder::class);
        $this->call(DiscSoalsTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(ExplanationsTableSeeder::class);
    }
}
