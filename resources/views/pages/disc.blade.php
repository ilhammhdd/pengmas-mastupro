@extends('layouts.master')

@section('title')
    Test Disc
@endsection

@section('sidebar')
    @if(session()->get('the_role')=="admin")

    @elseif(session()->get('the_role') == "guru")
        @include('layouts.guru.sidebar')
    @elseif(session()->get('the_role') == "siswa")
        @include('layouts.siswa.sidebar')
    @endif
@endsection

@section('navbar')
    @if(session()->get('the_role')=="admin")

    @elseif(session()->get('the_role') == "guru")
        @include('layouts.guru.navbar')
    @elseif(session()->get('the_role') == "siswa")
        @include('layouts.siswa.navbar')
    @endif
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="content table-responsive table-full-width">
                    <table class="table">
                        @foreach($discGroup as $disc)
                            <thead>
                            <tr>
                                <th>Pertanyaan Group {{$disc->nomor}}</th>
                                <th>Most</th>
                                <th>Least</th>
                            </tr>
                            </thead>
                            @foreach($disc->discSoal as $index => $soal)

                                <tbody>
                                <tr>
                                    <td>{{$soal->soal}}</td>
                                    <td>
                                        <div class="radio">
                                            <input class="radio-most" type="radio" name="radioMost{{$disc->nomor}}"
                                                   id="radioMostId{{$disc->nomor.$index}}"
                                                   value="{{$soal->kunci_plus}}"
                                                   onclick="radioMostClicked(this.name, this.value, '{{$disc->nomor}}', '{{$index}}')">
                                            <label for="radioMostId{{$disc->nomor.$index}}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="radio">
                                            <input class="radio-least" type="radio" name="radioLeast{{$disc->nomor}}"
                                                   id="radioLeastId{{$disc->nomor.$index}}"
                                                   value="{{$soal->kunci_minus}}"
                                                   onclick="radioLeastClicked(this.name, this.value, '{{$disc->nomor}}', '{{$index}}')">
                                            <label for="radioLeastId{{$disc->nomor.$index}}"></label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        @endforeach
                    </table>
                </div>
                <div class="text-right">
                    {!! $discGroup->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
