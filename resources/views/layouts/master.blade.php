<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

    <!-- Stylesheets
    ============================================= -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/landing-custom.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700|Open+Sans:400,400i,600,600i,700,700i"
          rel="stylesheet">

    {{-- Google Map API --}}
    <style>
        #map {
            border-radius: 10px;
            width: 100%;
            height: 250px;
            background-color: grey;
        }
    </style>

    <!-- Favicon
    ============================================= -->
    <link rel="shortcut icon" href="{{ asset('images/general-elements/favicon/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('images/general-elements/favicon/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{ asset('images/general-elements/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{ asset('images/general-elements/favicon/apple-touch-icon-114x114.png')}}">

    <!-- Title
    ============================================= -->
    <title>Medical</title>

</head>

<body>
<div id="scroll-progress"><span class="scroll-percent"></span></div>

@yield('loading')

<!-- Document Full Container
	============================================= -->
<div id="full-container">

    @yield('header')

    @yield('banner')

    @yield('content')

    @yield('footer')

</div><!-- #full-container end -->

<a class="scroll-top" href="#"><img src={{asset('images/general-elements/scroll-top.png')}} alt=""></a>

<!-- External JavaScripts
============================================= -->
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/SmoothScroll.js')}}"></script>
<script src="{{ asset('js/jRespond.min.js')}}"></script>
<script src="{{ asset('js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('js/jquery.fitvids.js')}}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.stellar.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{ asset('js/hoverIntent.js')}}"></script>
<script src="{{ asset('js/simple-scrollbar.min.js')}}"></script>
<script src="{{ asset('js/superfish.js')}}"></script>
<script src="{{ asset('js/scrollIt.min.js')}}"></script>
<script src='{{ asset('js/jquery.magnific-popup.min.js')}}'></script>
<script src="{{ asset('js/jssocials.min.js')}}"></script>
<script src='{{ asset('js/jquery.validate.min.js')}}'></script>
<script src='{{ asset('js/functions.js')}}'></script>

</body>
</html>
