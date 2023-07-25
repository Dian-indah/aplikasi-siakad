@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Kehadiran Siswa</h4>
                        <form action="{{ route('simpanKehadiran') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <input type="text" value="{{ $ks->id }}" id="idKelasSiswa" name="idKelasSiswa"
                                    hidden>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12">
                                        <label for="">Tanggal</label>
                                        <input id="tgl" name="tgl" class="form-control" type="date" required />
                                    </div>
                                </div>
                            </div>
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
                        @foreach ($kehadiran as $item)
                            <tr>
                                <input type="hidden" name="kehadiran[{{ $item->idSiswaKelas }}]" value="0">
                                <label>{{ $item->namaSiswa }}:</label>
                                <input type="checkbox" name="kehadiran[{{ $item->idSiswaKelas }}]" value="1"
                                    @if ($item->kehadiran) checked @endif><br>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nipd }}</td>
                                <td>{{ $item->namaSiswa }}</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1-1">
                                            <label class="custom-control-label" for="customCheck1-1">Hadir</label>
                                            <input type="checkbox" class="custom-control-input" id="customCheck1-1">
                                            <label class="custom-control-label" for="customCheck1-1">Tidak Hadir</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="form-group row">
                    <div class="col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
        const radioOptions = document.querySelectorAll('.radio-option');

        radioOptions.forEach(option => {
            option.addEventListener('click', function() {
                radioOptions.forEach(otherOption => {
                    if (otherOption !== option) {
                        otherOption.checked = false;
                    }
                });
            });
        });
    </script>
@endsection
