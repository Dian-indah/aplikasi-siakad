@push('css')
    <!-- Perpustakaan jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
@endpush
@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Orang Tua Siswa</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 dropdown">
                    {{-- <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown">Kelas</a>

                        <div id="dropdown" class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">10</a>
                            <a class="dropdown-item" href="#">11</a>
                            <a class="dropdown-item" href="#">12</a>
                        </div>
                    </div> --}}
                    <div class="pull-right col-md-6 col-sm-2">
                        <a href="#" class="btn btn-success btn-sm"><i class="icon-copy fa fa-plus"
                                aria-hidden="true"></i> Data</a>
                    </div> <br><br>
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <table id="example" class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>nini</td>
                            <td>nini asya</td>
                            <td>099834374</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-info" type="button"><i
                                        class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="#" class="btn btn-warning" type="button"><i class="icon-copy fa fa-edit"
                                        aria-hidden="true"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>nana</td>
                            <td>nana halimah</td>
                            <td>099834374</td>
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" type="button"><i
                                        class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" type="button"><i
                                        class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>nono</td>
                            <td>nono agus</td>
                            <td>099834374</td>
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" type="button"><i
                                        class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" type="button"><i
                                        class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script src={{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/responsive.bootstrap4.min.js') }}></script>

    <!-- buttons for Export datatable -->
    <script src="{{ asset('plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/vfs_fonts.js') }}"></script>
    <!-- Datatable Setting js -->
    <script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
@endsection
