<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="viewport" content="width=device-width"/>
    <meta name="csrf-token" content="{{csrf_token()}}"/>

    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/css/now-ui-kit.css?v=1.1.0') }}" rel="stylesheet" />
    <link href="{{ asset('landing/css/demo.css') }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  </head>
  <body class="index-page sidebar-collapse">
    {{-- <a href="{{route('formLogin')}}">
      <button type="button" name="login">Login</button>
    </a> --}}
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-info fixed-top navbar-transparant " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" data-placement="bottom">
          Sistem Profiling Siswa
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./theme/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link">
                <p>Selamat Datang, {{ Auth::user()->username }}</p>
              </a>
            </li>
            <li class="nav-item" style="text-align:center;">
              @if(session()->get('the_role')=="admin")
                <a class="nav-link btn btn-info btn-round" href="{{route('admin.index')}}">
                  <p>Dashboard</p>
                </a>
              @elseif(session()->get('the_role') == "guru")
                <a class="nav-link btn btn-info btn-round" href="{{route('guru.index')}}">
                  <p>Dashboard</p>
                </a>
              @elseif(session()->get('the_role') == "siswa")
                <a class="nav-link btn btn-info btn-round" href="{{route('siswa.index')}}">
                  <p>Dashboard</p>
                </a>
              @endif
            </li>
            <li class="nav-item" style="text-align:center;">
              <a class="nav-link btn btn-info" href="Javascript:logout()">
                <p>Keluar</p>
              </a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link btn btn-neutral" href="{{route('formLogin')}}">
                <p>Masuk</p>
              </a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" style="height:700px;" filter-color="">
      <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('img/sekolah-2.jpg') }}');">
      </div>
      <div class="container">
        <div class="content-center brand" style="padding-top:200px;">
          {{-- <img class="emeract-logo" src="{{ asset('landing/img/logo.png') }}" alt=""> --}}
          <h1 class="h1"><b>Sistem Profiling Siswa</b></h1>
          <h2 class="h2"><b>SMKN1 Malausma Majalengka</b></h2>
          <h4 class="h4">Know Yourself | Plan Your Future | Get Your Dream</h4>
          {{-- <h4 class="category category-absolut"><b>Know Yourself | Plan Your Future | Get Your Dream</b></h4> --}}
        </div>
      </div>
    </div>

    <div class="section section-team text-center">
      <div class="container">
        <h2 class="title">Organized By :</h2>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <img src="{{ asset('img/fri.png') }}" alt="Thumbnail Image" class="img-fluid img-raised">
                <h4 class="title">Fakultas Rekayasa Industri</h4>
                {{-- <p class="category text-primary"></p> --}}
                {{-- <p class="description">Chief Technology Officer - pemegang kendali tertinggi mengenai teknologi
                  <a href="#">links</a> .</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-instagram"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-facebook-square"></i></a> --}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src="{{ asset('img/logo-telu.png') }}" alt="Thumbnail Image" class="img-fluid img-raised">
                <h4 class="title">Telkom University</h4>
                {{-- <p class="category text-primary">CEO</p>
                <p class="description">Chief Executive Officer - pemegang kendali dalam arah perkembangan perusahaan
                  <a href="#">links</a> .</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-linkedin"></i></a> --}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src="{{ asset('img/logo-smk.png') }}" alt="Thumbnail Image" class="img-fluid img-raised">
                <h4 class="title">SMKN 1 Malausma</h4>
                {{-- <p class="category text-primary">CEO</p>
                <p class="description">Chief Executive Officer - pemegang kendali dalam arah perkembangan perusahaan
                  <a href="#">links</a> .</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-linkedin"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer" style="background-color:#E0E0E0">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="">
                Contact Us
              </a>
            </li>
            <li>
              <a href="">
                About Us
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright">
          &copy;
          <script>
              document.write(new Date().getFullYear())
          </script>
        </div>
      </div>
    </footer>
  </div>

    <script type="text/javascript">
      function logout() {
          $.ajax({
              url: '{{route('logout')}}',
              type: 'get',
              success: function (response) {
                  window.localStorage.clear();
                  window.location = response.url;
              }
          });
      }
    </script>

    <script src="{{ asset('landing/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/js/plugins/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('landing/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/js/now-ui-kit.js?v=1.1.0') }}" type="text/javascript"></script>

  </body>
</html>
