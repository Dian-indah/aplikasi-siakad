@push('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
@endpush
@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12 title">
                    <h4>Kehadiran Siswa Tahun ajar 2023</h4>
                </div>
                <div class="col-md-12 col-sm-6 m-3">                   

                    <table class=" table hover nowrap" id="example1">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th scope="col">Kode Mapel</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Nama Kelas</th>                              
                                <th scope="col">Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kehadiran as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row->kodeMapel }}</td>
                                    <td>{{ $row->namaMapel }}</td>
                                    <td>{{ $row->namaKelas }}</td>                              
                                    <td>
                                        <label for="userImage">
                                            <a href="{{ url('/guru/tampilKehadiran/' . $row->kelasSiswaId) }}"
                                                class="btn btn-outline-success" rel="nofollow">
                                                <i class="icon-copy fa fa-address-card" aria-hidden="true"></i></a>
                                        </label>
                                        <label for="userImage">
                                            <a href="{{url('/guru/tambahKehadiran/'.$row->kelasSiswaId)}}"
                                                class="btn btn-outline-success" rel="nofollow">
                                                <i class="icon-copy fa fa-plus" aria-hidden="true"></i></a>
                                        </label>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')    
    <script src={{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/responsive.bootstrap4.min.js') }}></script>
    <!-- Datatable Setting js -->    
    <script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
    
    <script src="{{ asset('plugins/datatables/js/dataTables.bootstrap4.min.j') }}"></script>
    <script src="{{ asset('plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- buttons for Export datatable -->
    <script src="{{ asset('plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/vfs_fonts.js') }}"></script>
@endsection
