@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Kehadiran</h4>                        
                    </div>
                </div>
                <div class="text-right col-md-2 col-sm-2 dropdown">
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
                            <th scope="col">Kode Mapel</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tgl Kehadiran</th>
                            <th scope="col">Status</th>
                            <th scope="col">Persen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kh as $row)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>                              
                            <td>{{ $row->kodeMapel }}</td>
                            <td>{{ $row->namaMapel }}</td>
                            <td>{{ $row->namaKelas }}</td>
                            <td>{{ $row->tglKehadiran }}</td>                                
                            <td>{{ $row->status }}</td>                                
                            <td>{{ $h }}</td>                                
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
