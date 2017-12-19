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
                <form method="post" action="{{route('siswa.edit_profile')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama</label>
                        <input id="nama-guru" type="text" placeholder="Enter Nama" class="form-control" name="nama"
                               value="{{$siswa->nama}}">
                    </div>
                    <div class="form-group">
                        <label>NIS</label>
                        <input id="nik-guru" type="text" placeholder="Enter NIM" class="form-control" name="nis"
                               value="{{$siswa->nis}}">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <div class="row">
                            <div class="col-md-6">
                                <select name="cities" class="selectpicker" data-title="Pilih Kelas"
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
            <div class="header">Edit Password</div>
            <div class="content">
                <form id="form-edit-password" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input id="new-password" type="password" placeholder="Enter Password Baru" class="form-control"
                               name="new_password"
                               value="">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password Baru</label>
                        <input id="confirm-new-guru" type="password" placeholder="Konfirmasi Password Baru"
                               class="form-control" name="confirm_new_password"
                               value="">
                    </div>

                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('other-js')
    <script type="text/javascript">
        $('#form-edit-password').submit(function (event) {
            event.preventDefault();

            var data = {};
            data.new_password = $('#new-password').val();

            $.ajax({
                url: '{{route('edit_password')}}',
                type: 'post',
                data: data,
                success: function () {
                    console.log("sukses");
                    logout();
                },
                error: function () {
                    console.log("gagal");
                }
            });
        });
    </script>
@endsection