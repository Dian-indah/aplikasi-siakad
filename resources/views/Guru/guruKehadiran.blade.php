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
                    <h4>Kehadiran Siswa</h4>                    
                </div>
                <div class="col-md-12 col-sm-6 m-3">

                    <table id="example" class="table table-bordered">
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
                                                <a href="{{ url('/guru/tampilKehadiran?kelasMapelId='.$row->kelasMapelId.'&kelasId='.$row->kelasId) }}"
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
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
