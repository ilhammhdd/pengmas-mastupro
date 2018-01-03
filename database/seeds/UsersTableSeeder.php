<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['role_id' => 1, 'email' => 'admin@admin.com', 'username' => 'admin', 'password' => Hash::make('pajakmedanjaya'), 'api_token' => \App\APITokenGenerator::generate()],
            ['role_id' => 2, 'email' => 'milham939@gmail.com', 'username' => 'ilhammhdd', 'password' => Hash::make('asd'), 'api_token' => \App\APITokenGenerator::generate()],
            ['role_id' => 3, 'email' => 'robert@gmail.com', 'username' => 'robert', 'password' => Hash::make('asd'), 'api_token' => \App\APITokenGenerator::generate()]
        ]);
    }
}
