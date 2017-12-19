@extends('layouts.master')

@section('title')
    Halaman Siswa
@endsection

@section('sidebar')
    @include('layouts.guru.sidebar')
@endsection

@section('navbar')
    @include('layouts.guru.navbar')
@endsection

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <div class="card card-user">
            <div class="image">
                <img src="{{asset('img/full-screen-image-3.jpg')}}"/>
            </div>
            <div class="content">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{asset('img/faces/face-2.jpg')}}" alt="..."/>

                        <h4 class="title">{{$guru->nama}}<br/>
{{--                            <small>{{$guru->kelas->nama}}</small>--}}
                        </h4>
                    </a>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

            </div>
        </div>
    </div>
@endsection
