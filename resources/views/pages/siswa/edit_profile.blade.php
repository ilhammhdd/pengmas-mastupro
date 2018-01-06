@extends('layouts.master')

@section('title')
    Halaman Siswa
@endsection

@section('sidebar')
    @include('layouts.siswa.sidebar')
@endsection

@section('navbar')
    @include('layouts.siswa.navbar')
@endsection

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="card card-user">
            <div class="header">Edit Profile</div>
            <div class="content">
                <form id="form-edit-profile" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama</label>
                        <input id="nama" type="text" placeholder="Enter Nama" class="form-control" name="nama"
                               value="{{$siswa->nama}}">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <div class="row">
                            <div class="col-md-6">
                                <select id="kelas" name="kelas" class="selectpicker" data-title="Pilih Kelas"
                                        data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                    @foreach($kelas as $k)
                                        <option value="{{$k->id}}">{{$k->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
                </form>
            </div>
        </div>

        <div class="card card-user">
            <div class="header">Edit Username</div>
            <div class="content">
                <form id="form-edit-username" method="POST">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Username Lama</label>
                        <input id="old-username" type="text" placeholder="Enter Username Baru" class="form-control"
                               name="old_username"
                               value="{{$username}}" disabled>
                        <label>Username Baru</label>
                        <input id="new-username" type="text" placeholder="Enter Username Baru" class="form-control"
                               name="new_username"
                               value="">
                    </div>
                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
                </form>
            </div>
        </div>

        <div class="card card-user">
            <div class="header">Edit Password</div>
            <div class="content">
                <form id="form-edit-password" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Password Lama</label>
                        <input id="old-password" type="password" placeholder="Enter Password Lama" class="form-control"
                               name="old_password"
                               value="">
                    </div>
                    <p id="verify-old-password"></p>
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input id="new-password" type="password" placeholder="Enter Password Baru" class="form-control"
                               name="new_password"
                               value="">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password Baru</label>
                        <input id="confirm-new-password" type="password" placeholder="Konfirmasi Password Baru"
                               class="form-control" name="confirm_new_password"
                               value="">
                    </div>
                    <p id="verify-password"></p>

                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('other-js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('select[id="kelas"]').val('{{$siswa->kelas_id}}').change();
        });

        $('#form-edit-profile').submit(function (event) {
            event.preventDefault();

            var data = {};
            data.nama = $('#nama').val();
            data.kelas = $('#kelas').val();

            $.ajax({
                url: '{{route('siswa.edit_profile')}}',
                type: 'PUT',
                data: data,
                success: function (response) {
                    showNotif("fa fa-check", response.message, 2, 1800, 'top', 'right');

                    setTimeout(function () {
                        window.location = response.route;
                    }, 1850);
                },
                error: function (response) {
                }
            });
        });

        $('#form-edit-username').submit(function (event) {
            event.preventDefault();

            var data = {};
            data.old_username = $('#old-username').val();
            data.new_username = $('#new-username').val();

            $.ajax({
                url: '{{route('edit_username')}}',
                type: 'put',
                data: data,
                success: function (response) {
                    if (response.username_exists) {
                        showNotif("fa fa-exclamation", response.message, 4, 1800, 'top', 'right');
                    } else {
                        showNotif("fa fa-check", response.message, 2, 1800, 'top', 'right');
                        setTimeout(function () {
                            window.location = '{{route('siswa.show_edit_profile')}}';
                        }, 1850);
                    }
                },
                error: function (response) {
                }
            });
        });

        var password_verified = false;

        $('#old-password').on('keyup', function () {
            var old_password = $('#old-password').val();

            if (old_password == '') {
                $('#verify-old-password').html('Kolom tidak boleh kosong').css('color', 'red');
            } else {
                $('#verify-old-password').html('');
            }
        });

        $('#new-password, #confirm-new-password').on('keyup', function () {

            var new_password = $('#new-password').val();
            var confirm_new_password = $('#confirm-new-password').val();

            if (new_password == '' || confirm_new_password == '') {
                $('#verify-password').html('Kolom tidak boleh kosong').css('color', 'red');
                password_verified = false;
            } else if (new_password != confirm_new_password) {
                $('#verify-password').html('Password harus sesuai').css('color', 'red');
                password_verified = false;
            } else {
                $('#verify-password').html('');
                password_verified = true;
            }
        });

        $('#form-edit-password').submit(function (event) {
            event.preventDefault();

            var data = {};
            data.old_password = $('#old-password').val();
            data.new_password = $('#new-password').val();

            if (password_verified) {
                $.ajax({
                    url: '{{route('edit_password')}}',
                    type: 'PUT',
                    data: data,
                    success: function (response) {
                        if (response.old_password_verified) {
                            showNotif('fa fa-check', response.message, 2, 1800, 'top', 'right');
                            setTimeout(function () {
                                window.location = '{{route('siswa.show_edit_profile')}}';
                            }, 1850);
                        } else {
                            showNotif('fa fa-exclamation', response.message, 4, 1800, 'top', 'right');
                        }
                    },
                    error: function (response) {
                    }
                });
            } else {
                showNotif('fa fa-exclamation', "password tidak sesuai", 4, 1800, 'top', 'right')
            }
        });
    </script>
@endsection