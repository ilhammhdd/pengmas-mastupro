<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Http\Controllers\Controller;
use App\DiscGroup;
use App\DiscSoal;
use DB;

class DiscSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataDiscSoal = DiscGroup::paginate(5);
        // dd($dataDiscSoal->first()->discSoal());
        // dd($dataDiscSoal);
        return view('pages.admin.data_disc_soal', compact('dataDiscSoal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahGroupSoal()
    {
        $lastGroupId = 1;
        $status = false;
        $message = "";
        $lastGroupId = DB::table('disc_groups')->orderBy('id', 'desc')->first();
        $newGroup = new DiscGroup();
        $newGroup->nomor = ++$lastGroupId->nomor;
        if ($newGroup->save()){
          $status = true;
          $message = "Group ID berhasil dibuat";
        } else {
          $status = false;
          $message = "Gagal membuat Group ID";
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
    public function tambahSoal(Request $request)
    {
        try {
          $discSoal = new DiscSoal();
          $discSoal->disc_group_nomor = $request->noGroupSoal;
          $discSoal->soal = $request->soal;
          $discSoal->kunci_plus = $request->keyPlus;
          $discSoal->kunci_minus = $request->keyMinus;
          if ($discSoal->save()){
            session()->put('success','Data soal dengan No. Group  '.$request->noGroupSoal.' berhasil ditambahkan');
          } else {
            session()->put('danger','Data soal dengan No. Group  '.$request->noGroupSoal.' gagal ditambahkan');
          }
        } catch (\Exception $e) {
          session()->put('danger','Terjadi Kesalahan');
        }
        return redirect()->route('admin.show_data_group_soal');
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
    public function updateSoal(Request $request)
    {
        try {
          $discSoal = DiscSoal::find($request->updatIdSoal);
          $discSoal->soal = $request->updateSoal;
          $discSoal->kunci_plus = $request->ukeyPlus;
          $discSoal->kunci_minus = $request->ukeyMinus;
          if ($discSoal->save()){
            session()->put('success','Data soal dengan No. Group  '.$request->noGroupSoal.' berhasil ditambahkan');
          } else {
            session()->put('danger','Data soal dengan No. Group  '.$request->noGroupSoal.' gagal ditambahkan');
          }
        } catch (\Exception $e) {
          session()->put('danger','Terjadi Kesalahan');
        }

        return redirect()->route('admin.show_data_group_soal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteGroupSoal(Request $request)
    {
        $status = false;
        $message = "";
        $groupSoal = DiscGroup::find($request->id);
        $groupSoal->discSoal()->delete();
        if ($groupSoal->delete()){
          $status = true;
          $message = "Group Soal berhasil dihapus";
        } else {
          $status = false;
          $message = "Gagal Menghapus Group Soal";
        }

        return response()->json([
          'status' => $status,
          'message' => $message,
        ]);
    }

    public function deleteSoal(Request $request)
    {
        $status = false;
        $message = "";
        $soal = DiscSoal::find($request->id);
        if ($soal->delete()){
          $status = true;
          $message = "Soal berhasil dihapus";
        } else {
          $status = false;
          $message = "Gagal Menghapus Soal";
        }

        return response()->json([
          'status' => $status,
          'message' => $message,
        ]);
    }
}
