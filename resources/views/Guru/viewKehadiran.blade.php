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
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kh as $item)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $item->nisn }}</td>
                                <td scope="col">{{ $item->namaSiswa }}</td>                               
                                <td scope="col">{{ $item->status }}</td>
                                <td scope="col">{{ $item->tglKehadiran }}</td>
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
