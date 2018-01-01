<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTest =  Test::all();
        return view('pages.admin.SettingTest', compact('dataTest'));
    }

    /**
     * Set test available
     *
     * @return \Illuminate\Http\Response
     */
    public function setOnTest(Request $request)
    {
        $status = false;
        $message = "";
        $test = Test::find($request->idTest);
        $test->status = 1;
        $test->enrollment_key = $request->enrollmentKey;

        if ($test->save()){
          $status = true;
          $message = "Test Berhasil Dibuka dibuat";
        } else {
          $status = false;
          $message = "Test Gagal Dibuka";
        }

        return response()->json([
          'status' => $status,
          'message' => $message,
        ]);

    }

    /**
     * Set tes not available
     *
     * @return \Illuminate\Http\Response
     */
    public function setOffTest(Request $request)
    {
        $status = false;
        $message = "";
        $test = Test::find($request->idTest);
        $test->status = 0;
        $test->enrollment_key = '@!#';

        if ($test->save()){
          $status = true;
          $message = "Test Berhasil Dibuka dibuat";
        } else {
          $status = false;
          $message = "Test Gagal Dibuka";
        }

        return response()->json([
          'status' => $status,
          'message' => $message,
        ]);
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
