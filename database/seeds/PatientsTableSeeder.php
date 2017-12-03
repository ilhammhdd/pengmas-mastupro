<?php

use App\Patient;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $martin = new Patient();
        $martin->nama = 'James Martin Buchanan Jr.';
        $martin->alamat = 'Jln.Jalan Keliling Kota no.002 Bandung Jawa Barat';
        $martin->email = 'martin@gmail.com';
        $martin->no_telp = '082177671168';
        $martin->jenis_kelamin = 'laki-laki';
        $martin->golongan_darah = 'A';
        $martin->save();
    }
}
