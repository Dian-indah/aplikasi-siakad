@extends('Layouts.siakad')
@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Kehadiran Siswa</h4>
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
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kh as $item)
                            <tr>
                                <form action="{{ isset($test->status) ? route('updateKehadiran', $item->kehadiranId) : route('simpanKehadiran') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if (isset($test->status))
                                        @method('PUT')
                                        <input type="hidden" name="kehadiranId[]" value="{{ $item->kehadiranId }}">
                                    @endif
                                    <td>{{ $loop->iteration }}</td>                                   
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->namaSiswa }}</td>
                                    <td hidden>
                                        <input value="{{ $item->kehadiranId }}" name="kehadiranId[]"
                                                id="kehadiranId">
                                    </td>
                                    <td hidden>
                                        @if ($item->tglKehadiran)
                                            <input value="{{ $item->tglKehadiran }}" name="tglKehadiran[]"
                                                id="tglKehadiran">
                                        @else
                                            <input value="{{ $tglKehadiran }}" name="tglKehadiran[]" id="tglKehadiran">
                                        @endif
                                    </td>
                                    <td hidden><input value="{{ $item->siswaKelasId }}" name="siswaKelasId[]"
                                            id="siswaKelasId"></td>
                                    <td hidden><input value="{{ $item->kelasMapelId }}" name="kelasMapelId[]"
                                            id="kelasMapelId"></td>
                                    <td>
                                        @if ($item->status)
                                            <select id="status[]" name="status[]" class="custom-select col-12">
                                                <option <?php if ($item->status == 'Hadir') {
                                                    echo ' selected';
                                                } ?> value="Hadir">Hadir</option>
                                                <option <?php if ($item->status == 'Tidak Hadir') {
                                                    echo ' selected';
                                                } ?> value="Tidak Hadir">Tidak Hadir</option>
                                            </select>
                                        @else
                                            <select name="status[]" class="custom-select col-12">
                                                <option disabled selected>status</option>
                                                <option value="Tidak Hadir">Tidak Hadir</option>
                                                <option value="Hadir">Hadir</option>
                                            </select>
                                        @endif
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="form-group row">
                    <div class="col-sm-12 col-md-12">
                        @if ($test)
                            <button type="submit" name="action" value="Update"
                                class="btn btn-sm btn-success">Update</button>
                        @else
                            <button type="submit" name="action" value="Simpan"
                                class="btn btn-sm btn-primary">Simpan</button>
                        @endif
                    </div>
                </div>
                </form>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
@section('js')
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
    </script>
@endsection
