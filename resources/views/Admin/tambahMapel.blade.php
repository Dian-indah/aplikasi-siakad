@extends('Layouts.siakad')

@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="h4">Tambah Data Mata Pelajaran</p>
            </div>
        </div>
        <form>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kode Mapel</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Kode Mapel" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Mapel</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Mata Pelajaran" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kelas</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih Kelas</option>
                        <option value="1">10</option>
                        <option value="2">11</option>
                        <option value="2">12</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kurikulum</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Kurikulum" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status Kurikulum</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Status Kurikulum" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kompetendi Keahlian</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Kompetensi Keahlian" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama PTK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama PTK" />
                </div>
            </div>
            <div class="form-group row">                
                <div class="col-sm-12 col-md-12 text-center">
                    <a href="#" class="btn btn-success">Simpan</a>
                </div>
            </div>
        </form>
    </div>
@endsection
