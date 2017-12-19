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
<body>
<div class="wrapper">
    @yield('sidebar')

    <div class="main-panel">
        @yield('navbar')

        <div class="main-content">
            <div class="container-fluid">
                <div id="content">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
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
        $(window).on('load', function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            getSelectedAnswers();
            checkFinishDiscTest();
        });

        var jsonRadioMost = JSON.parse(localStorage.getItem("radioMost")) || {};
        var jsonRadioLeast = JSON.parse(localStorage.getItem("radioLeast")) || {};
        var radioMosts;
        var radioLeasts;

        function checkFinishDiscTest() {
            if (localStorage.getItem("radioMost") != null && localStorage.getItem("radioLeast") != null) {
                if (Object.keys(jsonRadioMost).length == 24 && Object.keys(jsonRadioLeast).length == 24) {
                    $('#finish-test-button').html('<ul class="nav navbar-nav navbar-right"><li><button id="button-submit" onclick="submitTest()" class="btn btn-success btn-fill btn-wd">Submit</button></li></ul>');
                }
            }
        }

        function getSelectedAnswers() {
            for (radioMosts in jsonRadioMost) {
                var a = $("input[name='" + radioMosts + "'][value='" + jsonRadioMost[radioMosts] + "']");
                if (a != null) {
                    a.attr('checked', true);
                }

            }

            for (radioLeasts in jsonRadioLeast) {
                var b = $("input[name='" + radioLeasts + "'][value='" + jsonRadioLeast[radioLeasts] + "']");
                if (b != null) {
                    b.attr('checked', true);
                }
            }
        }

        var prevRadioLeast;
        var prevRadioMost;

        function radioMostClicked(name, value, discGroupNomor, discSoalNomor) {
            if (prevRadioLeast != null) {
                $(prevRadioLeast).attr('disabled', false);
            }
            prevRadioLeast = "#radioLeastId" + discGroupNomor + discSoalNomor;
            jsonRadioMost[name] = value;
            localStorage.setItem("radioMost", JSON.stringify(jsonRadioMost));
            $('#radioLeastId' + discGroupNomor + discSoalNomor).attr('disabled', true);
        }

        function radioLeastClicked(name, value, discGroupNomor, discSoalNomor) {
            if (prevRadioMost != null) {
                $(prevRadioMost).attr('disabled', false);
            }
            prevRadioMost = "#radioMostId" + discGroupNomor + discSoalNomor;
            jsonRadioLeast[name] = value;
            localStorage.setItem("radioLeast", JSON.stringify(jsonRadioLeast));
            $('#radioMostId' + discGroupNomor + discSoalNomor).attr('disabled', true);
        }

        function submitTest() {
            var data = {};

            var radioMost = [];
            var finalRadioMost;

            for (finalRadioMost in jsonRadioMost) {
                radioMost.push(jsonRadioMost[finalRadioMost]);
            }

            data.radioMost = radioMost;

            var radioLeast = [];
            var finalRadioLeast;

            for (finalRadioLeast in jsonRadioLeast) {
                radioLeast.push(jsonRadioLeast[finalRadioLeast]);
            }

            data.radioLeast = radioLeast;

            data.testId = localStorage.getItem("idTest");

            $.ajax({
                url: '{{route('test.submit_test')}}',
                type: 'post',
                data: data,
                success: function (response) {
                    console.log(response);
                    window.localStorage.clear();
                    window.location = response.route;
                },
                error: function (response) {
                    console.log(response);
                }
            });
        }

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

    @yield('other-js')
</div>
</body>

</html>
