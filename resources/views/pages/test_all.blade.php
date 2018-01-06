@extends('layouts.master')

@section('title')
    Semua Test
@endsection

@section('sidebar')
    @if(session()->get('the_role')=="admin")
        @include('layouts.admin.sidebar')
    @elseif(session()->get('the_role') == "guru")
        @include('layouts.guru.sidebar')
    @elseif(session()->get('the_role') == "siswa")
        @include('layouts.siswa.sidebar')
    @endif
@endsection

@section('navbar')
    @if(session()->get('the_role')=="admin")
        @include('layouts.admin.sidebar')
    @elseif(session()->get('the_role') == "guru")
        @include('layouts.guru.navbar')
    @elseif(session()->get('the_role') == "siswa")
        @include('layouts.siswa.navbar')
    @endif
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
                        @foreach($tests as $test)
                            <tr>
                                <td class="text-center">{{$test->id}}</td>
                                <td>{{$test->nama}}</td>
                                @if($test->status)
                                    <td style="color:green;"><b>Terbuka</b></td>
                                    <td class="td-actions text-center">
                                        <a href="Javascript:openEnrollmentModal('{{$test->id}}','{{$test->nama}}')"
                                           rel="tooltip"
                                           title="Mulai Test"
                                           class="btn btn-info btn-simple btn-lg" style="opacity: 1;">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </td>
                                @else
                                    <td style="color:red;"><b>Tertutup</b></td>
                                    <td class="td-actions text-center">
                                        <a href="#" rel="tooltip" title="View Profile"
                                           class="btn btn-info btn-simple btn-lg disabled" style="opacity: 1;">
                                            <i class="fa fa-circle red"></i>
                                        </a>
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
        function openEnrollmentModal(idTest, namaTest) {
            console.log(idTest + " " + namaTest);

            swal({
                title: 'Masukkan enrollment key',
                html: '<div class="form-group">' +
                '<input id="enrollment-key" type="text" class="form-control" />' +
                '</div>',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-info btn-fill',
                cancelButtonClass: 'btn btn-danger btn-fill',
                buttonsStyling: false,
                allowOutsideClick: false
            }).then(function (result) {
                var data = {};
                data.idTest = idTest;
                data.namaTest = namaTest;
                data.enrollmentKey = $('#enrollment-key').val();

                $.ajax({
                    url: '{{route('test.check_enrollment_key')}}',
                    type: "post",
                    data: data,
                    success: function (response) {
                        if (response.key_verified) {
                            window.localStorage.setItem("idTest", idTest);
                            showNotif("fa fa-check", response.message, 2, 1200, 'top', 'right');
                            setTimeout(function () {
                                window.location = '{{route('test.show_disc_test')}}';
                            }, 1240);
                        } else {
                            showNotif("fa fa-exclamation", response.message, 4, 1800, 'top', 'right');
                        }
                    },
                    error: function (result) {
                    }
                });
            }).catch(swal.noop)
        }

        function getTest(test) {
            console.log('getTest method executed');
            var data = {};

            data.testName = test;

            $.ajax({
                url: '{{route('test.show_disc_test')}}',
                type: "get",
                data: data,
                success: function (response) {
                    console.log(response);
                    $('#content').html(response.content);
                    $('#other_js').html(response.other_js);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        }
    </script>
@endsection
