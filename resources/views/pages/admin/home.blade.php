@extends('layouts.master')

@section('title')
    Halaman Admin
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
    @include('layouts.admin.sidebar')
@endsection

@section('navbar')
    @include('layouts.admin.navbar')
@endsection

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <div class="card card-user">
            <div class="image">
                <img src="{{asset('img/header-profile.png')}}"/>
            </div>
            <div class="content">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{asset('img/faces/face-1.jpg')}}" alt="..."/>

                        <h4 class="title">Admin Sistem<br/>
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
