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
                            <th scope="col">Kehadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>BIN123</td>
                            <td>Bahasa Indonesia</td>
                            <td>10</td>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>BIG123</td>
                            <td>Bahasa Inggris</td>
                            <td>10</td>
                            <td>60%</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>MAT123</td>
                            <td>Matematika</td>
                            <td>10</td>
                            <td>55%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
