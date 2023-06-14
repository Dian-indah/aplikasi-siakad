@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12 title">
                    <h4>Kehadiran Siswa Tahun ajar 2023</h4>
                </div>
                <div class="col-md-5 col-sm-6 text-right m-3">
                    <div class="dropdown">
                        <a class="btn btn-warning dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown">Semester</a>

                        <div id="dropdown" class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Semester 1 Ganjil</a>
                            <a class="dropdown-item" href="#">Semester 2 Genap</a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th scope="col">Kode Mapel</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kehadiran</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <th scope="row">1</th>
                        <td>BI123</td>
                        <td>Bahasa Indonesia</td>
                        <td>10</td>
                        <td>22 Juni 2020</td>
                        <td>
                            <label for="userImage">
                                <a class="btn btn-outline-success" rel="nofollow">
                                    <i class="icon-copy fa fa-file-text fa-lg" aria-hidden="true"></i> Upload File</a>
                            </label>
                            <input id="userImage"type="file" hidden />
                        </td>
                        <td><a href="/detail kehadiran" class="btn btn-info" 
                            type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                        </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>BIng123</td>
                            <td>Bahasa Inggris</td>
                            <td>11</td>
                            <td>25 Mei 2020</td>
                            <td>
                                <label for="userImage">
                                    <a class="btn btn-outline-success" rel="nofollow">
                                        <i class="icon-copy fa fa-file-text fa-lg" aria-hidden="true"></i> Upload File</a>
                                </label>
                                <input id="userImage"type="file" hidden />
                            </td>
                            <td><a href="/detail kehadiran" class="btn btn-info" 
                                type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>MT123</td>
                            <td>Matematika</td>
                            <td>12</td>
                            <td>1 Maret 2020</td>
                            <td>
                                <label for="userImage">
                                    <a class="btn btn-outline-success" rel="nofollow">
                                        <i class="icon-copy fa fa-file-text fa-lg" aria-hidden="true"></i> Upload File</a>
                                </label>
                                <input id="userImage"type="file" hidden />
                            </td>
                            <td><a href="/detail kehadiran" class="btn btn-info" 
                                type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
