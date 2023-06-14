@extends('Layouts.siakad')

@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="mb-4 h4">Data Diri</h4>
            </div>
        </div>
        <form>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="password" placeholder="Password" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="email" placeholder="Email" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Telepon</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Tempat Lahir" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" placeholder="Tanggal Lahir" type="text" />
                </div>
            </div>           
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>                   
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" placeholder="Alamat" type="text" />
                </div>
            </div>  
            <div class="form-group row ">
                <div class="col-sm-12 col-md-12 text-center">
                <a href="#" class="btn btn-success ">Simpan</a>
                </div>
            </div>
        </form>
    @endsection
