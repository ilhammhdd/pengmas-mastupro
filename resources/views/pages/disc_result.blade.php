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
        <div class="col-md-5">
            <div id="chartPerformance1" class="ct-chart "></div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <h4>Current Style : <b>{{$step[1]["hasil"][0]}}{{$step[1]["hasil"][1]}}</b></h4>
            </div>
            <div class="row">
                <h4>Penjelasan : </h4>
                <p id="penjelasanGraph1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel blandit lectus.
                    Quisque commodo sit
                    amet neque hendrerit finibus. Integer iaculis tempus diam, vel pharetra ex pretium nec. Suspendisse
                    condimentum nisl nisi, a faucibus felis tristique a. Donec nisl orci, rhoncus ut commodo vitae,
                    posuere vitae lectus. Nulla ullamcorper lobortis erat, vel cursus orci. Vestibulum auctor eu leo in
                    maximus. Proin tristique et lacus sed vulputate. Vivamus sed consectetur sapien. In malesuada
                    pharetra eros, eget aliquam lectus rutrum vel. Phasellus massa eros, pulvinar id ipsum non, sagittis
                    aliquet tellus. Sed ac vestibulum magna, vitae dictum tellus. Aliquam quis neque eu tortor
                    scelerisque ornare id at orci. Integer id magna mauris.</p>
            </div>
            {{-- <div class="row">
                <h4>Pekerjaan : </h4>
                <p>
                    Curabitur mollis ipsum tellus, in aliquam urna dictum porta. Nullam purus orci, efficitur eu
                    venenatis sed, accumsan eu libero. Mauris eget felis porttitor, efficitur ex vitae, molestie urna.
                </p>
            </div>
            <div class="row">
                <h4>Tokoh : </h4>
                <p>Vestibulum justo tellus, lobortis non elit ac, suscipit dignissim risus.</p>
            </div> --}}
        </div>
    </div>
    <div class="row" style="margin-bottom:100px;">
        <div class="col-md-5">
            <div id="chartPerformance2" class="ct-chart "></div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <h4>Pressure Style : <b>{{$step[2]["hasil"][0]}}{{$step[2]["hasil"][1]}}</b></h4>
            </div>
            <div class="row">
                <h4>Penjelasan : </h4>
                <p id="penjelasanGraph1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel blandit lectus.
                    Quisque commodo sit
                    amet neque hendrerit finibus. Integer iaculis tempus diam, vel pharetra ex pretium nec. Suspendisse
                    condimentum nisl nisi, a faucibus felis tristique a. Donec nisl orci, rhoncus ut commodo vitae,
                    posuere vitae lectus. Nulla ullamcorper lobortis erat, vel cursus orci. Vestibulum auctor eu leo in
                    maximus. Proin tristique et lacus sed vulputate. Vivamus sed consectetur sapien. In malesuada
                    pharetra eros, eget aliquam lectus rutrum vel. Phasellus massa eros, pulvinar id ipsum non, sagittis
                    aliquet tellus. Sed ac vestibulum magna, vitae dictum tellus. Aliquam quis neque eu tortor
                    scelerisque ornare id at orci. Integer id magna mauris.</p>
            </div>
            {{-- <div class="row">
                <h4>Pekerjaan : </h4>
                <p>
                    Curabitur mollis ipsum tellus, in aliquam urna dictum porta. Nullam purus orci, efficitur eu
                    venenatis sed, accumsan eu libero. Mauris eget felis porttitor, efficitur ex vitae, molestie urna.
                </p>
            </div>
            <div class="row">
                <h4>Tokoh : </h4>
                <p>Vestibulum justo tellus, lobortis non elit ac, suscipit dignissim risus.</p>
            </div> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div id="chartPerformance3" class="ct-chart "></div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <h4>Self Style : <b>{{$step[3]["hasil"][0]}}{{$step[2]["hasil"][1]}}</b></h4>
            </div>
            <div class="row">
                <h4>Penjelasan : </h4>
                <p id="penjelasanGraph1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel blandit lectus.
                    Quisque commodo sit
                    amet neque hendrerit finibus. Integer iaculis tempus diam, vel pharetra ex pretium nec. Suspendisse
                    condimentum nisl nisi, a faucibus felis tristique a. Donec nisl orci, rhoncus ut commodo vitae,
                    posuere vitae lectus. Nulla ullamcorper lobortis erat, vel cursus orci. Vestibulum auctor eu leo in
                    maximus. Proin tristique et lacus sed vulputate. Vivamus sed consectetur sapien. In malesuada
                    pharetra eros, eget aliquam lectus rutrum vel. Phasellus massa eros, pulvinar id ipsum non, sagittis
                    aliquet tellus. Sed ac vestibulum magna, vitae dictum tellus. Aliquam quis neque eu tortor
                    scelerisque ornare id at orci. Integer id magna mauris.</p>
            </div>
            {{-- <div class="row">
                <h4>Pekerjaan : </h4>
                <p>
                    Curabitur mollis ipsum tellus, in aliquam urna dictum porta. Nullam purus orci, efficitur eu
                    venenatis sed, accumsan eu libero. Mauris eget felis porttitor, efficitur ex vitae, molestie urna.
                </p>
            </div>
            <div class="row">
                <h4>Tokoh : </h4>
                <p>Vestibulum justo tellus, lobortis non elit ac, suscipit dignissim risus.</p>
            </div> --}}
        </div>
    </div>
@endsection

@section('other-js')
    <script type="text/javascript">
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
