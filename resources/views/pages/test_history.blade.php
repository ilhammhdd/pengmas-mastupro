@extends('layouts.master')

@section('title')
    Riwayat Test
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
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Riwayat Test</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center">Nama Test</th>
                            <th class="text-center">Tanggal & Jam</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($testHistory as $th)
                            <tr>
                                <td class="text-center">{{$th->test()->first()->nama}}</td>
                                <td class="text-center">{{$th->created_at}}</td>
                                <td class="td-actions text-center">
                                    <a href="{{route('disc.show_result', $th->id)}}"
                                       rel="tooltip"
                                       title="Lihat Hasil"
                                       class="btn btn-info btn-simple btn-lg" style="opacity: 1;">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.siswa.footer')
@endsection