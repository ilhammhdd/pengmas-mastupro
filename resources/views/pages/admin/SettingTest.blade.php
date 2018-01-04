@extends('layouts.master')

@section('title')
    Pengaturan
@endsection

@section('sidebar')
    @include('layouts.admin.sidebar')
@endsection

@section('navbar')
    @include('layouts.admin.navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Daftar Test</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nama Test</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dataTest as $test)
                            <tr>
                                <td class="text-center">{{$test->id}}</td>
                                <td>{{$test->nama}}</td>
                                @if($test->status)
                                    <td style="color:green;"><b>Terbuka</b></td>
                                    <td class="td-actions text-center">
                                        <input id="{{$test->id}}" type="checkbox" data-toggle="switch" checked=""
                                          onchange="onClickHandler({{$test->id}})"
                                          data-off-text="<i class='fa fa-times'></i>"
                                          data-on-text="<i class='fa fa-check'></i>"
                                        />
                                    </td>
                                @else
                                    <td style="color:red;"><b>Tertutup</b></td>
                                    <td class="td-actions text-center">
                                        <inpu id="{{$test->id}}"t type="checkbox" data-toggle="switch"
                                          onchange="onClickHandler({{$test->id}})"
                                          data-off-text="<i class='fa fa-times'></i>"
                                          data-on-text="<i class='fa fa-check'></i>"
                                        />
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('other-js')
    <script type="text/javascript">

        function onClickHandler(idTest){
            var status = document.getElementById(idTest).checked;

            if (status){
              setEnrollmentKeyOn(idTest);
            } else {
              setEnrollmentKeyOff(idTest);
            }
        }

        function setEnrollmentKeyOn(idTest) {
            swal({
                title: 'Masukkan enrollment key baru',
                html: '<div class="form-group">' +
                '<input id="enrollment-key" type="text" class="form-control" />' +
                '</div>',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-info btn-fill',
                cancelButtonClass: 'btn btn-danger btn-fill',
                buttonsStyling: false,
                allowOutsideClick: false
            }).then(function (result) {
                console.log('dapatnya');

                var data = {};
                data.idTest = idTest;
                data.enrollmentKey = $('#enrollment-key').val();

                $.ajax({
                    url: '{{route('admin.open_test')}}',
                    type: "post",
                    data: data,
                    success: function (response) {
                        console.log(response);
                        if (response.status) {
                          showNotification('success', data.message);
                          location.reload();
                        } else {
                          showNotification('danger', data.message);
                          location.reload();
                        }
                    },
                    error: function (response) {
                        console.log(result)
                        showNotification('danger', 'Terjadi Kesalahan');
                    }
                });
            }).catch(swal.noop)
        }

        function setEnrollmentKeyOff(idTest) {
            swal({
              title: 'Apakah Yakin ?',
              text: "Ingin menutup test",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Tutup Test!'
            }).then(function (result) {
                console.log('dapatnya');

                var data = {};
                data.idTest = idTest;
                $.ajax({
                    url: '{{route('admin.close_test')}}',
                    type: "post",
                    data: data,
                    success: function (response) {
                        console.log(response);
                        if (response.status) {
                          showNotification('success', data.message);
                          location.reload();
                        } else {
                          showNotification('danger', data.message);
                          location.reload();
                        }
                    },
                    error: function (response) {
                        console.log(result)
                        showNotification('danger', 'Terjadi Kesalahan');
                    }
                });
            }).catch(swal.noop)
        }

    </script>
@endsection
