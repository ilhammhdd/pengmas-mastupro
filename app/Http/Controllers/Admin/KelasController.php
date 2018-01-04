<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKelas = Kelas::all();
        return view('pages.admin.data_kelas', compact('dataKelas'));
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
        $kelas = new Kelas();
        $kelas->nama = $request->namaKelas;
        try {
          if ($kelas->save()){
            session()->put('success','Data kelas '.$request->namaKelas. ' berhasil ditambah ');
          } else {
            session()->put('danger','Data kelas '.$request->namaKelas. ' gagal ditambah ');
          }
        } catch (\Exception $e) {
          session()->put('danger','Data kelas '.$request->namaKelas. ' gagal ditambah ');
        }

        return redirect()->route('admin.show_data_kelas');
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
        $kelas = Kelas::find($request->updateIdKelas);
        $kelas->nama = $request->updateNamaKelas;

        try {
          if ($kelas->save()){
            session()->put('success','Data kelas berhasil diperbaharui');
          } else {
            session()->put('danger','Data kelas gagal diperbaharui');
          }
        } catch (\Exception $e) {
          session()->put('danger','Data kelas gagal diperbaharui');
        }

        return redirect()->route('admin.show_data_kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $kelas = Kelas::find($request->id)->delete();
    }
}
