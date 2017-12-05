<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('elite_admin_hospital/plugins/images/favicon.png')}}">
    <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('elite_admin_hospital/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('elite_admin_hospital/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}"
          rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('elite_admin_hospital/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}"
          rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('elite_admin_hospital/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('elite_admin_hospital/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('elite_admin_hospital/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('elite_admin_hospital/css/colors/megna.css')}}" id="theme" rel="stylesheet">
@yield('other-css-import')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                                      data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part" style="padding-left:60px;">
                <a class="logo" href="{{route('healthcare.home')}}">
                    <b>
                        <img src="{{asset('images/logo-resized.png')}}" alt="home"/>
                    </b>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                    <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light">
                        <i class="icon-arrow-left-circle ti-menu"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span></div>
                    <!-- /input-group -->
                </li>
                <li class="user-pro">
                    <a href="#" class="waves-effect"><img
                                src="{{asset('images/logo-pindad.jpg')}}" alt="user-img"
                                class="img-circle"> <span class="hide-menu">{{$healthcare->nama}}<span
                                    class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                        class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none;">
                                {{csrf_field()}}
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap m-t-10">--- Main Menu</li>
                <li><a href="{{route('healthcare.home')}}" class="waves-effect"><i class="ti-dashboard p-r-10"></i>
                        <span
                                class="hide-menu">Dashboard</span></a></li>

                {{--<li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="icon-envelope p-r-10"></i> <span
                                class="hide-menu"> Mailbox <span class="fa arrow"></span><span
                                    class="label label-rouded label-danger pull-right">6</span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="inbox.html">Inbox</a></li>
                        <li><a href="inbox-detail.html">Inbox detail</a></li>
                        <li><a href="compose.html">Compose mail</a></li>
                    </ul>
                </li>--}}
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-user p-r-10"></i>
                        <span class="hide-menu">Patient<span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{route('healthcare.show_register_new_patient')}}">Register New Patient</a></li>
                        <li><a href="#others-clicked">Other Menu</a></li>
                    </ul>
                </li>
                {{--<li class="hide-menu">
                    <a href="javacript:void(0);">
                        <span>Progress Report</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 85%" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                            </div>
                        </div>
                        <span>Leads Report</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 85%" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                            </div>
                        </div>
                    </a>
                </li>--}}
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content-rows')
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in</footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{asset('elite_admin_hospital/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('elite_admin_hospital/bootstrap/dist/js/tether.min.js')}}"></script>
<script src="{{asset('elite_admin_hospital/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('elite_admin_hospital/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('elite_admin_hospital/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('elite_admin_hospital/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('elite_admin_hospital/js/waves.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('elite_admin_hospital/plugins/bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{asset('elite_admin_hospital/plugins/bower_components/morrisjs/morris.js')}}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{asset('elite_admin_hospital/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jQuery peity -->
<script src="{{asset('elite_admin_hospital/plugins/bower_components/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('elite_admin_hospital/plugins/bower_components/peity/jquery.peity.init.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('elite_admin_hospital/js/custom.min.js')}}"></script>
<script src="{{asset('elite_admin_hospital/js/dashboard1.js')}}"></script>
<!--Style Switcher -->
<script src="{{asset('elite_admin_hospital/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
@yield('other-js-import')
{{-- Firebase Realtime Database --}}
@yield('other-js')
</body>
</html>
