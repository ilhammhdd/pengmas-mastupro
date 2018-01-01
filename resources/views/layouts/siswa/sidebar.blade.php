<div class="sidebar" data-color="azure" data-image="{{asset('img/full-screen-image-2.jpg')}}">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">

        <div class="user">
            <div class="info">
                <div class="photo">
                    {{--<img src="../assets/img/default-avatar.png"/>--}}
                </div>

                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
						<span>
							{{$siswa->nama}}
                            <b class="caret"></b>
						</span>
                </a>

                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{route('siswa.show_edit_profile')}}">
                                <span class="sidebar-mini"><i class="fa fa-pencil"></i></span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="Javascript:logout()">
                                <span class="sidebar-mini"><i class="pe-7s-close-circle"></i></span>
                                <span class="sidebar-normal">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
            <li>
                <a href="{{route('siswa.index')}}">
                    <i class="pe-7s-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="pe-7s-news-paper"></i>
                    <p>Test
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{route('test.show_all')}}">
                                <span class="sidebar-normal">Daftar Test</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('test.show_history')}}">
                                <span class="sidebar-normal">Riwayat Test</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
