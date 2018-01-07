<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TestHistory;

class TestHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testHistory = TestHistory::all();
        return view('pages.admin.test_history', compact('testHistory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function printDataTest()
    {
          $testHistory = TestHistory::all();
          return view('pages.admin.print_data_test', compact('testHistory'));
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
    public function destroy(Request $request)
    {
      $status = false;
      $message = "";
      $testHistory = TestHistory::find($request->id);
      $testHistory->stepDetailScore()->delete();
      $testHistory->stepTotalScore()->delete();
      $testHistory->testResult()->delete();
      if ($testHistory->delete()){
        $status = true;
        $message = "Test History berhasil dihapus";
      } else {
        $status = false;
        $message = "Gagal Menghapus Test History";
      }

      return response()->json([
        'status' => $status,
        'message' => $message,
      ]);
    }
}
