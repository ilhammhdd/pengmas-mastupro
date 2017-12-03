@extends('layouts.master')

@section('loading')
    @include('include.website-loading')
@endsection

@section('header')
    @include('include.admin.header.temp')
@endsection

@section('banner')
    {{--@include('include.banner')--}}
@endsection

@section('content')
    <section id="content">
        <div id="content-wrap">
            <div style="margin-bottom: 100px;">
            </div>
            <div id="about" class="flat-section" data-scroll-index="1">
                <div class="section-content" style="padding: 20px 0;">
                    <div class="container">
                        <h2>SIGNED IN AS ADMIN</h2>
                    </div>
                </div>
            </div>
            <div id="how" class="parallax-section" data-scroll-index="2">
                <div class="section-inner">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('include.footer')
@endsection