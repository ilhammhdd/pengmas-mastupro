<?php

namespace App\Http\Controllers;

use App\StepTotalScore;
use App\Test;
use App\TestHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function showTests()
    {
        return view('pages.test_all');
    }

    public function showHistory()
    {
        return view('pages.test_history');
    }

    public function showDiscTest()
    {
        return view('pages.disc');
    }

    public function checkEnrollmentKey(Request $request)
    {
        $enrollmentKey = Test::where('id', $request->get('idTest'))->first(['enrollment_key']);
        if ($request->get('enrollmentKey') == $enrollmentKey->enrollment_key) {
            session()->put('takingTest', true);
            session()->put('enrollmentStatus', "authorized");
            return response()->json([
                'success' => true,
                'key_verified' => true,
                'test' => strtolower($request->get('namaTest')),
                'message' => 'enrollment key benar'
            ]);
        }
        return response()->json([
            'success' => true,
            'key_verified' => false,
            'test' => strtolower($request->get('namaTest')),
            'message' => 'enrollment key salah'
        ]);
    }

    public function submitTest(Request $request)
    {
        $testHistory = new TestHistory();
        $testHistory->user_id = Auth::id();
        $testHistory->test_id = $request->get('testId');
        $testHistory->save();

        $iterator = new \MultipleIterator();
        $iterator->attachIterator(new \ArrayIterator($request->input('radioMost')));
        $iterator->attachIterator(new \ArrayIterator($request->input('radioLeast')));

        $arrStep1And2 = $this->submitStepTotalAndDetailScore1And2($iterator, $testHistory);
        $this->submitStepTotalAndDetailScore3($arrStep1And2[0], $arrStep1And2[1], $testHistory);
        session()->forget("enrollmentStatus");
        session()->forget("takingTest");

        return response()->json([
            'success' => true,
            'route' => route('test.show_history'),
            'message' => 'successfully submit test'
        ]);
    }

    public function submitStepTotalAndDetailScore1And2(\MultipleIterator $iterator, TestHistory $testHistory)
    {
        $step1 = [
            'X' => 0,
            'Y' => 0,
            'Z' => 0,
            'R' => 0,
            "+-" => 0
        ];
        $step2 = [
            'X' => 0,
            'Y' => 0,
            'Z' => 0,
            'R' => 0,
            "+-" => 0
        ];

        foreach ($iterator as $key => $values) {
            switch ($values[0]) {
                case 'X':
                    ++$step1['X'];
                    break;
                case 'Y':
                    ++$step1['Y'];
                    break;
                case 'Z':
                    ++$step1['Z'];
                    break;
                case'R':
                    ++$step1['R'];
                    break;
                case "+-":
                    ++$step1["+-"];
                    break;
            }

            switch ($values[1]) {
                case 'X':
                    ++$step2['X'];
                    break;
                case 'Y':
                    ++$step2['Y'];
                    break;
                case 'Z':
                    ++$step2['Z'];
                    break;
                case'R':
                    ++$step2['R'];
                    break;
                case "+-":
                    ++$step2["+-"];
                    break;
            }
        }

        $totalMost = $step1["X"] + $step1["Y"] + $step1["Z"] + $step1["R"] + $step1["+-"];

        $step1TotalScore = new StepTotalScore();
        $step1TotalScore->nomor = 1;
        $step1TotalScore->test_history_id = $testHistory->id;
        $step1TotalScore->total = $totalMost;
        $step1TotalScore->save();

        foreach ($step1 as $key => $value) {
            DB::insert('insert into step_detail_scores (step_total_score_id,point_nama,test_history_id,nilai) values (?,?,?,?)', [$step1TotalScore->id, $key, $testHistory->id, $value]);
        }

        $totalLeast = $step2["X"] + $step2["Y"] + $step2["Z"] + $step2["R"] + $step2["+-"];

        $step2TotalScore = new StepTotalScore();
        $step2TotalScore->nomor = 2;
        $step2TotalScore->test_history_id = $testHistory->id;
        $step2TotalScore->total = $totalLeast;
        $step2TotalScore->save();

        foreach ($step2 as $key => $value) {
            DB::insert('insert into step_detail_scores (step_total_score_id,point_nama,test_history_id,nilai) values (?,?,?,?)', [$step2TotalScore->id, $key, $testHistory->id, $value]);
        }

        return [
            $step1,
            $step2
        ];
    }

    public function submitStepTotalAndDetailScore3($step1, $step2, TestHistory $testHistory)
    {
        $step3 = [
            "X" => 0,
            "Y" => 0,
            "Z" => 0,
            "R" => 0,
            "+-" => 0
        ];

        $multipleIteartion = new \MultipleIterator();
        $multipleIteartion->attachIterator(new \ArrayIterator($step1));// [0]
        $multipleIteartion->attachIterator(new \ArrayIterator($step2));// [1]

        foreach ($multipleIteartion as $key => $value) {
            if ($key[1] == "+-") {
                $step3[$key[1]] = $value[0] + $value[1];
            }
            $step3[$key[1]] = $value[0] - $value[1];
        }

        $totalBalance = $step3["X"] + $step3["Y"] + $step3["Z"] + $step3["R"] + $step3["+-"];

        $step3TotalScore = new StepTotalScore();
        $step3TotalScore->nomor = 3;
        $step3TotalScore->total = $totalBalance;
        $step3TotalScore->test_history_id = $testHistory->id;
        $step3TotalScore->save();

        foreach ($step3 as $key => $value) {
            DB::insert('insert into step_detail_scores (step_total_score_id,point_nama,test_history_id,nilai) values (?,?,?,?)', [$step3TotalScore->id, $key, $testHistory->id, $value]);
        }
    }
}
