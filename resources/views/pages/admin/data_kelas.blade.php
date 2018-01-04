@extends('layouts.master')

@section('title')
    Data Kelas
@endsection

@section('sidebar')
    @include('layouts.admin.sidebar')
@endsection

@section('navbar')
    @include('layouts.admin.navbar')
@endsection

@section('content')
    <div class="row" id="id">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Data Kelas</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <button type="button" style="margin-left: 15px;" class="btn btn-warning btn-fill btn-wd" data-toggle="modal" data-target="#addKelasModal">
                      Tambahkan Kelas
                    </button>
                    <table id="bootstrap-table-kelas" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <th data-field="id" class="text-center">Id Kelas</th>
                        <th data-field="nama" class="text-center">Nama Kelas</th>
                        <th data-field="actions" class="td-actions text-right"
                            data-events="operateEventsKelas" data-formatter="operateFormatterKelas">
                            Actions
                        </th>
                        </thead>
                        <tbody>
                        @foreach($dataKelas as $kelas)
                            <tr>
                                <td>{{$kelas->id}}</td>
                                <td>{{$kelas->nama}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addKelasModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Input Data Kelas</h4>
          </div>
          <div class="modal-body">
            <form id="addFormValidation" action="{{route('admin.add_data_kelas')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">Nama Kelas <star>*</star></label>
                    <input class="form-control"
                           name="namaKelas"
                           type="text"
                           required="true"
                    />
                </div>
                <div class="category"><star>*</star> Required fields</div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Batalkan</button>
              <button type="submit" class="btn btn-success btn-fill">Simpan Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="updateKelasModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Ubah Data Kelas</h4>
          </div>
          <div class="modal-body">
            <form id="updateFormValidation" action="{{route('admin.update_data_kelas')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">ID Kelas<star>*</star></label>
                    <input class="form-control"
                           name="updateIdKelas"
                           id="updateIdKelas"
                           type="text"
                           required="true"
                           readonly
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Kelas <star>*</star></label>
                    <input class="form-control"
                           name="updateNamaKelas"
                           id="updateNamaKelas"
                           type="text"
                           required="true"
                    />
                </div>
                <div class="category"><star>*</star> Required fields</div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Batalkan</button>
              <button type="submit" class="btn btn-success btn-fill">Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>


@endsection

@section('footer')
    @include('layouts.siswa.footer')
@endsection

@section('other-js')

    <script type="text/javascript">
        var $tableKelas = $('#bootstrap-table-kelas');

        function operateFormatterKelas(value, row, index) {
            return [
              '<a rel="tooltip" title="Ubah" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
                  '<i class="fa fa-edit"></i>',
              '</a>',
              '<a rel="tooltip" title="Hapus" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                  '<i class="fa fa-remove"></i>',
              '</a>'
            ].join('');
        }

        $().ready(function () {

            $('#addFormValidation').validate();
            $('#updateFormValidation').validate();

            window.operateEventsKelas = {
                'click .edit': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    document.getElementById("updateIdKelas").value = row.id;
                    document.getElementById("updateNamaKelas").value = row.nama;
                    $('#updateKelasModal').modal('show');

                    // swal('You click edit icon, row: ', info);
                    console.log(info);
                },
                'click .remove': function (e, value, row, index) {
                    console.log(row);

                    var kelas = {};
                    kelas.id = row['id'];
                    var json_kelas = JSON.stringify(kelas);
                    var parsed_kelas = JSON.parse(json_kelas);

                    swal({
                      title: 'Apakah anda ingin menghapus ?',
                      text: "Data akan terhapus selamanya",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'post',
                            url: '{{route('admin.delete_data_kelas')}}',
                            data: parsed_kelas,
                            success: function () {
                                console.log('Data kelas berhasil di hapus');
                                $tableKelas.bootstrapTable('remove', {
                                    field: 'id',
                                    values: [row.id]
                                });

                                showNotification('success', 'Data kelas berhasil di hapus');
                            },
                            error: function () {
                                console.log('gagal')
                                showNotification('danger', 'Data Kelas ' + row['nama'] + ' tidak dapat dhapus',);
                            }
                        });
                    })


                }
            };

            $tableKelas.bootstrapTable({
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
                $tableKelas.bootstrapTable('resetView');
            });
        });

    </script>
@endsection
