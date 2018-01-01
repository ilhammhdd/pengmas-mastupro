@extends('layouts.master')

@section('title')
    Data Guru
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
                    <h4 class="title">Data Guru</h4>
                </div>
                <div  class="fresh-datatables">
                    <button type="button" style="margin-left: 15px;" class="btn btn-warning btn-fill btn-wd" data-toggle="modal" data-target="#addGuruModal">
                      Tambahkan Guru
                    </button>
                    <table id="bootstrap-table-guru" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <th data-field="id" class="text-center">ID Account</th>
                        <th data-field="nik" class="text-center">NIK</th>
                        <th data-field="nama" class="text-center">Nama Guru</th>
                        <th data-field="createdAt" class="text-center">Tgl Registrasi</th>
                        <th data-field="" class="text-center">Aktivasi Akun</th>
                        <th data-field="actions" class="td-actions text-right"
                            data-events="operateEventsGuru">
                            Actions
                        </th>
                        </thead>
                        <tbody>
                        @foreach($dataGuru as $guru)
                            <tr>
                                <td>{{$guru->id}}</td>
                                <td>{{$guru->nik}}</td>
                                <td class="text-left">{{$guru->nama}}</td>
                                <td>{{$guru->created_at->formatLocalized('%d %B %Y')}}</td>
                                <td>
                                  @if($guru->guruAccount()->first() != null)
                                    <button type="button" onclick="deActivate('{{$guru->id}}','{{$guru->nik}}','{{$guru->nama}}')" style="margin-left: 15px;" class="btn btn-info btn-fill btn-sm" data-toggle="modal" data-target="#addKelasModal">
                                      Deactivate
                                    </button>
                                  @else
                                    <button type="button" onclick="activate('{{$guru->id}}','{{$guru->nik}}','{{$guru->nama}}')" style="margin-left: 15px;" class="btn btn-default btn-fill btn-sm" data-toggle="modal" data-target="#addKelasModal">
                                      Activate
                                    </button>
                                  @endif
                                </td>
                                <td>
                                  @if($guru->guruAccount()->first() != null)
                                    <a rel="tooltip" title="Reset Akun" class="btn btn-simple btn-info btn-icon table-action resetAkun" href="javascript:void(0)">
                                        <i class="fa fa-key"></i>
                                    </a>
                                    <a rel="tooltip" title="Ubah" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a rel="tooltip" title="Hapus" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                  @else
                                    <a rel="tooltip" title="Ubah" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a rel="tooltip" title="Hapus" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                  @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addGuruModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Input Data Guru</h4>
          </div>
          <div class="modal-body">
            <form id="addFormValidation" action="{{route('admin.add_data_guru')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">NIK <star>*</star></label>
                    <input class="form-control"
                           name="nikGuru"
                           type="number"
                           required="true"
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Guru <star>*</star></label>
                    <input class="form-control"
                           name="namaGuru"
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

    <div class="modal fade" id="updateGuruModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Ubah Data Guru</h4>
          </div>
          <div class="modal-body">
            <form id="updateFormValidation" action="{{route('admin.update_data_guru')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">ID Account</label>
                    <input class="form-control"
                           name="updateIdGuru"
                           id="updateIdGuru"
                           type="text"
                           required="true"
                           readonly
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">NIK <star>*</star></label>
                    <input class="form-control"
                           name="updateNikGuru"
                           id="updateNikGuru"
                           type="text"
                           required="true"
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Guru <star>*</star></label>
                    <input class="form-control"
                           name="updateNamaGuru"
                           id="updateNamaGuru"
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

    <div class="modal fade" id="rpGuruModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
          </div>
          <div class="modal-body">
            <form id="rpFormValidation" action="{{route('admin.reset_password_guru')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">NIS <star>*</star></label>
                    <input class="form-control"
                           name="rpNikGuru"
                           id="rpNikGuru"
                           type="text"
                           readonly
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Username Baru (Optional) <star>*</star></label>
                    <input class="form-control"
                           name="newUsername"
                           id="newUsername"
                           type="text"
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Password Baru (Optional) <star>*</star></label>
                    <input class="form-control"
                           name="newPass"
                           id="newPass"
                           type="password"
                    />
                </div>
                <div class="category"><star>*</star> Required fields</div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Batalkan</button>
              <button type="submit" class="btn btn-success btn-fill">Reset Akun</button>
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
        var $tableGuru = $('#bootstrap-table-guru');

        function activate(id, nik, namaGuru){
          // alert(id + ' ' + nis + ' ' + namaSiswa + ' ' + kelasId);
          var guru = {};
          guru.id = id;
          guru.nik = nik;
          guru.nama = namaGuru;

          var json_guru = JSON.stringify(guru);
          var parsed_guru = JSON.parse(json_guru);
          console.log(parsed_guru.nama);

          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'post',
              url: '{{route('admin.post_register_new_user_guru')}}',
              data: parsed_guru,
              success: function () {
                  console.log('guru telah ditambahkan sebagai user atas nama ' + parsed_guru.nama);
                  location.reload();
              },
              error: function () {
                  console.log('gagal')
              }
          });
        }

        function deActivate(id, nik, namaGuru){
          // alert(id + ' ' + nis + ' ' + namaSiswa + ' ' + kelasId);
          var guru = {};
          guru.id = id;
          guru.nik = nik;
          guru.nama = namaGuru;

          var json_guru = JSON.stringify(guru);
          var parsed_guru = JSON.parse(json_guru);
          console.log(parsed_guru.nama);

          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'post',
              url: '{{route('admin.post_delete_user_guru')}}',
              data: parsed_guru,
              success: function () {
                  console.log('user guru telah berhasil dihapus ');
                  location.reload();
              },
              error: function () {
                  console.log('gagal')
              }
          });

        }

        $().ready(function () {

            $('#addFormValidation').validate();
            $('#updateFormValidation').validate();
            $('#rpFormValidation').validate();

            window.operateEventsGuru = {
                'click .edit': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    document.getElementById("updateIdGuru").value = row.id;
                    document.getElementById("updateNikGuru").value = row.nik;
                    document.getElementById("updateNamaGuru").value = row.nama;

                    $('#updateGuruModal').modal('show');

                    // swal('You click edit icon, row: ', info);
                },
                'click .resetAkun': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    document.getElementById("rpNikGuru").value = row.nik;

                    $('#rpGuruModal').modal('show');

                },
                'click .remove': function (e, value, row, index) {
                    console.log(row);

                    var guru = {};
                    guru.nik = row['nik'];
                    var json_guru = JSON.stringify(guru);
                    var parsed_guru = JSON.parse(json_guru);

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
                            url: '{{route('admin.delete_data_guru')}}',
                            data: parsed_guru,
                            success: function () {
                                console.log('Data guru berhasil di hapus');
                                $tableGuru.bootstrapTable('remove', {
                                    field: 'nik',
                                    values: [row.nik]
                                });
                                showNotification('success', 'Data guru berhasil di hapus');

                            },
                            error: function () {
                                console.log('gagal')

                                showNotification('danger', 'Data guru gagal di hapus');

                            }
                        });
                    })
                }
            };

            $tableGuru.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 20,
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
                $tableGuru.bootstrapTable('resetView');
            });
        });

    </script>
@endsection
