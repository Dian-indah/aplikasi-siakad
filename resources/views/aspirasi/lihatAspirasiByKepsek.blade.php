@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Data Aspirasi </h4>
                    </div>
                </div>
                <div class="pull-right col-md-2 col-sm-2">
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Kirim</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Nama Ortu</th>
                            <th scope="col">Detail Aspirasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->tglKirim }}</td>
                                <td>{{ Str::limit($row->keterangan, 30, '...') }}</td>
                                <td>{{ $row->namaOrtu }}</td>
                                <td>
                                    <a href="javascript:;" data-id="<?= $row->aspirasiId ?>" class="btn btn-primary"
                                        id="detailAspirasi" type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i>
                                    </a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- end content bawah --}}
    <!-- Start tampil modal -->
    <div class="modal fade" id="detail" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content justify-center">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Detail Aspirasi
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×

                    </button>
                </div>
                <form>                                    
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Pesan</label>
                            <div class="col-sm-12 col-md-12">
                                <textarea class="form-control" name="keterangan" id="keterangan" disabled></textarea>                               
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end tampil modal --}}
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        // Show Data
        $(document).on('click', '#detailAspirasi', function() { //editKelas ada di class     
            var id = $(this).data(
                'id'
            ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                // console.log(id);
                url: "{{ url('/showAspirasiByKepsek') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data)
                    $('#detail').modal('show'); //menampilkan modal
                    $('#idAspirasi').val(data.data.aspirasiId);
                    $('#showOrtuId').val(data.data.ortuId).change();               
                    $('#tglKirim').val(data.data.tglKirim);
                    $('#keterangan').val(data.data.keterangan);
                }
            });
        });
    </script>
@endsection
