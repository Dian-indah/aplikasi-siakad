@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        {{-- {{$data}} --}}
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Tahun Ajar</h4>
                    </div>
                </div>
                <div class="pull-right col-md-2 col-sm-2">
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown">Kelas</a>

                        <div id="dropdown" class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">10</a>
                            <a class="dropdown-item" href="#">11</a>
                            <a class="dropdown-item" href="#">12</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right col-md-2 col-sm-2">
                    <a href="tambah mapel" class="btn btn-success btn-sm"><i class="icon-copy fa fa-plus"
                            aria-hidden="true"></i> Tambah Data</a>
                </div> <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Mapel</th>
                            <th scope="col">Nama Matpel</th>
                            <th scope="col">Tingkat</th>
                            <th scope="col">Kurikulum</th>
                            <th scope="col">Kompetensi Keahlian</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->kodeMapel }}</td>
                            <td>{{ $row->namaMapel }}</td>
                            <td>{{ $row->kelas }}</td>
                            <td>{{ $row->kurikulum }}</td>
                            <td>{{ $row->statusKurikulum }}</td>
                            <td>{{ $row->kompetensiKeahlian }}</td>
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" type="button"><i
                                        class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" type="button"><i
                                        class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>
                            </td>
                        </tr>
                        @endforeach                       
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
