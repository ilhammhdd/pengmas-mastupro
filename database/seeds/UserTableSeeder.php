<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('nama', 'admin')->first();
        $role_guru = Role::where('nama', 'guru')->first();
        $role_siswa = Role::where('nama', 'siswa')->first();

        $admin = new User();
        $admin->username = 'admin';
        $admin->password = bcrypt('pengmas2k17jaya');
        $admin->remember_token = Crypt::encryptString('remember_this');
        $admin->save();
        $admin->role()->attach($role_admin);

        $guru1 = new User();
        $guru1->username = 'guru1';
        $guru1->password = bcrypt('password');
        $guru1->remember_token = Crypt::encryptString('remember_this');
        $guru1->save();
        $guru1->role()->attach($role_guru);

        $siswa1 = new User();
        $siswa1->username = 'siswa1';
        $siswa1->password = bcrypt('password');
        $siswa1->remember_token = Crypt::encryptString('remember_this');
        $siswa1->save();
        $siswa1->role()->attach($role_siswa);
    }
}
