<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="{{asset('img/Mastupro.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Login</title>

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

</head>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{--<a class="navbar-brand" href="--}}{{--../dashboard.html--}}{{--">Light Bootstrap Dashboard PRO</a>--}}
        </div>
        <div class="collapse navbar-collapse">

            {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--<li>--}}
            {{--<a href="--}}{{--register.html--}}{{--">--}}
            {{--Register--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
        </div>
    </div>
</nav>

<body>

<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="azure"  data-image="{{asset('img/bg-user.jpg')}}">

        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="POST" action="{{route('login')}}">
                        {{csrf_field()}}
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center">Login</div>
                                <div class="content">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" placeholder="Masukkan Nomor Induk" class="form-control"
                                               name="username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" placeholder="Masukkan Password" class="form-control"
                                               name="password">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-warning btn-wd">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="{{asset('js/jquery.validate.min.js')}}"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('js/moment.min.js')}}"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

<!--  Select Picker Plugin -->
<script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="{{asset('js/bootstrap-switch-tags.min.js')}}"></script>

<!--  Charts Plugin -->
<script src="{{asset('js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('js/bootstrap-notify.js')}}"></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{asset('js/sweetalert2.js')}}"></script>

<!-- Vector Map plugin -->
<script src="{{asset('js/jquery-jvectormap.js')}}"></script>

<!--  Google Maps Plugin    -->
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}

<!-- Wizard Plugin    -->
<script src="{{asset('js/jquery.bootstrap.wizard.min.js')}}"></script>

<!--  Bootstrap Table Plugin    -->
<script src="{{asset('js/bootstrap-table.js')}}"></script>

<!--  Plugin for DataTables.net  -->
<script src="{{asset('js/jquery.datatables.js')}}"></script>


<!--  Full Calendar Plugin    -->
{{--<script src="{{asset('js/fullcalendar.min.js"')}}"></script>--}}

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('js/demo.js')}}"></script>

<script type="text/javascript">
    $().ready(function () {
        lbd.checkFullPageBackgroundImage();

        setTimeout(function () {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
