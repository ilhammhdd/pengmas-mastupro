<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use App\Kelas;
use App\SiswaAccount;
use App\User;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSiswa = Siswa::all();
        $dataKelas = Kelas::all();
        return view('pages.admin.data_siswa', compact('dataSiswa', 'dataKelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
          $siswa = Siswa::where('nis', '=', $request->nisSiswa)->get();

          if (!$siswa->first()){
            Siswa::create([
              'nis' => $request->nisSiswa,
              'nama' => $request->namaSiswa,
              'nama_file' => 'placeholder.jpg',
              'kelas_id' => $request->kelasId
            ]);
            session()->put('success','Data guru dengan NIS '.$request->nisSiswa.' berhasil ditambahkan');
          } else {
            session()->put('danger','Data guru dengan NIS '.$request->nisSiswa.' gagal ditambahkan');

          }
        } catch (\Exception $e) {
          session()->put('danger','Terjadi Kesalahan');
        }

        return redirect()->route('admin.show_data_siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  ,
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $siswa = Siswa::find($request->updateIdSiswa);
        $siswa->nis = $request->updateNisSiswa;
        $siswa->nama = $request->updateNamaSiswa;
        if (isset($request->updateKelasId)){
            $siswa->kelas_id = $request->updateKelasId;
        }
        if ($siswa->save()) {
          session()->put('success','Data guru dengan NIS '.$request->nisSiswa.' berhasil diperbaharui');
        } else {
          session()->put('danger','Data guru dengan NIS '.$request->nisSiswa.' gagal diperbaharui');
        }

        return redirect()->route('admin.show_data_siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $siswa = Siswa::where('nis', '=', $request->nis)->first();
        $siswaAccount = SiswaAccount::where('siswa_id', '=', $siswa->id)->get();
        if ($siswaAccount->first()){
          $user = User::where('id', '=', $siswaAccount->first()->user_id)->first();
          $user->delete();
        }
        $siswa->delete();
    }
}
