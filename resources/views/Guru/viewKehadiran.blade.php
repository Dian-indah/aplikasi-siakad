@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Kehadiran Siswa</h4>
                        <form action="{{ url('/guru/viewKehadiran/' . $ks->id) }}" method="post">
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
                                <button type="submit" class="btn btn-primary">Simpan</button>
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
                            <th scope="col">NIPD</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kehadiran as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nipd }}</td>
                                <td>{{ $item->namaSiswa }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->tglKehadiran }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
