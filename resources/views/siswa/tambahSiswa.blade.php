@extends('Layouts.siakad')

@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="h4">Tambah Data Siswa</p>
            </div>
        </div>
        <form>
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Siswa</div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIPD</label>
                <div class="col-sm-12 col-md-10">
                    <input id="username" name="username" class="form-control" type="text" placeholder="12345" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input id="password" name="password" class="form-control" type="text" placeholder="Password" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nama" name="nama" class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NISN</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nisn" name="nisn" class="form-control" type="text" placeholder="NISN" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12 col-md-10">
                    <select id="jenkel" name="jenkel" class="custom-select col-12">
                        <option selected="">Jenis Kelamin</option>
                        <option value="lk">Laki-Laki</option>
                        <option value="pm">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tempatLahir" name="tempatLahir" class="form-control" placeholder="Tempat Lahir"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tanggalLahir" name="tanggalLahir" class="form-control date-picker"
                        placeholder="Tanggal Lahir" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nik" name="nik" class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noKk" name="noKk" class="form-control" type="text" placeholder="Nomor KK" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Handphone</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noHp" name="noHp" class="form-control" type="text" placeholder="No Handphone" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input id="email" name="email" class="form-control" type="email" placeholder="Email" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Agama</label>
                <div class="col-sm-12 col-md-10">
                    <select id="agama" name="agama" class="custom-select col-12">
                        <option selected="">Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen Protestan</option>
                        <option value="katolik">Katolik</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <textarea id="alamat" name="alamat" class="form-control" placeholder="Ketik disini"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Tinggal</label>
                <div class="col-sm-12 col-md-10">
                    <input id="jenisTinggal" name="jenisTinggal" class="form-control" type="text"
                        placeholder="Jenis Tinggal" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alat Transportasi</label>
                <div class="col-sm-12 col-md-10">
                    <input id="trasportasi" name="trasportasi" class="form-control" type="text" placeholder="Alat Transportasi" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">SKHUN</label>
                <div class="col-sm-12 col-md-10">
                    <input id="skhun" name="skhun" class="form-control" type="text" placeholder="SKHUN" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penerima KPPS</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penerimaKpps" name="penerimaKpps" class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="y">Ya</option>
                        <option value="t">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No KPPS</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noKpps" name="noKpps" class="form-control" type="text" placeholder="No KPPS" />
                </div>
            </div>
            {{-- Input Data Ayah --}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Ayah</div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaAyah" name="namaAyah" class="form-control" type="text"
                        placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tanggalLahirAyah" name="tanggalLahirAyah" class="form-control" type="date"
                        placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="pendidikanAyah" name="pendidikanAyah" class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="tidakSekolah">Tidak Sekolah</option>
                        <option value="putusSd">Putus SD</option>
                        <option value="sd">SD/Sederajat</option>
                        <option value="smp">SMP/Sederajat</option>
                        <option value="sma">SMA/Sederajat</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
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
                        <option value="tidakAda">Tidak Berpenghasilan</option>
                        <option value="kurang500">Kurang Dari Rp.500.000,00</option>
                        <option value="500-999">Rp.500.000,00 - Rp.999.999,00</option>
                        <option value="1000-1999">Rp.1.000.000,00 - Rp.1.999.999,00</option>
                        <option value="2000-4999">Rp.2.000.000,00 - Rp.4.999.999,00</option>
                        <option value="diatas5000">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nikAyah" name="nikAyah" class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            {{-- Input Data Ibu --}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Ibu</div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaIbu" name="namaIbu" class="form-control" type="text"
                        placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tanggalLahirIbu" name="tanggalLahirIbu" class="form-control month-picker" placeholder="Pilih Tanggal Lahir" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="pendidikanIbu" name="pendidikanIbu" class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="tidakSekolah">Tidak Sekolah</option>
                        <option value="putusSd">Putus SD</option>
                        <option value="sd">SD/Sederajat</option>
                        <option value="smp">SMP/Sederajat</option>
                        <option value="sma">SMA/Sederajat</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="pekerjaanIbu" name="pekerjaanIbu" class="form-control" type="text" placeholder="Pekerjaan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penghasilanIbu" name="penghasilanIbu" class="custom-select col-12">
                        <option selected="" disabled>Pilih Penghasilan...</option>
                        <option value="tidakAda">Tidak Berpenghasilan</option>
                        <option value="kurang500">Kurang Dari Rp.500.000,00</option>
                        <option value="500-999">Rp.500.000,00 - Rp.999.999,00</option>
                        <option value="1000-1999">Rp.1.000.000,00 - Rp.1.999.999,00</option>
                        <option value="2000-4999">Rp.2.000.000,00 - Rp.4.999.999,00</option>
                        <option value="diatas5000">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nikIbu" name="nikIbu" class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            {{-- Input Data Wali --}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Wali</div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaWali" name="namaWali" class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tanggalLahirWali" name="tanggalLahirWali" class="form-control month-picker" placeholder="Pilih Tanggal Lahir" type="date" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="pendidikanWali" name="pendidikanWali" class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="tidakSekolah">Tidak Sekolah</option>
                        <option value="putusSd">Putus SD</option>
                        <option value="sd">SD/Sederajat</option>
                        <option value="smp">SMP/Sederajat</option>
                        <option value="sma">SMA/Sederajat</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="pekerjaanWali" name="pekerjaanWali" class="form-control" type="text" placeholder="Pekerjaan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penghasilanWali" name="penghasilanWali" class="custom-select col-12">
                        <option selected="" disabled>Pilih Penghasilan...</option>
                        <option value="tidakAda">Tidak Berpenghasilan</option>
                        <option value="kurang500">Kurang Dari Rp.500.000,00</option>
                        <option value="500-999">Rp.500.000,00 - Rp.999.999,00</option>
                        <option value="1000-1999">Rp.1.000.000,00 - Rp.1.999.999,00</option>
                        <option value="2000-4999">Rp.2.000.000,00 - Rp.4.999.999,00</option>
                        <option value="diatas5000">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nikWali" name="nikWali" class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Peserta Ujian Nasional</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noUn" name="noUn" class="form-control" type="text" placeholder="Nomor Peserta Ujian Nasional" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Seri Ijazah</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noSeriIjazah" name="noSeriIjazah" class="form-control" type="text" placeholder="Nomor Seri Ijazah" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penerima KIP</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penerimaKip" name="penerimaKip" class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KIP</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noKip" name="noKip" class="form-control" type="text" placeholder="Nomor KIP" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Di KIP</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaKip" name="namaKip" class="form-control" type="text" placeholder="Nama Di KIP" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Registrasi Akta Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noReqAkta" name="noRegAkta" class="form-control" type="text" placeholder="Nomor Registrasi Akta Lahir" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Bank</label>
                <div class="col-sm-12 col-md-10">
                    <input id="bank" name="bank" class="form-control" type="text" placeholder="Bank" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Rekening Bank</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noRekening" name="noRekening" class="form-control" type="text" placeholder="Nomor Rekening Bank" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Rekening Atas Nama</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaRekening" id="namaRekening" class="form-control" type="text" placeholder="Rekening Atas Nama" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Layak PIP (Usulan Dari Sekolah)</label>
                <div class="col-sm-12 col-md-10">
                    <select id="layakPip" name="layakPip" class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="y">Ya</option>
                        <option value="t">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alasan Layak PIP</label>
                <div class="col-sm-12 col-md-10">
                    <input id="alasanPip" name="alasanPip" class="form-control" type="text" placeholder="Alasan Layak PIP" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kebutuhan Khusus</label>
                <div class="col-sm-12 col-md-10">
                    <input id="kebutuhanKhusus" name="kebutuhanKhusus" class="form-control" type="text" placeholder="Kebutuhan Khusus" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sekolah Asal</label>
                <div class="col-sm-12 col-md-10">
                    <input id="sekolahAsal" name="sekolahAsal" class="form-control" type="text" placeholder="Sekolah Asal" />
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
                    <input id="jmlSaudara" name="jmlSaudara" class="form-control" type="number" placeholder="Jumlah Saudara Kandung" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Berat Badan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="bb" name="bb" class="form-control" type="number" placeholder="Berat Badan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tinggi Badan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tb" name="tb" class="form-control" type="number" placeholder="Tinggi Badan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jarak Rumah Ke Sekolah (KM)</label>
                <div class="col-sm-12 col-md-10">
                    <input id="jarakSekolah" name="jarakSekolah" class="form-control" type="number" placeholder="Jarak Rumah Ke Sekolah (KM)" />
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
