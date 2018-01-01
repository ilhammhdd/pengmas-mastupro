<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Guru;
use App\GuruAccount;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGuru = Guru::all();
        return view('pages.admin.data_guru', compact('dataGuru'));
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

        $guru = Guru::where('nik', '=', $request->nikGuru)->get();

        if (!$guru->first()){
          Guru::create([
            'nik' => $request->nikGuru,
            'nama' => $request->namaGuru,
            'nama_file' => 'placeholder.jpg'
          ]);
          session()->put('success','Data guru dengan NIK '.$request->nikGuru.' berhasil ditambahkan');
        } else {
          session()->put('danger','Data guru dengan NIK '.$request->nikGuru.' gagal ditambahkan');
        }

      } catch (\Exception $e) {
        session()->put('danger','Terjadi Kesalahan');
      }

      return redirect()->route('admin.show_data_guru');
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
        //
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
      $guru = Guru::find($request->updateIdGuru);
      $guru->nik = $request->updateNikGuru;
      $guru->nama = $request->updateNamaGuru;

      if ($guru->save()) {
        session()->put('success','Data guru dengan NIK '.$request->nikGuru.' berhasil diperbaharui');
      } else {
        session()->put('danger','Data guru dengan NIK '.$request->nikGuru.' gagal diperbaharui');
      }
      return redirect()->route('admin.show_data_guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $guru = Guru::where('nik', '=', $request->nik)->first();
      $guruAccount = GuruAccount::where('guru_id', '=', $guru->id)->get();
      if ($guruAccount->first()){
        $user = User::where('id', '=', $guruAccount->first()->user_id)->first();
        $user->delete();
      }
      $guru->delete();
    }
}
