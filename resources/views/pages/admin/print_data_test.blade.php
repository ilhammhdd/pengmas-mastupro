<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="csrf-token" content="{{csrf_token()}}"/>

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet"/>

    @yield('other-css')

</head>
<body onload="">
<div class="wrapper">
    <div class="main-content">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="header text-center">
                      <img  height="100px" src="{{ asset('img/logo-smk.png') }}" alt="Thumbnail Image" class="img-fluid img-raised">
                      <h4 class="title">Data Hasil Test DISC</h4>
                      <h6 class="title">SMKN 1 MALAUSMA</h6>
                  </div>
                  <div class="content table-responsive table-full-width">
                      <table class="table table-hover table-striped">
                          <thead class="thead-dark">
                          <tr>
                              <th class="text-center">No Test</th>
                              <th class="text-center">Tanggal Test</th>
                              <th class="text-center">Nama Test</th>
                              <th class="text-center">Nama Peserta</th>
                              <th class="text-center">Jenis Peserta</th>
                              <th class="text-center">Current Style</th>
                              <th class="text-center">Pressure Style</th>
                              <th class="text-center">Self Style</th>
                              <th class="text-center">Kelas</th>
                          </tr>

                          </thead>
                          <tbody>
                          @foreach($testHistory as $th)
                              <tr>
                                  <td class="text-center">{{$th->id}}</td>
                                  <td class="text-center">{{$th->created_at->formatLocalized('%d %B %Y')}}</td>
                                  <td class="text-center">{{$th->test()->first()->nama}}</td>
                                  @if ($th->user()->first()->siswaAccount()->first() != null)
                                    <td class="text-left">{{$th->user()->first()->siswaAccount()->first()->siswa()->first()->nama }}</td>
                                    <td class="text-left">Siswa</td>
                                    <td class="text-left">{{$th->user()->first()->siswaAccount()->first()->siswa()->first()->kelas()->first()->nama }}</td>
                                  @elseif ($th->user()->first()->guruAccount()->first() != null)
                                    <td class="text-left">{{$th->user()->first()->guruAccount()->first()->guru()->first()->nama }}</td>
                                    <td class="text-left">Guru</td>
                                    <td class="text-left">- - -</td>
                                  @endif
                                  <td class="text-center">SD</td>
                                  <td class="text-center">CD</td>
                                  <td class="text-center">C</td>
                              </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
    </div>


    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-switch-tags.min.js')}}"></script>
    <script src="{{asset('js/chartist.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script src="{{asset('js/bootstrap-table.js')}}"></script>
    <script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>
    <script src="{{asset('js/demo.js')}}"></script>

    <script type="text/javascript">

        window.print()

        function printDataHstory(){
          var printContents = document.getElementById("content").innerHTML;
          var originalContents = document.body.innerHTML;

          document.body.innerHTML = printContents;

          window.print();

          document.body.innerHTML = originalContents;
        }
    </script>

</div>
</body>

</html>
