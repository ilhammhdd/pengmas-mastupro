@extends('layouts.master')

@section('title')
    Data Siswa
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
                    <h4 class="title">Data Siswa</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <button type="button" style="margin-left: 15px;" class="btn btn-warning btn-fill btn-wd" data-toggle="modal" data-target="#addSiswaModal">
                      Tambahkan Siswa
                    </button>
                    <table id="bootstrap-table-siswa" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <th data-field="id" class="text-center">ID Account</th>
                        <th data-field="nis" class="text-center">NIS</th>
                        <th data-field="nama" class="text-center">Nama Siswa</th>
                        <th data-field="kelas" class="text-center">Kelas</th>
                        <th data-field="createdAt" class="text-center">Tgl Registrasi</th>
                        <th data-field="" class="text-center">Aktivasi Akun</th>
                        <th data-field="actions" class="td-actions text-right"
                            data-events="operateEventsSiswa">
                            Actions
                        </th>
                        </thead>
                        <tbody>
                        @foreach($dataSiswa as $siswa)
                            <tr>
                                <td>{{$siswa->id}}</td>
                                <td>{{$siswa->nis}}</td>
                                <td class="text-left">{{$siswa->nama}}</td>
                                <td>{{$siswa->kelas()->first()->nama}}</td>
                                <td>{{$siswa->created_at->formatLocalized('%d %B %Y')}}</td>
                                <td>
                                  @if($siswa->siswaAccount()->first() != null)
                                    <button type="button" onclick="deActivate('{{$siswa->id}}','{{$siswa->nis}}','{{$siswa->nama}}','{{$siswa->kelas()->first()->id}}')" style="margin-left: 15px;" class="btn btn-info btn-fill btn-sm" data-toggle="modal" data-target="#addKelasModal">
                                      Deactivate
                                    </button>
                                  @else
                                    <button type="button" onclick="activate('{{$siswa->id}}','{{$siswa->nis}}','{{$siswa->nama}}','{{$siswa->kelas()->first()->id}}')" style="margin-left: 15px;" class="btn btn-default btn-fill btn-sm" data-toggle="modal" data-target="#addKelasModal">
                                      Activate
                                    </button>
                                  @endif
                                </td>
                                <td>
                                  @if($siswa->siswaAccount()->first() != null)
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
    <div class="modal fade" id="addSiswaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Input Data Siswa</h4>
          </div>
          <div class="modal-body">
            <form id="addFormValidation" action="{{route('admin.add_data_siswa')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">NIS <star>*</star></label>
                    <input class="form-control"
                           name="nisSiswa"
                           type="number"
                           required="true"
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Siswa <star>*</star></label>
                    <input class="form-control"
                           name="namaSiswa"
                           type="text"
                           required="true"
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Kelas <star>*</star></label>
                    <select name="kelasId" class="selectpicker" data-title="Pilih Kelas" data-style="btn-info btn-fill btn-block" data-menu-style="dropdown-blue">
                        @foreach ($dataKelas as $kelas)
                          <option value="{{$kelas->id}}">{{$kelas->nama}}</option>
                        @endforeach
                    </select>
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

    <div class="modal fade" id="updateSiswaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Ubah Data Guru</h4>
          </div>
          <div class="modal-body">
            <form id="updateFormValidation" action="{{route('admin.update_data_siswa')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">ID Account</label>
                    <input class="form-control"
                           name="updateIdSiswa"
                           id="updateIdSiswa"
                           type="text"
                           required="true"
                           readonly
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">NIS <star>*</star></label>
                    <input class="form-control"
                           name="updateNisSiswa"
                           id="updateNisSiswa"
                           type="text"
                           required="true"
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Siswa <star>*</star></label>
                    <input class="form-control"
                           name="updateNamaSiswa"
                           id="updateNamaSiswa"
                           type="text"
                           required="true"
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Kelas <star>*</star></label>
                    <select name="updateKelasId" id="updateKelasId" class="selectpicker" data-title="Pilih Kelas" data-style="btn-info btn-fill btn-block" data-menu-style="dropdown-blue">
                        @foreach ($dataKelas as $kelas)
                          <option value="{{$kelas->id}}">{{$kelas->nama}}</option>
                        @endforeach
                    </select>
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

    <div class="modal fade" id="rpSiswaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
          </div>
          <div class="modal-body">
            <form id="rpFormValidation" action="{{route('admin.reset_password_siswa')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">NIS <star>*</star></label>
                    <input class="form-control"
                           name="rpNisSiswa"
                           id="rpNisSiswa"
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
              <button type="submit" class="btn btn-success btn-fill">Reset Password</button>
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
        var $tableSiswa = $('#bootstrap-table-siswa');

        function activate(id, nis, namaSiswa, kelasId){
          // alert(id + ' ' + nis + ' ' + namaSiswa + ' ' + kelasId);
          var siswa = {};
          siswa.id = id;
          siswa.nis = nis;
          siswa.nama = namaSiswa;
          siswa.kelas = kelasId;

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
                  location.reload();
              },
              error: function () {
                  console.log('gagal')
              }
          });
        }

        function deActivate(id, nis, namaSiswa, kelasId){
          // alert(id + ' ' + nis + ' ' + namaSiswa + ' ' + kelasId);
          var siswa = {};
          siswa.id = id;
          siswa.nis = nis;
          siswa.nama = namaSiswa;
          siswa.kelas = kelasId;

          var json_siswa = JSON.stringify(siswa);
          var parsed_siswa = JSON.parse(json_siswa);
          console.log(parsed_siswa.nama);

          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'post',
              url: '{{route('admin.post_delete_user_siswa')}}',
              data: parsed_siswa,
              success: function () {
                  console.log('user siswa telah berhasil dihapus ');
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

            window.operateEventsSiswa = {
                'click .edit': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    document.getElementById("updateIdSiswa").value = row.id;
                    document.getElementById("updateNisSiswa").value = row.nis;
                    document.getElementById("updateNamaSiswa").value = row.nama;

                    $('#updateSiswaModal').modal('show');

                    // swal('You click edit icon, row: ', info);
                },
                'click .resetAkun': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    document.getElementById("rpNisSiswa").value = row.nis;

                    $('#rpSiswaModal').modal('show');

                },
                'click .remove': function (e, value, row, index) {
                    console.log(row);

                    var siswa = {};
                    siswa.nis = row['nis'];
                    var json_siswa = JSON.stringify(siswa);
                    var parsed_siswa = JSON.parse(json_siswa);

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
                            url: '{{route('admin.delete_data_siswa')}}',
                            data: parsed_siswa,
                            success: function () {
                                console.log('Data siswa berhasil di hapus');
                                $tableSiswa.bootstrapTable('remove', {
                                    field: 'nis',
                                    values: [row.nis]
                                });

                                showNotification('success', 'Data siswa berhasil di hapus');

                            },
                            error: function () {
                                console.log('gagal')
                                showNotification('danger', 'Data siswa gagal di hapus');
                            }
                        });
                    })
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
                $tableSiswa.bootstrapTable('resetView');
            });
        });

    </script>
@endsection
