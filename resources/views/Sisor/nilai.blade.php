@extends('Layouts.siakad')

@section('content')
<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="title">
                    <h4>Nilai</h4>
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
                            <th scope="col">Kode</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Guru Pengajar</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                            {{-- <th scope="col">Total</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilai as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>                              
                                <td>{{ $row->namaMapel }}</td>
                                <td>{{ $row->kelas }}</td>
                                <td>{{ $row->namaGuru }}</td>
                                <td>{{ $row->nts }}</td>
                                <td>{{ $row->nas }}</td>                                
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
