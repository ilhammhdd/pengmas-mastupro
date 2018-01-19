@extends('layouts.master')

@section('title')
    Riwayat Test DISC
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
                    <h4 class="title">Riwayat Test</h4>
                </div>
                <div  class="fresh-datatables">
                    <table id="bootstrap-table-history" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">No Test</th>
                            <th class="text-center">Tanggal Test</th>
                            <th class="text-center">Nama Test</th>
                            <th class="text-center">Nama Peserta</th>
                            <th class="text-center">Jenis Peserta</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Current Style</th>
                            <th class="text-center">Pressure Style</th>
                            <th class="text-center">Self Style</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($testHistory as $th)
                            <tr>
                                <td class="text-center">{{$th->id}}</td>
                                <td class="text-center">{{$th->created_at->formatLocalized('%d %B %Y')}}</td>
                                <td class="text-center">{{$th->test()->first()->nama}}</td>
                                @if ($th->user()->first()->siswaAccount()->first() != null)
                                  <td class="text-left">{{$th->user()->first()->siswaAccount()->first()->siswa()->first()->nama }}</td>
                                  <td class="text-left">Siswa</td>
                                  <td class="text-left">{{$th->user()->first()->siswaAccount()->first()->siswa()->first()->kelas()->first()->nama }}</td>
                                @elseif ($th->user()->first()->guruAccount()->first() != null)
                                  <td class="text-left">{{$th->user()->first()->guruAccount()->first()->guru()->first()->nama }}</td>
                                  <td class="text-left">Guru</td>
                                  <td class="text-left">- - -</td>
                                @endif
                                @if ($th->testResult()->first() != null)
                                  <td class="text-center">{{$th->testResult()->first()->current_style}}</td>
                                  <td class="text-center">{{$th->testResult()->first()->pressure_style}}</td>
                                  <td class="text-center">{{$th->testResult()->first()->self_style}}</td>
                                @else
                                  <td class="text-center">Null</td>
                                  <td class="text-center">Null</td>
                                  <td class="text-center">Null</td>
                                @endif
                                <td class="td-actions text-center">
                                    <a href="{{route('disc.show_result', $th->id)}}"
                                       rel="tooltip"
                                       title="Lihat Hasil"
                                       class="btn btn-info btn-simple btn-lg" style="opacity: 1;">
                                        <i class="fa fa-book"></i>
                                    </a>
                                    <a onclick="deleteTest({{$th->id}})"
                                       rel="tooltip"
                                       title="Hapus"
                                       class="btn btn-simple btn-danger btn-icon table-action remove">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <div class="text-right">
                    {!! $testHistory->links() !!}
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.siswa.footer')
@endsection

@section('other-js')
      <script type="text/javascript">

      function deleteTest(id){
          var testHistory = {};
          testHistory.id = id
          var json_testHistory = JSON.stringify(testHistory);
          var parsed_testHistory = JSON.parse(json_testHistory);

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
                  url: '{{route('admin.delete_test_history')}}',
                  data: parsed_testHistory,
                  success: function (data) {
                      console.log('Data test berhasil di hapus');
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

      var $tableKelas = $('#bootstrap-table-history');

      $('#print-data-button').html('<ul class="nav navbar-nav navbar-right"><li><button id="button-submit" onclick="printDataHstory()" style="margin-right:20px;" class="btn btn-warning btn-fill btn-wd">Cetak Data</button></li></ul>');
        function printDataHstory(){
          window.location= '{{ route('admin.print_data_test_history') }}';
        }

        $tableKelas.bootstrapTable({
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

        $('[rel="tooltip"]').tooltip();

        $(window).resize(function () {
            $tableKelas.bootstrapTable('resetView');
        });

      </script>
@endsection
