<!-- Header
============================================= -->
<header id="header" class="style-1" data-scroll-index="0">

    <div id="header-wrap">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <a class="logo" href="#">
                        <img src="{{ asset('images/logo.png')}}" data-logo-alt="images/files/logo-alt.png" width="100"
                             alt="">
                        <h5><span class="colored">Medical</span></h5>
                        <span>Landing Template</span>
                    </a><!-- .logo end -->
                    <form action="{{route('logout')}}" method="post">
                        {{csrf_field()}}
                        <ul id="main-menu" class="main-menu">
                            <li><a data-scroll-nav="0" href="#header">Ini</a></li>
                            <li><a data-scroll-nav="1" href="#about">Isinya</a></li>
                            <li><a data-scroll-nav="2" href="#how">Menu</a></li>
                            <li><a data-scroll-nav="3" href="#partner">Untuk</a></li>
                            <li><a data-scroll-nav="4" href="#benefits">Admin</a></li>
                            <li>
                                <input type="submit" class="header-btn btn small colorful hover-transparent-colorful"
                                       value="Sign Out">
                            </li>
                        </ul>
                    </form>
                    <div class="mobile-menu-btn hamburger hamburger--slider">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                    </div><!-- .mobile-menu-btn -->
                    <div class="clearfix"></div>
                    <div id="mobile-menu"></div><!-- #mobile-menu end -->

                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- #header-wrap end -->

</header><!-- #header end -->