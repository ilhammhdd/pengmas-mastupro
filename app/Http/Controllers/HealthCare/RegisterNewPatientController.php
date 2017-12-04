<?php

namespace App\Http\Controllers\HealthCare;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterNewPatientController extends Controller
{
    public function registerNewPatient(Request $request){
        $newPatient = new Patient();
        $newPatient->nama = $request->full_name;
        $newPatient->alamat = $request->address;
        $newPatient->email = $request->email;
        $newPatient->no_telp = $request->phone_number;
        $newPatient->jenis_kelamin = $request->gender;
        $newPatient->golongan_darah = $request->radio_gol_dar;
        $newPatient->tanggal_lahir = $request->date_of_birth;
        $newPatient->tempat_lahir = $request->place_of_birth;
        $newPatient->save();
    }

    public function showRegisterNewPatient(){
        return view('pages.healthcare.register_new_patient');
    }
}
