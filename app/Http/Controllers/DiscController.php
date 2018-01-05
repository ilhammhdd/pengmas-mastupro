<?php

namespace App\Http\Controllers;

use App\Graph1Dictionary;
use App\Graph2Dictionary;
use App\Graph3Dictionary;
use App\TestHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscController extends Controller
{
    private $borderValues =
        [
            1 => [
                'X' => [
                    'above' => 7,
                    'below' => 6
                ],
                'Y' => [
                    'above' => 4,
                    'below' => 3
                ],
                'Z' => [
                    'above' => 5,
                    'below' => 4
                ],
                'R' => [
                    'above' => 4,
                    'below' => 3
                ]
            ],
            2 => [
                'X' => [
                    'above' => 5,
                    'below' => 6
                ],
                'Y' => [
                    'above' => 4,
                    'below' => 5
                ],
                'Z' => [
                    'above' => 6,
                    'below' => 7
                ],
                'R' => [
                    'above' => 6,
                    'below' => 7
                ]
            ],
            3 => [
                'X' => [
                    'above' => 1,
                    'below' => 0
                ],
                'Y' => [
                    'above' => 0,
                    'below' => -1
                ],
                'Z' => [
                    'above' => 0,
                    'below' => -1
                ],
                'R' => [
                    'above' => -2,
                    'below' => -3
                ]
            ]
        ];

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
        $testHistory = TestHistory::where("id", $testHistoryId)->first();
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
                                $nilaiConvertedTemp = Graph1Dictionary::where([["point_nama", $keyNilaiStep], ["nilai_graph", $step[$keyStep]["nilai"][$keyNilaiStep]]])->first();
                                if ($nilaiConvertedTemp) {
                                    $step[$keyStep][$keyEachStep][$keyNilaiStep] = $nilaiConvertedTemp->nilai_graph_converted;
                                } else {
                                    $step[$keyStep][$keyEachStep][$keyNilaiStep] = $this->getNearestNilaiConvertedTowardsMiddleLine($keyStep, $keyNilaiStep, $step[$keyStep]["nilai"][$keyNilaiStep]);
                                }
                                break;
                            case 2:
                                $nilaiConvertedTemp = Graph2Dictionary::where([["point_nama", $keyNilaiStep], ["nilai_graph", $step[$keyStep]["nilai"][$keyNilaiStep]]])->first();
                                if ($nilaiConvertedTemp) {
                                    $step[$keyStep][$keyEachStep][$keyNilaiStep] = $nilaiConvertedTemp->nilai_graph_converted;
                                } else {
                                    $step[$keyStep][$keyEachStep][$keyNilaiStep] = $this->getNearestNilaiConvertedTowardsMiddleLine($keyStep, $keyNilaiStep, $step[$keyStep]["nilai"][$keyNilaiStep]);
                                }
                                break;
                            case 3:
                                $nilaiConvertedTemp = Graph3Dictionary::where([["point_nama", $keyNilaiStep], ["nilai_graph", $step[$keyStep]["nilai"][$keyNilaiStep]]])->first();
                                if ($nilaiConvertedTemp) {
                                    $step[$keyStep][$keyEachStep][$keyNilaiStep] = $nilaiConvertedTemp->nilai_graph_converted;
                                } else {
                                    $step[$keyStep][$keyEachStep][$keyNilaiStep] = $this->getNearestNilaiConvertedTowardsMiddleLine($keyStep, $keyNilaiStep, $step[$keyStep]["nilai"][$keyNilaiStep]);
                                }
                                break;
                        }
                    }
                }

                $tempHasil = $step[$keyStep]["nilaiConverted"];
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

        return view('pages.disc_result')->with([
            'step' => $step
        ]);
    }

    public function getNearestNilaiConvertedTowardsMiddleLine($graph, $pointNama, $nilaiGraph)
    {
        $g = null;

        if ($nilaiGraph > $this->borderValues[$graph][$pointNama]['above']) {
            switch ($graph) {
                case 1:
                    $g = Graph1Dictionary::where([["point_nama", $pointNama], ["nilai_graph", --$nilaiGraph]])->first();
                    break;
                case 2:
                    $g = Graph2Dictionary::where([["point_nama", $pointNama], ["nilai_graph", ++$nilaiGraph]])->first();
                    break;
                case 3:
                    $g = Graph3Dictionary::where([["point_nama", $pointNama], ["nilai_graph", --$nilaiGraph]])->first();
                    break;
            }
        } elseif ($nilaiGraph < $this->borderValues[$graph][$pointNama]['below']) {
            switch ($graph) {
                case 1:
                    $g = Graph1Dictionary::where([["point_nama", $pointNama], ["nilai_graph", ++$nilaiGraph]])->first();
                    break;
                case 2:
                    $g = Graph2Dictionary::where([["point_nama", $pointNama], ["nilai_graph", --$nilaiGraph]])->first();
                    break;
                case 3:
                    $g = Graph3Dictionary::where([["point_nama", $pointNama], ["nilai_graph", ++$nilaiGraph]])->first();
                    break;
            }
        }

        if (!$g) {
            $this->getNearestNilaiConvertedTowardsMiddleLine($graph, $pointNama, $nilaiGraph);
        }

        return $g->nilai_graph_converted;
    }
}
