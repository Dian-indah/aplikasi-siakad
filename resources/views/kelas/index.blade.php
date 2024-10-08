@extends('Layouts.siakad')

@section('content')
    {{-- {{$data}} --}}
    <div class="min-height-200px">
        {{-- {{$postId}} --}}
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Nama Ruang Kelas</h4>
                    </div>
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right col-md-2 col-sm-2">
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#small-modal"><i
                            class="icon-copy fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
                </div> <br><br>
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Wali Kelas</th>
                            <th scope="col">Nama Ruang Kelas</th>
                            <th scope="col">Tingkat Kelas</th>
                            <th scope="col">Tahun Ajar</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->waliKelas }}</td>
                                <td>{{ $row->namaKelas }}</td>
                                <td>{{ $row->tingkatKelas }}</td>
                                <td>{{ $row->tahunAjar }}</td>
                                <td>{{ $row->semester }}</td>
                                <td class="text-center">
                                    <a href="{{ url('/kelas/tambahSiswaKelas/' . $row->id) }}" class="btn btn-info" type="button"><i
                                        class="icon-copy fa fa-users"></i> </a>
                                    <a href="javascript:;" data-id="<?= $row->id ?>" class="btn btn-warning " id="editKelas"
                                        type="button"> <i class="icon-copy fa fa-edit" aria-hidden="true"></i> </a>
                                    <a href="javascript:;" data-id="<?= $row->id ?>" id="btn-hapus"
                                        class="btn btn-danger"><i class="fa fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>

    <!-- Start tambah modal -->
    <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Tambah Kelas
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{ route('tambahKelas') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaKelas">Nama Kelas</label>
                                <input id="namaKelas" name="namaKelas" class="form-control" type="text"
                                    placeholder="Nama Kelas" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="guruId">Wali Kelas</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="guruId" name="guruId" class="custom-select col-12" required>
                                        <option disabled selected="">Pilih..</option>
                                        @foreach ($guru as $row)
                                            <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="tingkatKelasId">Tingkat Kelas</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="tingkatKelasId" name="tingkatKelasId" class="custom-select col-12" required>
                                        <option disabled selected="">Pilih..</option>
                                        @foreach ($tingkatkelas as $row)
                                            <option value="{{ $row->id }}">{{ $row->tingkatKelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="tahunAjarId">Tahun Ajar</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="tahunAjarId" name="tahunAjarId" class="custom-select col-12" required>
                                        <option disabled selected="">Pilih..</option>
                                        @foreach ($tahunajar as $row)
                                            <option value="{{ $row->id }}">{{ $row->tahunAjar }}
                                                {{ $row->semester }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal tambah --}}

    <!-- Start edit modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Edit Nama Kelas
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{ route('updateKelas') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="text" id="idKelas" name="idKelas" hidden>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaKelas">Nama Kelas</label>
                                <input id="editNamaKelas" name="editNamaKelas" class="form-control" type="text"
                                    placeholder="Nama Kelas" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="editWaliKelas">Wali Kelas</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="editWaliKelas" name="editWaliKelas" class="custom-select col-12"
                                        required>
                                        <option disabled selected="">Pilih..</option>
                                        @foreach ($guru as $row)
                                            <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="tingkatKelasId">Tingkat Kelas</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="editTingkatKelas" name="editTingkatKelas" class="custom-select col-12"
                                        required>
                                        <option disabled selected="">Pilih..</option>
                                        @foreach ($tingkatkelas as $row)
                                            <option value="{{ $row->id }}">{{ $row->tingkatKelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="tahunAjarId">Tahun Ajar</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="editTahunAjar" name="editTahunAjar" class="custom-select col-12"
                                        required>
                                        <option disabled selected="">Pilih..</option>
                                        @foreach ($tahunajar as $row)
                                            <option value="{{ $row->id }}">{{ $row->tahunAjar }}
                                                {{ $row->semester }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end edit --}}
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        // Edit Data
        $(document).on('click', '#editKelas', function() { //editKelas ada di class                      
            var id = $(this).data(
                'id'
                ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                // console.log(id);
                url: "{{ url('/kelas/editKelas') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data)
                    $('#editmodal').modal('show'); //menampilkan modal
                    $('#editNamaKelas').val(data.data.namaKelas);
                    $('#editWaliKelas').val(data.data.guruId);
                    $('#editTahunAjar').val(data.data.tahunAjarId);
                    $('#editTingkatKelas').val(data.data.tingkatKelasId);
                    $('#idKelas').val(data.data.id);
                }
            });
        });
        // Hapus Data
        $(document).on('click', '#btn-hapus', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                    title: "Apakah Yakin Dihapus?",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Ya!",
                    showCancelButton: true,
                }, )
                .then(function(e) {
                    if (e.value == true) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: "{{ url('/kelas/delete') }}" + '/' + id,
                            data: {
                                id: id
                            },
                            success: function(data) {
                                if (data.success == true) {
                                    window.location.reload();
                                }
                            }
                        });
                    }
                })
        });
    </script>
@endsection
