@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Nilai Tengah Semester </h4>
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
                            <th scope="col">NIPD</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nts as $item)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $item->nipd }}</td>
                                <td scope="col">{{ $item->namaSiswa }}</td>
                                <td scope="col">{{ $item->nts }}</td>
                                <td scope="col">
                                    <a href="javascript:;" data-id="<?= $item->idSiswaKelas ?>" class="btn btn-info " id="edit"
                                        type="button"> <i class="icon-copy fa fa-edit" aria-hidden="true"></i> Nilai</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
    <!-- Start edit modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
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
                <form action="{{route ('editNts')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="text" id="idSiswaKelas" name="idSiswaKelas" hidden>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">                               
                                <input id="editNilai" name="editNilai" class="form-control" type="text"
                                    required />
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
@endsection
@section('js')
    <script>
        // Edit Data
        $(document).on('click', '#edit', function() { //editKelas ada di class                      
            // alert('test');
            var id = $(this).data(
                'id'
                ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                // console.log(id);
                url: "{{ url('/guru/showSiskelById') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data)
                    $('#editModal').modal('show'); //menampilkan modal
                    $('#editNilai').val(data.data.nts);
                    $('#idSiswaKelas').val(data.data.id);
                }
            });
        });
    </script>
@endsection
