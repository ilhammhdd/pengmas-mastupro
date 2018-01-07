<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-success btn-fill btn-round btn-icon">
                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
            </button>
        </div>
        <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Malausma Student Profiling System</a>
          </div>
        <div id="finish-test-button">

        </div>

        {{--@if(session()->get('takingTest'))
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button class="btn btn-success btn-fill btn-wd">Success</button>
                </li>
            </ul>
        @endif--}}
    </div>
</nav>
