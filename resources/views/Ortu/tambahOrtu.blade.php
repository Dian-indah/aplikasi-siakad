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
                <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Username" />
                </div>
            </div>           
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Password" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Nama Siswa......</option>
                        <option value="1">Dian</option>
                        <option value="2">Indah</option>
                        <option value="2">Kumala</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Orang Tua</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Orang Tua" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Handphone</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="No Handphone" />
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
