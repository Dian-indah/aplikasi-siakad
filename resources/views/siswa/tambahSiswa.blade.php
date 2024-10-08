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
                    <input id="username" name="username" class="form-control @error('username') is-invalid @enderror"
                        type="text" placeholder="siswa" />
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                        type="text" placeholder="Nama Lengkap" />
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
                    <input id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        type="password" placeholder="Password" />
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NISN</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nisn" name="nisn" class="form-control @error('nisn') is-invalid @enderror"
                        type="nisn" placeholder="nisn" />
                    @error('nisn')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
                    <input class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                        placeholder="NIK" type="text" />
                    @error('nik')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
                    <input class="form-control" id="transportasi" name="transportasi" placeholder=" transportasi"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('namaAyah') is-invalid @enderror" id="namaAyah" name="namaAyah"
                        placeholder="namaAyah" type="text" />
                    @error('namaAyah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <select id="pendidikanAyah" name="pendidikanAyah" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="Putus SD">Putus SD</option>
                        <option value="SD/Sederajat">SD/Sederajat</option>
                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                        <option value="SMA/Sederajat">SMA/Sederajat</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="Diatas S2">Diatas S2</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input id="pekerjaanAyah" name="pekerjaanAyah" class="form-control" type="text"
                        placeholder="Pekerjaan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penghasilanAyah" name="penghasilanAyah" class="custom-select col-12">
                        <option selected="" disabled>Pilih Penghasilan...</option>
                        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                        <option value="Kurang Dari Rp.500.000,00">Kurang Dari Rp.500.000,00</option>
                        <option value="Rp.500.000,00 - Rp.999.999,00">Rp.500.000,00 - Rp.999.999,00</option>
                        <option value="Rp.1.000.000,00 - Rp.1.999.999,00">Rp.1.000.000,00 - Rp.1.999.999,00</option>
                        <option value="Rp.2.000.000,00 - Rp.4.999.999,00">Rp.2.000.000,00 - Rp.4.999.999,00</option>
                        <option value="Diatas Rp.5.000.000,00">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nikAyah" name="nikAyah" placeholder="nikAyah" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('namaIbu') is-invalid @enderror" id="namaIbu" name="namaIbu"
                        placeholder="namaIbu" type="text" />
                    @error('namaIbu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" id="tanggalLahirIbu" name="tanggalLahirIbu"
                        placeholder="Tanggal Lahir Ibu" type="date" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <select id="pendidikanIbu" name="pendidikanIbu" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="Putus SD">Putus SD</option>
                        <option value="SD/Sederajat">SD/Sederajat</option>
                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                        <option value="SMA/Sederajat">SMA/Sederajat</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="Diatas S2">Diatas S2</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="pekerjaanIbu" name="pekerjaanIbu" placeholder="pekerjaanIbu"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penghasilanIbu" name="penghasilanIbu" class="custom-select col-12">
                        <option selected="" disabled>Pilih Penghasilan...</option>
                        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                        <option value="Kurang Dari Rp.500.000,00">Kurang Dari Rp.500.000,00</option>
                        <option value="Rp.500.000,00 - Rp.999.999,00">Rp.500.000,00 - Rp.999.999,00</option>
                        <option value="Rp.1.000.000,00 - Rp.1.999.999,00">Rp.1.000.000,00 - Rp.1.999.999,00</option>
                        <option value="Rp.2.000.000,00 - Rp.4.999.999,00">Rp.2.000.000,00 - Rp.4.999.999,00</option>
                        <option value="Diatas Rp.5.000.000,00">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nikIbu" name="nikIbu" placeholder="nikIbu" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sekolah Asal</label>
                <div class="col-sm-12 col-md-10">
                    <input id="sekolahAsal" name="sekolahAsal" class="form-control" type="text"
                        placeholder="Sekolah Asal" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Anak Ke-</label>
                <div class="col-sm-12 col-md-10">
                    <input id="anak" name="anak" class="form-control" type="number" placeholder="Anak Ke-" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jumlah Saudara Kandung</label>
                <div class="col-sm-12 col-md-10">
                    <input id="jmlSaudara" name="jmlSaudara" class="form-control" type="number"
                        placeholder="Jumlah Saudara Kandung" />
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
