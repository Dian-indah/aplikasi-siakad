@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12 title">
                    <h4>Aspirasi</h4>
                </div>
                <div class="col-md-5 col-sm-6 text-right m-3">
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Kirim</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->kodeMapel }}</td>
                                <td>{{ $row->namaMapel }}</td>
                                <td>{{ $row->namaKelas }}</td>
                                <td>{{ $row->tglKehadiran }}</td>
                                <td>{{ $row->status }}</td>
                                <td><a class="btn btn-primary" href=""><span class="icon-copy dw dw-email-2">
                                            Detail</span></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
