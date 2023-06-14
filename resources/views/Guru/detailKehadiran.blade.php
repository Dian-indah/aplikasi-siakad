@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-12 title">
                    <h4>Daftar Kehadiran Siswa Bahasa Indonesia Kelas 10</h4> <br>
                </div>
                <div class="col-md-2 col-sm-6 text-right m-3">
                    <div class="dropdown">
                        <a class="btn btn-success" href="#" role="button"><i class="icon-copy dw dw-download2 fa-lg"></i> 
                            Download</a>
                    </div>
                </div>
                <table class="table table-bordered m-1">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>123</td>
                            <td>Dian</td>
                            <td>90</td>
                            <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#small-modal"
                                    type="button"><span class="icon-copy dw dw-edit-1">
                                        Edit</span></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>456</td>
                            <td>Indah</td>
                            <td>85</td>
                            <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#small-modal"
                                    type="button"><span class="icon-copy dw dw-edit-1">
                                        Edit</span></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>789</td>
                            <td>Kumala</td>
                            <td>95</td>
                            <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#small-modal"
                                    type="button"><span class="icon-copy dw dw-edit-1">
                                        Edit</span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Start edit modal -->
    <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Nilai
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12 text-center">
                                <a href="#" class="btn btn-primary">Simpan</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal edit --}}
@endsection
