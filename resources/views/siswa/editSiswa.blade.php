@extends('Layouts.siakad')

@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="h4">Tambah Data Siswa</p>
            </div>
        </div>
        <form action="{{ route('updateSiswa') }}" method="POST">
            @csrf
            <input value="{{ $siswa->id }}" id="idSiswa" name="idSiswa" hidden />
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Siswa</div>
            {{-- 1 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                <div class="col-sm-12 col-md-10">
                    <input id="username" name="username" value="{{ $siswa->username }}"
                        class="form-control @error('username') is-invalid @enderror" type="text" placeholder="siswa" />
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="name" name="name" value="{{ $siswa->name }}"
                        class="form-control @error('name') is-invalid @enderror" type="text"
                        placeholder="Nama Lengkap" />
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input id="email" name="email" value="{{ $siswa->email }}" class="form-control" type="email"
                        placeholder="dian@gmail.com" />
                </div>
            </div>
            {{-- 3 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input id="password" name="password" value=""
                        class="form-control @error('password') is-invalid @enderror" type="password"
                        placeholder="Password" />
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NISN</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nisn" name="nisn" value="{{ $siswa->nisn }}"
                        class="form-control @error('nisn') is-invalid @enderror" type="nisn" placeholder="nisn" />
                    @error('nisn')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12 col-md-10">
                    <select id="jenkel" name="jenkel" class="custom-select col-12">
                        <option <?php if ($siswa->jenkel == 'Laki-laki') {
                            echo ' selected';
                        } ?> value="Laki-laki">Laki-Laki</option>
                        <option <?= $siswa->jenkel == 'Perempuan' ? ' selected' : '' ?> value="Perempuan">Perempuan
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="tempatLahir" name="tempatLahir" value="{{ $siswa->tempatLahir }}"
                        placeholder="Tempat Lahir" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" id="tanggalLahir" name="tanggalLahir"
                        value="{{ $siswa->tanggalLahir }}" placeholder="Tanggal Lahir" type="date" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nik" name="nik" value="{{ $siswa->nik }}" placeholder="NIK"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                        id="noKk" name="noKk" value="{{ $siswa->noKk }}" placeholder="Nomor KK"
                        type="text" />
                    @error('nik')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="noHp" name="noHp" value="{{ $siswa->noHp }}"
                        placeholder="Nomor Handphone" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Agama</label>
                <div class="col-sm-12 col-md-10">
                    <select id="agama" name="agama" class="custom-select col-12">
                        <option <?php if ($siswa->agama == 'Islam') {
                            echo ' selected';
                        } ?> value="Islam">Islam</option>
                        <option <?php if ($siswa->agama == 'Kristen Protestan') {
                            echo ' selected';
                        } ?> value="Kristen Protestan">Kristen Protestan</option>
                        <option <?php if ($siswa->agama == 'Katolik') {
                            echo ' selected';
                        } ?> value="Katolik">Katolik</option>
                        <option <?php if ($siswa->agama == 'Budha') {
                            echo ' selected';
                        } ?> value="Budha">Budha</option>
                        <option <?php if ($siswa->agama == 'Hindu') {
                            echo ' selected';
                        } ?> value="Hindu">Hindu</option>
                        <option <?php if ($siswa->agama == 'Konghucu') {
                            echo ' selected';
                        } ?> value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Ketik disini">{{ $siswa->alamat }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Tinggal</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="jenisTinggal" name="jenisTinggal"
                        value="{{ $siswa->jenisTinggal }}" placeholder="Jenis Tinggal" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Transportasi</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="transportasi" name="transportasi"
                        value="{{ $siswa->transportasi }}" placeholder=" transportasi" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('namaAyah') is-invalid @enderror" id="namaAyah" name="namaAyah"
                        value="{{ $siswa->namaAyah }}" placeholder="namaAyah" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" id="tanggalLahirAyah" name="tanggalLahirAyah"
                        value="{{ $siswa->tanggalLahirAyah }}" placeholder="Tanggal Lahir Ayah" type="date" />
                    @error('namaAyah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <select id="pendidikanAyah" name="pendidikanAyah" class="custom-select col-12">
                        <option <?php if ($siswa->pendidikanAyah == 'Tidak Sekolah') {
                            echo ' selected';
                        } ?> value="Tidak Sekolah">Tidak Sekolah</option>
                        <option <?php if ($siswa->pendidikanAyah == 'Putus SD') {
                            echo ' selected';
                        } ?> value="Putus SD">Putus SD</option>
                        <option <?php if ($siswa->pendidikanAyah == 'SD/Sederajat') {
                            echo ' selected';
                        } ?> value="SD/Sederajat">SD/Sederajat</option>
                        <option <?php if ($siswa->pendidikanAyah == 'SMP/Sederajat') {
                            echo ' selected';
                        } ?> value="SMP/Sederajat">SMP/Sederajat</option>
                        <option <?php if ($siswa->pendidikanAyah == 'SMA/Sederajat') {
                            echo ' selected';
                        } ?> value="SMA/Sederajat">SMA/Sederajat</option>
                        <option <?php if ($siswa->pendidikanAyah == 'S1') {
                            echo ' selected';
                        } ?> value="S1">S1</option>
                        <option <?php if ($siswa->pendidikanAyah == 'Diatas S1') {
                            echo ' selected';
                        } ?> value="Diatas S1">Diatas S1</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input id="pekerjaanAyah" name="pekerjaanAyah" value="{{ $siswa->pekerjaanAyah }}"
                        class="form-control" type="text" placeholder="Pekerjaan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penghasilanAyah" name="penghasilanAyah" class="custom-select col-12">
                        <option <?php if ($siswa->penghasilanAyah == 'Tidak Berpenghasilan') {
                            echo ' selected';
                        } ?> value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                        <option <?php if ($siswa->penghasilanAyah == 'Kurang Dari Rp.500.000,00') {
                            echo ' selected';
                        } ?> value="Kurang Dari Rp.500.000,00">Kurang Dari Rp.500.000,00</option>
                        <option <?php if ($siswa->penghasilanAyah == 'Rp.500.000,00 - Rp.999.999,00') {
                            echo ' selected';
                        } ?> value="Rp.500.000,00 - Rp.999.999,00">Rp.500.000,00 - Rp.999.999,00
                        </option>
                        <option <?php if ($siswa->penghasilanAyah == 'Rp.1.000.000,00 - Rp.1.999.999,00') {
                            echo ' selected';
                        } ?> value="Rp.1.000.000,00 - Rp.1.999.999,00">Rp.1.000.000,00 -
                            Rp.1.999.999,00</option>
                        <option <?php if ($siswa->penghasilanAyah == 'Rp.2.000.000,00 - Rp.4.999.999,00') {
                            echo ' selected';
                        } ?> value="Rp.2.000.000,00 - Rp.4.999.999,00">Rp.2.000.000,00 -
                            Rp.4.999.999,00</option>
                        <option <?php if ($siswa->penghasilanAyah == 'Diatas Rp.5.000.000,00') {
                            echo ' selected';
                        } ?> value="Diatas Rp.5.000.000,00">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK Ayah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nikAyah" name="nikAyah" value="{{ $siswa->nikAyah }}"
                        placeholder="nikAyah" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('namaIbu') is-invalid @enderror" id="namaIbu" name="namaIbu"
                        value="{{ $siswa->namaIbu }}" placeholder="namaIbu" type="text" />
                    @error('namaIbu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" id="tanggalLahirIbu" name="tanggalLahirIbu"
                        value="{{ $siswa->tanggalLahirIbu }}" placeholder="Tanggal Lahir Ibu" type="date" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <select id="pendidikanIbu" name="pendidikanIbu" class="custom-select col-12">
                        <option <?php if ($siswa->pendidikanIbu == 'Tidak Sekolah') {
                            echo ' selected';
                        } ?> value="Tidak Sekolah">Tidak Sekolah</option>
                        <option <?php if ($siswa->pendidikanIbu == 'Putus SD') {
                            echo ' selected';
                        } ?> value="Putus SD">Putus SD</option>
                        <option <?php if ($siswa->pendidikanIbu == 'SD/Sederajat') {
                            echo ' selected';
                        } ?> value="SD/Sederajat">SD/Sederajat</option>
                        <option <?php if ($siswa->pendidikanIbu == 'SMP/Sederajat') {
                            echo ' selected';
                        } ?> value="SMP/Sederajat">SMP/Sederajat</option>
                        <option <?php if ($siswa->pendidikanIbu == 'SMA/Sederajat') {
                            echo ' selected';
                        } ?> value="SMA/Sederajat">SMA/Sederajat</option>
                        <option <?php if ($siswa->pendidikanIbu == 'S1') {
                            echo ' selected';
                        } ?> value="S1">S1</option>
                        <option <?php if ($siswa->pendidikanIbu == 'Diatas S1') {
                            echo ' selected';
                        } ?> value="Diatas S1">Diatas S1</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="pekerjaanIbu" name="pekerjaanIbu"
                        value="{{ $siswa->pekerjaanIbu }}" placeholder="pekerjaanIbu" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penghasilanIbu" name="penghasilanIbu" class="custom-select col-12">
                        <option <?php if ($siswa->penghasilanIbu == 'Tidak Berpenghasilan') {
                            echo ' selected';
                        } ?> value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                        <option <?php if ($siswa->penghasilanIbu == 'Kurang Dari Rp.500.000,00') {
                            echo ' selected';
                        } ?> value="Kurang Dari Rp.500.000,00">Kurang Dari Rp.500.000,00</option>
                        <option <?php if ($siswa->penghasilanIbu == 'Rp.500.000,00 - Rp.999.999,00') {
                            echo ' selected';
                        } ?> value="Rp.500.000,00 - Rp.999.999,00">Rp.500.000,00 - Rp.999.999,00
                        </option>
                        <option <?php if ($siswa->penghasilanIbu == 'Rp.1.000.000,00 - Rp.1.999.999,00') {
                            echo ' selected';
                        } ?> value="Rp.1.000.000,00 - Rp.1.999.999,00">Rp.1.000.000,00 -
                            Rp.1.999.999,00</option>
                        <option <?php if ($siswa->penghasilanIbu == 'Rp.2.000.000,00 - Rp.4.999.999,00') {
                            echo ' selected';
                        } ?> value="Rp.2.000.000,00 - Rp.4.999.999,00">Rp.2.000.000,00 -
                            Rp.4.999.999,00</option>
                        <option <?php if ($siswa->penghasilanIbu == 'Diatas Rp.5.000.000,00') {
                            echo ' selected';
                        } ?> value="Diatas Rp.5.000.000,00">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK Ibu</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nikIbu" name="nikIbu" value="{{ $siswa->nikIbu }}"
                        placeholder="nikIbu" type="text" />
                </div>
            </div>
            {{-- 49 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sekolah Asal</label>
                <div class="col-sm-12 col-md-10">
                    <input id="sekolahAsal" name="sekolahAsal" value="{{ $siswa->sekolahAsal }}" class="form-control"
                        type="text" placeholder="Sekolah Asal" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Anak Ke-</label>
                <div class="col-sm-12 col-md-10">
                    <input id="anak" name="anak" value="{{ $siswa->anak }}" class="form-control"
                        type="number" placeholder="Anak Ke-" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jumlah Saudara Kandung</label>
                <div class="col-sm-12 col-md-10">
                    <input id="jmlSaudara" name="jmlSaudara" value="{{ $siswa->jmlSaudara }}" class="form-control"
                        type="number" placeholder="Jumlah Saudara Kandung" />
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
