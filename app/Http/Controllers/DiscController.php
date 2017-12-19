<?php

namespace App\Http\Controllers;

use App\Graph1Dictionary;
use App\Graph2Dictionary;
use App\Graph3Dictionary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscController extends Controller
{
    protected function getEmptyStepArray()
    {
        return $step =
            [
                1 => [
                    "nilai" => [
                        "X" => 0,
                        "Y" => 0,
                        "Z" => 0,
                        "R" => 0
                    ],
                    "nilaiConverted" => [
                        "X" => 0,
                        "Y" => 0,
                        "Z" => 0,
                        "R" => 0
                    ],
                    "hasil" => array()
                ],
                2 => [
                    "nilai" => [
                        "X" => 0,
                        "Y" => 0,
                        "Z" => 0,
                        "R" => 0
                    ],
                    "nilaiConverted" => [
                        "X" => 0,
                        "Y" => 0,
                        "Z" => 0,
                        "R" => 0
                    ],
                    "hasil" => array()
                ],
                3 => [
                    "nilai" => [
                        "X" => 0,
                        "Y" => 0,
                        "Z" => 0,
                        "R" => 0
                    ],
                    "nilaiConverted" => [
                        "X" => 0,
                        "Y" => 0,
                        "Z" => 0,
                        "R" => 0
                    ],
                    "hasil" => array()
                ]
            ];
    }

    public function showResult($testHistoryId)
    {
        $count = 0;
        $testHistory = Auth::user()->testHistory()->where("id", $testHistoryId)->first();
        $stepTotalScore = $testHistory->stepTotalScore()->get();

        $step = $this->getEmptyStepArray();

        $tempHasil = array();
        $count = 0;

        foreach ($step as $keyStep => $eachStep) {
            foreach ($eachStep as $keyEachStep => $nilaiStep) {
                if ($keyEachStep == "nilai") {
                    foreach ($nilaiStep as $keyNilaiStep => $valueNilaiStep) {
                        $step[$keyStep]["nilai"][$keyNilaiStep] = $stepTotalScore->where("nomor", $keyStep)->first()->stepDetailScore()->where("point_nama", $keyNilaiStep)->first()->nilai;
//                        echo $step[$keyStep]["nilai"][$keyNilaiStep];
                    }
                }
                if ($keyEachStep == "nilaiConverted") {
                    foreach ($nilaiStep as $keyNilaiStep => $valueNilaiStep) {
                        switch ($keyStep) {
                            case 1:
                                $step[$keyStep][$keyEachStep][$keyNilaiStep] = Graph1Dictionary::where([["point_nama", $keyNilaiStep], ["nilai_graph", $step[$keyStep]["nilai"][$keyNilaiStep]]])->first()->nilai_graph_converted;

                                break;
                            case 2:
                                $step[$keyStep][$keyEachStep][$keyNilaiStep] = Graph2Dictionary::where([["point_nama", $keyNilaiStep], ["nilai_graph", $step[$keyStep]["nilai"][$keyNilaiStep]]])->first()->nilai_graph_converted;

                                break;

                            case 3:
                                $step[$keyStep][$keyEachStep][$keyNilaiStep] = Graph3Dictionary::where([["point_nama", $keyNilaiStep], ["nilai_graph", $step[$keyStep]["nilai"][$keyNilaiStep]]])->first()->nilai_graph_converted;

                                break;
                        }
                    }
                }

                $tempHasil = $step[$keyStep]["nilai"];
                arsort($tempHasil);
                foreach ($tempHasil as $key => $value) {
                    if ($count == 2) {
                        $count = 0;
                        break;
                    }
                    switch ($key) {
                        case "X":
                            $step[$keyStep]["hasil"][$count] = "D";
                            break;
                        case "Y":
                            $step[$keyStep]["hasil"][$count] = "i";
                            break;
                        case "Z":
                            $step[$keyStep]["hasil"][$count] = "S";
                            break;
                        case "R":
                            $step[$keyStep]["hasil"][$count] = "C";
                            break;
                    }
                    $count++;
                }
            }
        }

//        echo $step[2]["nilaiConverted"]["X"];
//        echo $step[2]["nilaiConverted"]["Y"];
//        echo $step[2]["nilaiConverted"]["Z"];
//        echo $step[2]["nilaiConverted"]["R"];
//
//        echo $step[3]["nilaiConverted"]["X"];
//        echo $step[3]["nilaiConverted"]["Y"];
//        echo $step[3]["nilaiConverted"]["Z"];
//        echo $step[3]["nilaiConverted"]["R"];


//        echo json_encode($step);

        return view('pages.disc_result')->with([
            'step'=>$step
        ]);
//        echo $step[3]["nilaiConverted"]["X"] = Graph3Dictionary::where([["point_nama", "X"], ["nilai_graph", $step[3]["nilai"]["X"]]])->first();
    }
}
