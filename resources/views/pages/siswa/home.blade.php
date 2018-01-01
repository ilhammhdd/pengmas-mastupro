@extends('layouts.master')

@section('title')
    Halaman Siswa
@endsection

@section('other-css')
  <style>
    .main-content {
      background-image: url('{{ asset('img/bg-user.jpg') }}');
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
@endsection


@section('sidebar')
    @include('layouts.siswa.sidebar')
@endsection

@section('navbar')
    @include('layouts.siswa.navbar')
@endsection

@section('content')
    <div class="col-md-4 col-md-offset-4" >
        <div class="card card-user">
            <div class="image">
                <img src="{{asset('img/header-profile.png')}}"/>
            </div>
            <div class="content">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{asset('img/faces/face-0.jpg')}}" alt="..."/>

                        <h4 class="title">{{$siswa->nama}}<br/>
                            <small>{{$siswa->kelas->nama}}</small>
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
