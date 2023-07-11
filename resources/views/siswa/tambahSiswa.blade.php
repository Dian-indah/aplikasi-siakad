@extends('Layouts.siakad')

@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="h4">Tambah Data Siswa</p>
            </div>
        </div>
        <form action="{{ route('simpanSiswa') }}" method="POST">
            @csrf
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Siswa</div>
            {{-- 1 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                <div class="col-sm-12 col-md-10">
                    <input id="username" name="username" class="form-control" type="text" placeholder="siswa" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="name" name="name" class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input id="email" name="email" class="form-control" type="email" placeholder="dian@gmail.com" />
                </div>
            </div>
            {{-- 3 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input id="password" name="password" class="form-control" type="password" placeholder="Password" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NISN</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nisn" name="nisn" class="form-control" type="nisn" placeholder="nisn" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIPD</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nipd" name="nipd" class="form-control" type="nipd" placeholder="nipd" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12 col-md-10">
                    <select id="jenkel" name="jenkel" class="custom-select col-12">
                        <option selected="">Jenis Kelamin</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" id="tanggalLahir" name="tanggalLahir"
                        placeholder="Tanggal Lahir" type="date" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nik" name="nik" placeholder="NIK" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="noKk" name="noKk" placeholder="Nomor KK" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="noHp" name="noHp" placeholder="Nomor Handphone"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Agama</label>
                <div class="col-sm-12 col-md-10">
                    <select id="agama" name="agama" class="custom-select col-12">
                        <option selected="" disabled>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Ketik disini"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Tinggal</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="jenisTinggal" name="jenisTinggal" placeholder="Jenis Tinggal"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Transportasi</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="trasportasi" name="trasportasi" placeholder=" trasportasi"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">SKHUN</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="skhun" name="skhun" placeholder="skhun"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penerima Kpps</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="penerimaKpps" name="penerimaKpps" placeholder="penerimaKpps"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No KPPS</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="noKpps" name="noKpps" placeholder="noKpps"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="namaAyah" name="namaAyah" placeholder="namaAyah"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" id="tanggalLahirAyah" name="tanggalLahirAyah"
                        placeholder="Tanggal Lahir Ayah" type="date" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pendidikan Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="pendidikanAyah" name="pendidikanAyah" placeholder="pendidikanAyah"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="pekerjaanAyah" name="pekerjaanAyah" placeholder="pekerjaanAyah"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
