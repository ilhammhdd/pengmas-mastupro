<div class="sidebar" data-color="green" data-image="{{asset('img/full-screen-image-1.jpg')}}">
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="info">
                <div class="photo">
                    {{--<img src="../assets/img/default-avatar.png"/>--}}
                </div>

                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
            <span>
              Admin
              <b class="caret"></b>
            </span>
                </a>

                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        {{-- <li>
                            <a href="">
                                <span class="sidebar-mini"><i class="fa fa-pencil"></i></span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li> --}}
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
                <a href="{{route('admin.index')}}">
                    <i class="pe-7s-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsDataMaster">
                    <i class="pe-7s-notebook"></i>
                    <p>Data Master
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsDataMaster">
                    <ul class="nav">
                        <li>
                            <a href="{{route('admin.show_data_kelas')}}">
                                <span class="sidebar-normal">Data Kelas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.show_data_siswa')}}">
                                <span class="sidebar-normal">Data Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.show_data_guru')}}">
                                <span class="sidebar-normal">Data Guru</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.get_register_new_user')}}">
                                <i class=""></i>
                                <p>Aktivasi User</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#componentsDISC">
                    <i class="pe-7s-note"></i>
                    <p>DISC Test
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsDISC">
                    <ul class="nav">
                        <li>
                            <a href="{{route('admin.show_data_group_soal')}}">
                                <span class="sidebar-normal">Data Soal</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.show_data_test_history')}}">
                                <span class="sidebar-normal">Riwayat Test</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.show_pengaturan_data_soal')}}">
                                <span class="sidebar-normal">Pengaturan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
