@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12 title">
                    <h4>Aspirasi</h4>
                </div>
                <div class="col-md-5 col-sm-6 text-right m-3">
                    {{-- Model Tambah aspirasi --}}
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#bd-example-modal-lg"
                        type="button"><span class="icon-copy dw dw-add"> Tambah</span>
                    </a>
                    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">
                                        Tambah Aspirasi
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        ×
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Ketik disini"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Tutup
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Model Tambah aspirasi --}}
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Kirim</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>12 Agustus 2020</td>
                            <td>Kepada Kepala sekolah</td>
                            <td><a class="btn btn-primary" href=""><span class="icon-copy dw dw-email-2">
                                        Detail</span></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>18 Mei 2020</td>
                            <td>Kepada Bapak Sujandoko</td>
                            <td><a class="btn btn-primary" href=""><span class="icon-copy dw dw-email-2">
                                        Detail</span></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>28 Januari 2020</td>
                            <td>Kepada Pihak sekolah</td>
                            <td><a class="btn btn-primary" href=""><span class="icon-copy dw dw-email-2">
                                        Detail</span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
