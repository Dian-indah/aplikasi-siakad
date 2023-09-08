@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Nilai Akhir Semester </h4>
                    </div>
                </div>
                <div class="pull-right col-md-2 col-sm-2">

                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">NAS</th>
                            <th scope="col">NTS</th>
                            <th scope="col">Hadir</th>
                            <th scope="col">Tidak Hadir</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $item)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $item->nisn }}</td>
                                <td scope="col">{{ $item->namaSiswa }}</td>
                                <td scope="col">{{ $item->nas }}</td>
                                <td scope="col">{{ $item->nts }}</td>
                                <td scope="col">{{ $item->jmlHadir }}</td>
                                <td scope="col">{{ $item->jmlTdkHadir }}</td>                                
                            </tr>
                        @endforeach
                 
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>

    <!-- Start edit modal -->
    <div class="modal fade" id="modalEdit" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Nilai
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{ route('updateNas') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="text" class="form-control" id="nilaiId" name="nilaiId" hidden>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <input type="text" class="form-control" id="editnilaiNas" name="editnilaiNas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end Tambah Nilai --}}
@endsection
@section('js')
    <script>
        // Edit Data
        $('body').on('click', '#editNas', function() {
            var id = $(this).data(
                'id'
            );
            // alert(id) ;
            $.ajax({
                url: "{{ url('/guru/editNas') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data)
                    $('#modalEdit').modal('show'); //menampilkan modal
                    $('#nilaiId').val(data.data.id);
                    $('#editnilaiNas').val(data.data.nas);
                }
            });
        });

        // Hapus Data
        $(document).on('click', '#tambahNas', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                title: "Nilai NTS Belum Diinputkan",               
            }, )
        });
    </script>
@endsection
