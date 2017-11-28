<?php

use App\HealthCare;
use App\HealthCareType;
use Illuminate\Database\Seeder;

class HealthCaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $healthCareTypeRSA = HealthCareType::where('nama','RSA')->first();
        $healthCareTypeRSB = HealthCareType::where('nama','RSB')->first();
        $healthCareTypeRSC = HealthCareType::where('nama','RSC')->first();
        $healthCareTypeRSD = HealthCareType::where('nama','RSD')->first();
        $healthCareTypeKlinik = HealthCareType::where('nama','klinik')->first();

        $healthCarePindad = new HealthCare();
        $healthCarePindad->nama = 'RS. Pindad';
        $healthCarePindad->alamat = 'Jln.Disebelah Sana No.001 Bandung Jawa Barat Indonesia';
        $healthCarePindad->email = 'pindad@gmail.com';
        $healthCarePindad->no_telp = '0215545221';
        $healthCarePindad->deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in orci nec justo posuere mollis non vel orci. Proin fermentum cursus odio non lacinia. Integer in suscipit justo, quis dictum elit. Suspendisse placerat ornare erat, ac iaculis nibh pretium eu. Proin bibendum felis eget nisi sollicitudin, at consequat libero semper. Vestibulum eget tortor a enim fermentum gravida. Vestibulum nec accumsan neque. Nullam quis dignissim dolor, nec commodo mauris. Sed elementum, diam eu aliquet ultricies, leo nisl pellentesque quam, vel mattis nisi justo a nunc. Nulla vel urna nisi.';
        $healthCarePindad->healthCareType()->associate($healthCareTypeRSC);
        $healthCarePindad->save();
    }
}
