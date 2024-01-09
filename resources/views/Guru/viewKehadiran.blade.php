@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Kehadiran Siswa</h4>
                        {{-- <form action="{{ url('/guru/tampilKehadiran?kelasMapelId='.$idKelasMapel.'&kelasId='.$idKelas) }}" method="get"> --}}
                        <form action="{{ url('/guru/tampilKehadiran') }}" method="get">
                            <div class="modal-body">
                                <input hidden type="text" value="{{ $idKelasMapel }}" id="kelasMapelId"
                                    name="kelasMapelId">
                                <input hidden type="text" value="{{ $idKelas }}" id="kelasId" name="kelasId">
                                {{-- <div class="form-group">
                                    <label>Tanggal</label>
                                    <input id="tanggal" name="tgl" class="form-control date-picker"
                                        placeholder="Select Date" type="text" />
                                </div> --}}
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12">
                                        <label for="">Tanggal</label>
                                        <input id="tgl" name="tgl" class="form-control" type="date"
                                            value="{{ $tglKehadiran }}" required />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Tampilkan</button>
                            </div>
                        </form>
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
                            <th scope="col">Keterangan</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kehadiran as $item)
                            <tr>
                                <form action="{{ route('simpanKehadiran') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->namaSiswa }}</td>
                                    <td hidden>
                                        <input value="{{ $item->kehadiranId }}" name="kehadiranId[]" id="kehadiranId">
                                    </td>
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
                                                <option value="Tidak Hadir">Tidak Hadir</option>
                                                <option value="Hadir">Hadir</option>
                                            </select>
                                        @endif
                                    </td>
                                    <td >
                                        <input value="{{ $tglKehadiran }}" name="tglKehadiran[]" id="tglKehadiran">
                                    </td>
                                    <td hidden><input value="{{ $item->siswaKelasId }}" name="siswaKelasId[]"
                                            id="siswaKelasId"></td>
                                    <td ><input value="{{ $idKelasMapel }}" name="kelasMapelId[]"
                                            id="kelasMapelId"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="form-group row">
                    <div class="col-sm-12 col-md-12">             
                        @if ($kehadiran[0]->tglKehadiran == null)
                            <button type="submit" name="action" value="Simpan"
                                class="btn btn-sm btn-primary">Simpan</button>
                        @else
                            <button type="submit" name="action" value="Update"
                                class="btn btn-sm btn-success">Update</button>
                            </td>
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
        $("#tanggal").datepicker({
            dateFormat: 'dd/mm/yyyy', //check change
            changeMonth: true,
            changeYear: true
        });
    </script>
@endsection
