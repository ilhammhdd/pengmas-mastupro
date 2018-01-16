@extends('layouts.master')

@section('title')
    Hasil DiSC
@endsection

@section('other-css')
    <style>
        .ct-label.ct-horizontal.ct-end {
            font-size: 20px;
            font-weight: 900;
        }
    </style>
@endsection

@section('sidebar')
    @if(session()->get('the_role')=="admin")
        @include('layouts.admin.sidebar')
    @elseif(session()->get('the_role') == "guru")
        @include('layouts.guru.sidebar')
    @elseif(session()->get('the_role') == "siswa")
        @include('layouts.siswa.sidebar')
    @endif
@endsection

@section('navbar')
    @if(session()->get('the_role')=="admin")
        @include('layouts.admin.navbar')
    @elseif(session()->get('the_role') == "guru")
        @include('layouts.guru.navbar')
    @elseif(session()->get('the_role') == "siswa")
        @include('layouts.siswa.navbar')
    @endif
@endsection

@section('content')
    <div class="row" style="margin-bottom:100px;">
        <div class="col-md-4">
            <div id="chartPerformance1" class="ct-chart "></div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <h4>Current Style : <b>{{$step[1]["hasil"][0]}}{{$step[1]["hasil"][1]}}</b></h4>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <h5>Tujuan : </h5>
                    <p id="tujuanGraph1">
                        @if($currentStyle)
                            {{$currentStyle->tujuan}}
                        @endif
                    </p>
                    <h5>Menilai Orang Dari : </h5>
                    <p id="tujuanGraph1">
                        @if($currentStyle)
                            {{$currentStyle->menilai_orang_dari}}
                        @endif
                    </p>
                    <h5>Mempengaruhi Orang Dari : </h5>
                    <p id="tujuanGraph1">
                        @if($currentStyle)
                            {{$currentStyle->mempengaruhi_orang_dari}}
                        @endif
                    </p>
                    <h5>Seringnya : </h5>
                    <p id="tujuanGraph1">
                        @if($currentStyle)
                            {{$currentStyle->sering}}
                        @endif
                    </p>
                    <h5>Dibawah Tekanan : </h5>
                    <p id="tujuanGraph1">
                        @if($currentStyle)
                            {{$currentStyle->dibawah_tekanan}}
                        @endif
                    </p>
                    <h5>Ketakutan : </h5>
                    <p id="tujuanGraph1">
                        @if($currentStyle)
                            {{$currentStyle->ketakutan}}
                        @endif
                    </p>
                    <h5>Mengingkatkan Efektifitas Melalui : </h5>
                    <p id="tujuanGraph1">
                        @if($currentStyle)
                            {{$currentStyle->meningkatkan_efektifitas_melalui}}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <h4>Penjelasan : </h4>
                    <p id="penjelasanGraph1">
                        @if($currentStyle)
                            {{$currentStyle->penjelasan}}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:100px;">
        <div class="col-md-4">
            <div id="chartPerformance2" class="ct-chart "></div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <h4>Pressure Style : <b>{{$step[2]["hasil"][0]}}{{$step[2]["hasil"][1]}}</b></h4>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <h5>Tujuan : </h5>
                    <p id="tujuanGraph1">
                        @if($pressureStyle)
                            {{$pressureStyle->tujuan}}
                        @endif
                    </p>
                    <h5>Menilai Orang Dari : </h5>
                    <p id="tujuanGraph1">
                        @if($pressureStyle)
                            {{$pressureStyle->menilai_orang_dari}}
                        @endif
                    </p>
                    <h5>Mempengaruhi Orang Dari : </h5>
                    <p id="tujuanGraph1">
                        @if($pressureStyle)
                            {{$pressureStyle->mempengaruhi_orang_dari}}
                        @endif
                    </p>
                    <h5>Seringnya : </h5>
                    <p id="tujuanGraph1">
                        @if($pressureStyle)
                            {{$pressureStyle->sering}}
                        @endif
                    </p>
                    <h5>Dibawah Tekanan : </h5>
                    <p id="tujuanGraph1">
                        @if($pressureStyle)
                            {{$pressureStyle->dibawah_tekanan}}
                        @endif
                    </p>
                    <h5>Ketakutan : </h5>
                    <p id="tujuanGraph1">
                        @if($pressureStyle)
                            {{$pressureStyle->ketakutan}}
                        @endif
                    </p>
                    <h5>Mengingkatkan Efektifitas Melalui : </h5>
                    <p id="tujuanGraph1">
                        @if($pressureStyle)
                            {{$pressureStyle->meningkatkan_efektifitas_melalui}}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <h4>Penjelasan : </h4>
                    <p id="penjelasanGraph1">
                        @if($pressureStyle)
                            {{$pressureStyle->penjelasan}}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div id="chartPerformance3" class="ct-chart "></div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <h4>Self Style : <b>{{$step[3]["hasil"][0]}}{{$step[3]["hasil"][1]}}</b></h4>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <h5>Tujuan : </h5>
                    <p id="tujuanGraph1">
                        @if($selfStyle)
                            {{$selfStyle->tujuan}}
                        @endif
                    </p>
                    <h5>Menilai Orang Dari : </h5>
                    <p id="tujuanGraph1">
                        @if($selfStyle)
                            {{$selfStyle->menilai_orang_dari}}
                        @endif
                    </p>
                    <h5>Mempengaruhi Orang Dari : </h5>
                    <p id="tujuanGraph1">
                        @if($selfStyle)
                            {{$selfStyle->mempengaruhi_orang_dari}}
                        @endif
                    </p>
                    <h5>Seringnya : </h5>
                    <p id="tujuanGraph1">
                        @if($selfStyle)
                            {{$selfStyle->sering}}
                        @endif
                    </p>
                    <h5>Dibawah Tekanan : </h5>
                    <p id="tujuanGraph1">
                        @if($selfStyle)
                            {{$selfStyle->dibawah_tekanan}}
                        @endif
                    </p>
                    <h5>Ketakutan : </h5>
                    <p id="tujuanGraph1">
                        @if($selfStyle)
                            {{$selfStyle->ketakutan}}
                        @endif
                    </p>
                    <h5>Mengingkatkan Efektifitas Melalui : </h5>
                    <p id="tujuanGraph1">
                        @if($selfStyle)
                            {{$selfStyle->meningkatkan_efektifitas_melalui}}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <h4>Penjelasan : </h4>
                    <p id="penjelasanGraph1">
                        @if($selfStyle)
                            {{$selfStyle->penjelasan}}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('other-js')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document.body).addClass('sidebar-mini');
        });

        var dataPerformance1 = {
            labels: ['D', 'I', 'S', 'C'],
            series: [
                [
                    {{$step[1]["nilaiConverted"]["X"]}},
                    {{$step[1]["nilaiConverted"]["Y"]}},
                    {{$step[1]["nilaiConverted"]["Z"]}},
                    {{$step[1]["nilaiConverted"]["R"]}}
                ]
            ]
        };
        var dataPerformance2 = {
            labels: ['D', 'I', 'S', 'C'],
            series: [
                [
                    {{$step[2]["nilaiConverted"]["X"]}},
                    {{$step[2]["nilaiConverted"]["Y"]}},
                    {{$step[2]["nilaiConverted"]["Z"]}},
                    {{$step[2]["nilaiConverted"]["R"]}}
                ]
            ]
        };
        var dataPerformance3 = {
            labels: ['D', 'I', 'S', 'C'],
            series: [
                [
                    {{$step[3]["nilaiConverted"]["X"]}},
                    {{$step[3]["nilaiConverted"]["Y"]}},
                    {{$step[3]["nilaiConverted"]["Z"]}},
                    {{$step[3]["nilaiConverted"]["R"]}}
                ]
            ]
        };

        var optionsPerformance = {
            showPoint: true,
            lineSmooth: false,
            height: '600px',
            width: '350px',
            fullWidth: true,
            axisX: {
                showGrid: true,
                showLabel: true
            },
            axisY: {
                showLabel: true,
                type: Chartist.FixedScaleAxis,
                ticks: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34],
                low: 0,
                high: 34
            },
            low: 0,
            high: 34
        };

        Chartist.Line('#chartPerformance1', dataPerformance1, optionsPerformance);
        Chartist.Line('#chartPerformance2', dataPerformance2, optionsPerformance);
        Chartist.Line('#chartPerformance3', dataPerformance3, optionsPerformance);
    </script>
@endsection
