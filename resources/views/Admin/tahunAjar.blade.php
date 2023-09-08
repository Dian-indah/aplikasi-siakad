@extends('Layouts.siakad')

@section('content')
    {{-- {{$data}} --}}
    <div class="min-height-200px">
        {{-- {{$postId}} --}}
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Tahun Ajar</h4>
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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun Ajar</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->tahunAjar }}</td>
                                <td>{{ $row->semester }}</td>
                                <td class="text-center">
                                    <a href="javascript:;" data-id="<?= $row->id ?>" class="btn btn-warning editTahunAjar"
                                        type="button">
                                        <i class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>
                                    <a href="javascript:;" data-id="<?= $row->id ?>" id="btn-hapus"
                                        class="btn btn-danger"><i class="fa fa-trash"></i>

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
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Tambah Data
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{ route('tambahTahunAjar') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group ">
                            <div class="col-sm-12 col-md-12">
                                <label for="tahunAjar">Tahun Ajar</label>
                                <input id="tahunAjar" name="tahunAjar" placeholder="Tahun Ajar" class="form-control"
                                    type="text" required />
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <label for="semester">Semester</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="semester" name="semester" class="custom-select col-12" required>
                                        <option disabled selected="">Pilih..</option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
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
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Edit Tahun Ajar
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{ route('updateTahunAjar') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <input type="text" name="idTahunAjar" id="idTahunAjar" hidden />
                            <div class="col-sm-12 col-md-12">
                                <label for="tahunAjar">Tahun Ajar</label>
                                <input id="editTahunAjar" name="tahunAjar" placeholder="Tahun Ajar"
                                    class="form-control @error('tahunAjar') is-invalid @enderror" type="text" required />
                                @error('tahunAjar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="semester">Semester</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="editSemester" name="semester" class="custom-select col-12 @error('semester') is-invalid @enderror" required>
                                        <option disabled selected="">Pilih..</option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                                    @error('semester')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
    {{-- end edit modal --}}
@endsection
@section('js')
    <script>
        $('body').on('click', '.editTahunAjar', function() { //edittahunAjar ada di class
            var id = $(this).data(
                'id'
            ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                url: "{{ url('/tahunAjar/editTahunAjar') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data)
                    $('#editmodal').modal('show'); //menampilkan modal
                    $('#editTahunAjar').val(data.data.tahunAjar);
                    $('#editSemester').val(data.data.semester);
                    $('#idTahunAjar').val(data.data.id);
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
                            url: "{{ url('/tahunAjar/delete') }}" + '/' + id,
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
