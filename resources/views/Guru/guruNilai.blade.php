@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12 title">
                    <h4>Nilai Siswa </h4>
                </div>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th scope="col">Kode Mapel</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">NTS</th>
                            <th scope="col">NAS</th>                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilai as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->kodeMapel }}</td>
                                <td>{{ $row->namaMapel }}</td>
                                <td>{{ $row->namaKelas }}</td>
                                <td>
                                    <label for="userImage">
                                        <a href="{{ url('/guru/tambahNts/' . $row->kelasSiswaId) }}" class="btn btn-outline-success" rel="nofollow">
                                            <i class="fa fa-book" aria-hidden="true"></i></a>
                                    </label>
                                </td>
                                <td>
                                    <label for="userImage">
                                        <a href="{{ url('/guru/tambahNas/'. $row->kelasSiswaId) }}" class="btn btn-outline-warning" rel="nofollow">
                                            <i class="fa fa-book" aria-hidden="true"></i></a>
                                    </label>
                                </td>                              
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
