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
            {{-- 2 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIPD</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nipd" name="nipd" class="form-control" type="text" placeholder="12345" />
                </div>
            </div>
            {{-- 3 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input id="password" name="password" class="form-control" type="password" placeholder="Password" />
                </div>
            </div>
            {{-- 4 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="name" name="name" class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            {{-- 5 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NISN</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nisn" name="nisn" class="form-control" type="text" placeholder="NISN" />
                </div>
            </div>
            {{-- 6 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12 col-md-10">
                    <select id="jenkel" name="jenkel" class="custom-select col-12">
                        <option selected="">Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            {{-- 7 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tempatLahir" name="tempatLahir" class="form-control" placeholder="Tempat Lahir"
                        type="text" />
                </div>
            </div>
            {{-- 8 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tanggalLahir" name="tanggalLahir" class="form-control date-picker"
                        placeholder="Tanggal Lahir" type="date" />
                </div>
            </div>
            {{-- 9 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nik" name="nik" class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            {{-- 10 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noKk" name="noKk" class="form-control" type="text" placeholder="Nomor KK" />
                </div>
            </div>
            {{-- 11 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Handphone</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noHp" name="noHp" class="form-control" type="text" placeholder="No Handphone" />
                </div>
            </div>
            {{-- 12 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input id="email" name="email" class="form-control" type="email" placeholder="Email" />
                </div>
            </div>
            {{-- 13 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Agama</label>
                <div class="col-sm-12 col-md-10">
                    <select id="agama" name="agama" class="custom-select col-12">
                        <option selected="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            {{-- 15 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <textarea id="alamat" name="alamat" class="form-control" placeholder="Ketik disini"></textarea>
                </div>
            </div>
            {{-- 16 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Tinggal</label>
                <div class="col-sm-12 col-md-10">
                    <input id="jenisTinggal" name="jenisTinggal" class="form-control" type="text"
                        placeholder="Jenis Tinggal" />
                </div>
            </div>
            {{-- 17 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alat Transportasi</label>
                <div class="col-sm-12 col-md-10">
                    <input id="trasportasi" name="trasportasi" class="form-control" type="text"
                        placeholder="Alat Transportasi" />
                </div>
            </div>
            {{-- 18 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">SKHUN</label>
                <div class="col-sm-12 col-md-10">
                    <input id="skhun" name="skhun" class="form-control" type="text" placeholder="SKHUN" />
                </div>
            </div>
            {{-- 19 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penerima KPPS</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penerimaKpps" name="penerimaKpps" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
            {{-- 20 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No KPPS</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noKpps" name="noKpps" class="form-control" type="text" placeholder="No KPPS" />
                </div>
            </div>
            {{-- Input Data Ayah 21--}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Ayah</div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaAyah" name="namaAyah" class="form-control" type="text"
                        placeholder="Nama Lengkap" />
                </div>
            </div>
            {{-- 22 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tanggalLahirAyah" name="tanggalLahirAyah" class="form-control" type="date"
                        placeholder="Tanggal Lahir" />
                </div>
            </div>
            {{-- 23 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
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
            {{-- 24 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="pekerjaanAyah" name="pekerjaanAyah" class="form-control" type="text"
                        placeholder="Pekerjaan"  />
                </div>
            </div>
            {{-- 25 --}}
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
            {{-- 26 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nikAyah" name="nikAyah" class="form-control" type="text" placeholder="NIK"  />
                </div>
            </div>
            {{-- Input Data Ibu 27--}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Ibu</div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaIbu" name="namaIbu" class="form-control" type="text"
                        placeholder="Nama Lengkap"  />
                </div>
            </div>
            {{-- 28 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tanggalLahirIbu" name="tanggalLahirIbu" class="form-control month-picker"
                        placeholder="Pilih Tanggal Lahir" type="date"  />
                </div>
            </div>
            {{-- 29 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
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
            {{-- 30 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="pekerjaanIbu" name="pekerjaanIbu" class="form-control" type="text"
                        placeholder="Pekerjaan"  />
                </div>
            </div>
            {{-- 31 --}}
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
            {{-- 32 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nikIbu" name="nikIbu" class="form-control" type="text" placeholder="NIK"  />
                </div>
            </div>
            {{-- Input Data Wali 33--}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Wali</div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaWali" name="namaWali" class="form-control" type="text"
                        placeholder="Nama Lengkap"  />
                </div>
            </div>
            {{-- 34 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tanggalLahirWali" name="tanggalLahirWali" class="form-control month-picker"
                        placeholder="Pilih Tanggal Lahir" type="date"  />
                </div>
            </div>
            {{-- 35 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="pendidikanWali" name="pendidikanWali" class="custom-select col-12">
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
            {{-- 36 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="pekerjaanWali" name="pekerjaanWali" class="form-control" type="text"
                        placeholder="Pekerjaan"  />
                </div>
            </div>
            {{-- 37 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penghasilanWali" name="penghasilanWali" class="custom-select col-12">
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
            {{-- 38 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input id="nikWali" name="nikWali" class="form-control" type="text" placeholder="NIK"  />
                </div>
            </div>
            {{-- 39 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Peserta Ujian Nasional</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noUn" name="noUn" class="form-control" type="text"
                        placeholder="Nomor Peserta Ujian Nasional"  />
                </div>
            </div>
            {{-- 40 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Seri Ijazah</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noSeriIjazah" name="noSeriIjazah" class="form-control" type="text"
                        placeholder="Nomor Seri Ijazah"  />
                </div>
            </div>
            {{-- 41 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penerima KIP</label>
                <div class="col-sm-12 col-md-10">
                    <select id="penerimaKip" name="penerimaKip" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
            {{-- 42 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KIP</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noKip" name="noKip" class="form-control" type="text" placeholder="Nomor KIP"  />
                </div>
            </div>
            {{-- 43 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Di KIP</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaKip" name="namaKip" class="form-control" type="text"
                        placeholder="Nama Di KIP"  />
                </div>
            </div>
            {{-- 44 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Registrasi Akta Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noReqAkta" name="noRegAkta" class="form-control" type="text"
                        placeholder="Nomor Registrasi Akta Lahir"  />
                </div>
            </div>
            {{-- 45 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Bank</label>
                <div class="col-sm-12 col-md-10">
                    <input id="bank" name="bank" class="form-control" type="text" placeholder="Bank"  />
                </div>
            </div>
            {{-- 44 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Rekening Bank</label>
                <div class="col-sm-12 col-md-10">
                    <input id="noRekening" name="noRekening" class="form-control" type="text"
                        placeholder="Nomor Rekening Bank"  />
                </div>
            </div>
            {{-- 45 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Rekening Atas Nama</label>
                <div class="col-sm-12 col-md-10">
                    <input id="namaRekening" id="namaRekening" class="form-control" type="text"
                        placeholder="Rekening Atas Nama"  />
                </div>
            </div>
            {{-- 46 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Layak PIP (Usulan Dari Sekolah)</label>
                <div class="col-sm-12 col-md-10">
                    <select id="layakPip" name="layakPip" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
            {{-- 47 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alasan Layak PIP</label>
                <div class="col-sm-12 col-md-10">
                    <input id="alasanPip" name="alasanPip" class="form-control" type="text"
                        placeholder="Alasan Layak PIP"  />
                </div>
            </div>
            {{-- 48 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kebutuhan Khusus</label>
                <div class="col-sm-12 col-md-10">
                    <input id="kebutuhanKhusus" name="kebutuhanKhusus" class="form-control" type="text"
                        placeholder="Kebutuhan Khusus"  />
                </div>
            </div>
            {{-- 49 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sekolah Asal</label>
                <div class="col-sm-12 col-md-10">
                    <input id="sekolahAsal" name="sekolahAsal" class="form-control" type="text"
                        placeholder="Sekolah Asal"  />
                </div>
            </div>
            {{-- 50 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Anak Ke-</label>
                <div class="col-sm-12 col-md-10">
                    <input id="anak" name="anak" class="form-control" type="number" placeholder="Anak Ke-"  />
                </div>
            </div>
            {{-- 51 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jumlah Saudara Kandung</label>
                <div class="col-sm-12 col-md-10">
                    <input id="jmlSaudara" name="jmlSaudara" class="form-control" type="number"
                        placeholder="Jumlah Saudara Kandung"  />
                </div>
            </div>
            {{-- 52 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Berat Badan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="bb" name="bb" class="form-control" type="number"
                        placeholder="Berat Badan"  />
                </div>
            </div>
            {{-- 53 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tinggi Badan</label>
                <div class="col-sm-12 col-md-10">
                    <input id="tb" name="tb" class="form-control" type="number"
                        placeholder="Tinggi Badan"  />
                </div>
            </div>
            {{-- 54 --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jarak Rumah Ke Sekolah (KM)</label>
                <div class="col-sm-12 col-md-10">
                    <input id="jarakSekolah" name="jarakSekolah" class="form-control" type="number"
                        placeholder="Jarak Rumah Ke Sekolah (KM)"  />
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
    {{-- <script>
  $(document).ready(function() {
    $('#statusPerkawinan').change(function() {
      if ($(this).val() === 'Belum Kawin') {
        $('#namaPasangan').prop('disabled', true).val('-');
        $('#nipPasangan').prop('disabled', true).val('-');
        $('#pekerjaanPasangan').prop('disabled', true).val('-');
      } else {
        $('#namaPasangan').prop('disabled', false);
        $('#nipPasangan').prop('disabled', false);
        $('#pekerjaanPasangan').prop('disabled', false);
      }
    });
  });
</script> --}}
@endsection
