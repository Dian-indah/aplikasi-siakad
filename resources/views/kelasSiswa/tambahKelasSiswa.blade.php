@extends('Layouts.siakad')

@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="h4">Tambah Akun Orang Tua Siswa</p>
            </div>
        </div>
        <form>
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
                <label class="col-sm-12 col-md-2 col-form-label">Mata Pelajaran</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih Mata Pelajaran</option>
                        <option value="1">Bahasa Indonesia</option>
                        <option value="2">Bahasa Inggris</option>
                        <option value="3">Matematika</option>
                        <option value="4">IPA</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Guru</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih Guru</option>
                        <option value="1">Dian</option>
                        <option value="2">Indah</option>
                        <option value="3">Kumala</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Data Siswa</label>
                <div class="col-sm-12 col-md-10 custom-file">
                    <input type="file" class="form-control custom-file-input" placeholder="Nomor KK"    />
                    <input class="form-control" placeholder="Nomor KK" type="text" />
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>
        </form>
    </div>
@endsection
