@extends('layouts.master')

@section('title')
    Data Soal DISC
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
                    <h4 class="title">Data Soal DISC</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <button type="button" style="margin-left: 15px;" class="btn btn-warning btn-fill btn-wd" onclick="newGroupId()">
                      Tambahkan Group Soal
                    </button><br>
                    <table class="table">
                        <thead>
                        <th data-field="id" class="text-center">ID Group Soal</th>
                        <th data-field="data-soal" colspan="3" class="text-left">Data Group Soal</th>
                        <th data-field="actions" class="td-actions text-right">
                            Actions
                        </th>
                        </thead>
                        <tbody>
                        @foreach($dataDiscSoal as $groupSoal)
                            <tr class="info">
                                <td class="text-center">
                                    {{$groupSoal->id}}
                                </td>
                                <td colspan="3">
                                    Pertanyaan Group Soal {{$groupSoal->nomor}}
                                </td>
                                <td class="text-right">
                                    <a rel="tooltip" title="Tambah Soal" class="btn btn-simple btn-warning btn-icon table-action" onclick="addSoal({{$groupSoal->nomor}})">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <a rel="tooltip" title="Hapus" class="btn btn-simple btn-danger btn-icon table-action removeGroupSoal" onclick="deleteGroupSoal({{$groupSoal->id}})">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                              <thead>
                              <th data-field="id-soal" class="text-center">ID Soal</th>
                              <th data-field="data-soal" class="text-left">Soal</th>
                              <th data-field="data-kunci-plus" class="text-center">Kunci Plus</th>
                              <th data-field="data-kunci-minus" class="text-center">Kunci Minus</th>
                              <th data-field="actions" class="td-actions text-right"
                                  data-events="operateEventsGuru">
                                  Actions
                              </th>
                              </thead>
                            </tr>
                            <tbody>
                              @if ($groupSoal->discSoal()->get()->first())
                                @foreach ($groupSoal->discSoal()->get() as $soal)
                                  <tr>
                                    <td class="text-center">
                                          {{ $soal->id }} )
                                    </td>
                                    <td>
                                          {{ $soal->soal }}
                                    </td>
                                    <td class="text-center">
                                          {{ $soal->kunci_plus }}
                                    </td>
                                    <td class="text-center">
                                          {{ $soal->kunci_minus }}
                                    </td>
                                    <td class="text-right">
                                        <a rel="tooltip" title="Ubah" class="btn btn-simple btn-info btn-icon table-action" onclick="updateSoal({{$groupSoal->id}}, {{ $soal }})">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a rel="tooltip" title="Hapus" class="btn btn-simple btn-danger btn-icon table-action" onclick="deleteSoal({{$soal->id}})">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </td>
                                  </tr>
                                @endforeach
                              @else
                                <tr class="info">
                                  <td class="text-center" colspan="5" >Belum Ada Data Soal</td>
                                </tr>
                              @endif

                            </tbody>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {!! $dataDiscSoal->links() !!}
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addSoalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Input Data Soal</h4>
          </div>
          <div class="modal-body">
            <form id="addFormValidation" action="{{route('admin.add_data_soal')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">No Group Soal <star>*</star></label>
                    <input class="form-control"
                           name="noGroupSoal"
                           id="noGroupSoal"
                           type="number"
                           required="true"
                           readonly
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Soal <star>*</star></label>
                    <input class="form-control"
                           name="soal"
                           id="soal"
                           type="text"
                           required="true"
                    />
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Kunci Plus <star>*</star></label>
                        <div class="radio">
                          <input type="radio" name="keyPlus" id="keyPlusX" value="X" checked>
                          <label for="keyPlusX">
                            X
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="keyPlus" id="keyPlusY" value="Y">
                          <label for="keyPlusY">
                            Y
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="keyPlus" id="keyPlusZ" value="Z">
                          <label for="keyPlusZ">
                            Z
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="keyPlus" id="keyPlusR" value="R">
                          <label for="keyPlusR">
                            R
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="keyPlus" id="keyPlus2" value="+-">
                          <label for="keyPlus2">
                            +-
                          </label>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Kunci Minus <star>*</star></label>
                        <div class="radio">
                          <input type="radio" name="keyMinus" id="keyMinusX" value="X" checked>
                          <label for="keyMinusX">
                            X
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="keyMinus" id="keyMinusY" value="Y">
                          <label for="keyMinusY">
                            Y
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="keyMinus" id="keyMinusZ" value="Z">
                          <label for="keyMinusZ">
                            Z
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="keyMinus" id="keyMinusR" value="R">
                          <label for="keyMinusR">
                            R
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="keyMinus" id="keyMinus1" value="+-">
                          <label for="keyMinus1">
                          +-
                          </label>
                        </div>
                    </div>
                  </div>
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

    <div class="modal fade" id="updateSoalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Ubah Data Soal</h4>
          </div>
          <div class="modal-body">
            <form id="updateFormValidation" action="{{route('admin.update_data_soal')}}" method="post" novalidate="">
              {{ csrf_field() }}
              <div class="content">
                <div class="form-group">
                    <label class="control-label">No Group Soal <star>*</star></label>
                    <input class="form-control"
                           name="updatNoGroupSoal"
                           id="updateNoGroupSoal"
                           type="number"
                           required="true"
                           readonly
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">ID Soal <star>*</star></label>
                    <input class="form-control"
                           name="updatIdSoal"
                           id="updateIdSoal"
                           type="number"
                           required="true"
                           readonly
                    />
                </div>
                <div class="form-group">
                    <label class="control-label">Soal <star>*</star></label>
                    <input class="form-control"
                           name="updateSoal"
                           id="updateSoal"
                           type="text"
                           required="true"
                    />
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Kunci Plus <star>*</star></label>
                        <div class="radio">
                          <input type="radio" name="ukeyPlus" id="ukeyPlusX" value="X">
                          <label for="ukeyPlusX">
                            X
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="ukeyPlus" id="ukeyPlusY" value="Y">
                          <label for="ukeyPlusY">
                            Y
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="ukeyPlus" id="ukeyPlusZ" value="Z">
                          <label for="ukeyPlusZ">
                            Z
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="ukeyPlus" id="ukeyPlusR" value="R">
                          <label for="ukeyPlusR">
                            R
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="ukeyPlus" id="ukeyPlus+-" value="+-">
                          <label for="ukeyPlus+-">
                            +-
                          </label>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Kunci Minus <star>*</star></label>
                        <div class="radio">
                          <input type="radio" name="ukeyMinus" id="ukeyMinusX" value="X">
                          <label for="ukeyMinusX">
                            X
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="ukeyMinus" id="ukeyMinusY" value="Y">
                          <label for="ukeyMinusY">
                            Y
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="ukeyMinus" id="ukeyMinusZ" value="Z">
                          <label for="ukeyMinusZ">
                            Z
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="ukeyMinus" id="ukeyMinusR" value="R">
                          <label for="ukeyMinusR">
                            R
                          </label>
                        </div>

                        <div class="radio">
                          <input type="radio" name="ukeyMinus" id="ukeyMinus+-" value="+-">
                          <label for="ukeyMinus+-">
                          +-
                          </label>
                        </div>
                    </div>
                  </div>
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

        function addSoal(noGroupSoal){

          document.getElementById("noGroupSoal").value = noGroupSoal;

          $('#addSoalModal').modal('show');

        }

        function updateSoal(noGroupSoal, soal){

          document.getElementById("updateNoGroupSoal").value = noGroupSoal;
          document.getElementById("updateIdSoal").value = soal.id;
          document.getElementById("updateSoal").value = soal.soal;

          document.getElementById("ukeyPlus" + soal.kunci_plus).checked = true;
          document.getElementById("ukeyMinus" + soal.kunci_minus).checked = true;

          $('#updateSoalModal').modal('show');
        }

        function newGroupId(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'get',
                url: '{{route('admin.add_data_group_soal')}}',
                data: null,
                success: function (data) {
                    console.log(data);
                    // console.log('Data kelas berhasil di tambah');
                    if (data.status){
                      showNotification('success', data.message);
                      location.reload();
                    } else {
                      showNotification('danger', data.message);
                    }
                },
                error: function (data) {
                    console.log(data);
                    console.log('gagal')
                    showNotification('danger', data.message);
                }
            });

        }

        function deleteGroupSoal(id){
            var groupSoal = {};
            groupSoal.id = id
            var json_groupSoal = JSON.stringify(groupSoal);
            var parsed_groupSoal = JSON.parse(json_groupSoal);

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
                    url: '{{route('admin.delete_data_group_soal')}}',
                    data: parsed_groupSoal,
                    success: function (data) {
                        console.log('Data kelas berhasil di hapus');
                        if (data.status){
                          showNotification('success', data.message);
                          location.reload();
                        } else {
                          showNotification('danger', data.message);
                        }
                    },
                    error: function (data) {
                        console.log(data);
                        console.log('gagal')
                        showNotification('danger', data.message);
                    }
                });
            })
        }

        function deleteSoal(id){
            var soal = {};
            soal.id = id
            var json_soal = JSON.stringify(soal);
            var parsed_soal = JSON.parse(json_soal);

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
                    url: '{{route('admin.delete_data_soal')}}',
                    data: parsed_soal,
                    success: function (data) {
                        console.log('Data kelas berhasil di hapus');
                        if (data.status){
                          showNotification('success', data.message);
                          location.reload();
                        } else {
                          showNotification('danger', data.message);
                        }
                    },
                    error: function (data) {
                        console.log(data);
                        console.log('gagal')
                        showNotification('danger', data.message);
                    }
                });
            })
        }

        $().ready(function () {

            $('#addFormValidation').validate();
            $('#updateFormValidation').validate();

        });

    </script>
@endsection
