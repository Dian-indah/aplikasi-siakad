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
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nts as $item)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $item->nisn }}</td>
                                <td scope="col">{{ $item->namaSiswa }}</td>
                                <td scope="col">{{ $item->nts }}</td>
                                {{-- <td scope="col">{{ $item->nilaiId }}</td> --}}
                                <td scope="col">
                                    @if ($item->nts)
                                        <a href="javascript:;" data-id="<?= $item->nilaiId ?>" class="btn btn-info"
                                            type="button" id="editNts">
                                            <i class="icon-copy fa fa-edit" aria-hidden="true"></i> Nilai</a>
                                    @else
                                        <a href="javascript:;" data-id="<?= $item->siswaKelasId ?>"
                                            data-mapel="<?= $item->kelasMapelId ?>" data-nts="<?= $item->nts ?>"
                                            class="btn btn-info " id="tambahNts" type="button"> <i
                                                class="icon-copy fa fa-edit" aria-hidden="true"></i> Nilai</a>
                                    @endif
                                    {{--  --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
    <!-- Start Tambah modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                <form action="{{ route('inputNts') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="text" class="form-control" id="siswaKelasId" name="siswaKelasId" hidden>
                        <input type="text" class="form-control" id="kelasMapelId" name="kelasMapelId" hidden>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <input id="nilaiNts" name="nilaiNts" class="form-control" type="text" required />
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
    {{-- end Tambah Modal --}}

    <!-- Start edit modal -->
    <div class="modal fade" id="modalEdit" role="dialog" aria-labelledby="myLargeModalLabel"
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
                <form action="{{ route('updateNts') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="text" class="form-control" id="nilaiId" name="nilaiId" hidden>                       
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <input type="text" class="form-control" id="editnilaiNts" name="editnilaiNts" >  
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
        // Tambah Data
        $(document).on('click', '#tambahNts', function() { //editKelas ada di class                      
            // alert('test');
            var siswa = $(this).attr("data-id")
            var mapel = $(this).attr("data-mapel")
            var nilaiNts = $(this).attr("data-nts")

            $('#tambahModal').modal('show');
            $('#nilaiNts').val(nilaiNts);
            $('#siswaKelasId').val(siswa);
            $('#kelasMapelId').val(mapel);
        });

        // Edit Data
        $('body').on('click', '#editNts', function() { 
            var id = $(this).data(
                'id'
            ); 
            $.ajax({
                url: "{{ url('/guru/editNts') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    console.log(data.data)
                    $('#modalEdit').modal('show'); //menampilkan modal
                    $('#nilaiId').val(data.data.id);
                    $('#editnilaiNts').val(data.data.nts);                                            
                }
            });
        });
    </script>
@endsection
