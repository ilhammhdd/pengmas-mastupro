@extends('layouts.master')

@section('title')
    Register New User
@endsection

@section('sidebar')
    @include('layouts.admin.sidebar')
@endsection

@section('navbar')
    @include('layouts.admin.navbar')
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Daftar Siswa</h4>
                    <p class="category">Buat account dari list siswa</p>
                </div>
                <div class="content">
                    <div class="row">
                        <table id="bootstrap-table-siswa" class="table">
                            <thead>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="id" class="text-center">ID</th>
                            <th data-field="nis" data-sortable="true">NIS</th>
                            <th data-field="nama" data-sortable="true">Nama</th>
                            <th data-field="kelas" data-sortable="true">Kelas</th>
                            <th data-field="actions" class="td-actions text-right"
                                data-events="operateEventsSiswa" data-formatter="operateFormatterSiswa">
                                Actions
                            </th>
                            </thead>
                            <tbody>
                            @foreach($siswas as $siswa)
                                <tr>
                                    <td></td>
                                    <td>{{$siswa->id}}</td>
                                    <td>{{$siswa->nis}}</td>
                                    <td>{{$siswa->nama}}</td>
                                    <td>{{$siswa->kelas()->first()->nama}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Daftar Guru</h4>
                    <p class="category">Buat account dari list guru</p>
                </div>
                <div class="content">
                    <div class="row">
                        <table id="bootstrap-table-guru" class="table">
                            <thead>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="id" class="text-center">ID</th>
                            <th data-field="nik" data-sortable="true">NIK</th>
                            <th data-field="nama" data-sortable="true">Nama</th>
                            <th data-field="actions" class="td-actions text-right"
                                data-events="operateEventsGuru" data-formatter="operateFormatterGuru">
                                Actions
                            </th>
                            </thead>
                            <tbody>
                            @foreach($gurus as $guru)
                                <tr>
                                    <td></td>
                                    <td>{{$guru->id}}</td>
                                    <td>{{$guru->nik}}</td>
                                    <td>{{$guru->nama}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('footer')
    @include('layouts.admin.footer')
@endsection

@section('other-js')
    <script type="text/javascript">
        var $tableSiswa = $('#bootstrap-table-siswa');
        var $tableGuru = $('#bootstrap-table-guru');

        function operateFormatterSiswa(value, row, index) {
            return [
                '<a rel="tooltip" title="Tambahkan" class="btn btn-simple btn-info btn-icon table-action tambahkan" href="javascript:void(0)">',
                '<i class="fa fa-user-plus"></i>',
                '</a>'
            ].join('');
        }
        function operateFormatterGuru(value, row, index) {
            return [
                '<a rel="tooltip" title="Tambahkan" class="btn btn-simple btn-info btn-icon table-action tambahkan" href="javascript:void(0)">',
                '<i class="fa fa-user-plus"></i>',
                '</a>'
            ].join('');
        }

        $().ready(function () {
            window.operateEventsSiswa = {
                'click .tambahkan': function (e, value, row, index) {
                    var siswa = {};
                    siswa.id = row['id'];
                    siswa.nis = row['nis'];
                    siswa.nama = row['nama'];
                    siswa.kelas = row['kelas'];

                    var json_siswa = JSON.stringify(siswa);
                    var parsed_siswa = JSON.parse(json_siswa);
                    console.log(parsed_siswa.nama);

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: '{{route('admin.post_register_new_user_siswa')}}',
                        data: parsed_siswa,
                        success: function () {
                            console.log('siswa telah ditambahkan sebagai user atas nama ' + parsed_siswa.nama);
                            $tableSiswa.bootstrapTable('remove', {
                                field: 'id',
                                values: [row.id]
                            });
                        },
                        error: function () {
                            console.log('gagal')
                        }
                    });
                }
            };
            window.operateEventsGuru = {
                'click .tambahkan': function (e, value, row, index) {
                    var guru = {};
                    guru.id = row['id'];
                    guru.nik = row['nik'];
                    guru.nama = row['nama'];

                    var json_guru = JSON.stringify(guru);
                    var parsed_guru = JSON.parse(json_guru);
                    console.log(parsed_guru);

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: '{{route('admin.post_register_new_user_guru')}}',
                        data: parsed_guru,
                        success: function () {
                            console.log('guru telah ditambahkan sebagai user atas nama ' + parsed_guru.nama);
                            $tableGuru.bootstrapTable('remove', {
                                field: 'id',
                                values: [row.id]
                            });
                        },
                        error: function () {
                            console.log('gagal ' + parsed_guru.id);
                            console.log('gagal ' + parsed_guru.nik);
                            console.log('gagal ' + parsed_guru.nama);
                        }
                    });
                }
            };

            $tableSiswa.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 8,
                clickToSelect: false,
                pageList: [8, 10, 25, 50, 100],

                formatShowingRows: function (pageFrom, pageTo, totalRows) {
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function (pageNumber) {
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });

            $tableGuru.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 8,
                clickToSelect: false,
                pageList: [8, 10, 25, 50, 100],

                formatShowingRows: function (pageFrom, pageTo, totalRows) {
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function (pageNumber) {
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });

            //activate the tooltips after the data table is initialized
            $('[rel="tooltip"]').tooltip();

            $(window).resize(function () {
                $tableSiswa.bootstrapTable('resetView');
                $tableGuru.bootstrapTable('resetView');
            });


        });

    </script>
@endsection
