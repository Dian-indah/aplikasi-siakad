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
                    <input class="form-control" type="text" placeholder="NIPD" />
                </div>
            </div>
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
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NISN</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="NISN" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Jenis Kelamin</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Tempat Lahir" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" placeholder="Tanggal Lahir" type="text" />
                </div>
            </div>            
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nomor KK" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Handphone</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="No Handphone" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="email" placeholder="Email" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Agama</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih Agama</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen Protestan</option>
                        <option value="2">Katolik</option>
                        <option value="2">Budha</option>
                        <option value="2">Hindu</option>
                        <option value="2">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <textarea class="form-control" placeholder="Ketik disini"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Tinggal</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Jenis Tinggal" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alat Transportasi</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Alat Transportasi" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">SKHUN</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="SKHUN" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penerima KPPS</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No KPPS</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="No KPPS" />
                </div>
            </div>
            {{-- Input Data Ayah --}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Ayah</div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Bulan Lahir</label>
                <div class="col-sm-12 col-md-10">
                <input
                    class="form-control month-picker"
                    placeholder="Pilih Bulan Lahir"
                    type="text"
                />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Tidak Sekolah</option>
                        <option value="1">Putus SD</option>
                        <option value="1">SD/Sederajat</option>
                        <option value="2">SMP/Sederajat</option>
                        <option value="2">SMA/Sederajat</option>
                        <option value="2">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Pekerjaan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih Penghasilan...</option>
                        <option value="1">Tidak Berpenghasilan</option>
                        <option value="1">Kurang Dari Rp.500.000,00</option>
                        <option value="1">Rp.500.000,00 - Rp.999.999,00</option>
                        <option value="2">Rp.1.000.000,00 - Rp.1.999.999,00</option>
                        <option value="2">Rp.2.000.000,00 - Rp.4.999.999,00</option>
                        <option value="2">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            {{-- Input Data Ibu --}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Ibu</div>
           <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Bulan Lahir</label>
                <div class="col-sm-12 col-md-10">
                <input
                    class="form-control month-picker"
                    placeholder="Pilih Bulan Lahir"
                    type="text"
                />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Tidak Sekolah</option>
                        <option value="1">Putus SD</option>
                        <option value="1">SD/Sederajat</option>
                        <option value="2">SMP/Sederajat</option>
                        <option value="2">SMA/Sederajat</option>
                        <option value="2">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Pekerjaan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih Penghasilan...</option>
                        <option value="1">Tidak Berpenghasilan</option>
                        <option value="1">Kurang Dari Rp.500.000,00</option>
                        <option value="1">Rp.500.000,00 - Rp.999.999,00</option>
                        <option value="2">Rp.1.000.000,00 - Rp.1.999.999,00</option>
                        <option value="2">Rp.2.000.000,00 - Rp.4.999.999,00</option>
                        <option value="2">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            {{-- Input Data Wali --}}
            <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Wali</div>
           <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Lengkap" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Bulan Lahir</label>
                <div class="col-sm-12 col-md-10">
                <input
                    class="form-control month-picker"
                    placeholder="Pilih Bulan Lahir"
                    type="text"
                />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Tidak Sekolah</option>
                        <option value="1">Putus SD</option>
                        <option value="1">SD/Sederajat</option>
                        <option value="2">SMP/Sederajat</option>
                        <option value="2">SMA/Sederajat</option>
                        <option value="2">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Pekerjaan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih Penghasilan...</option>
                        <option value="1">Tidak Berpenghasilan</option>
                        <option value="1">Kurang Dari Rp.500.000,00</option>
                        <option value="1">Rp.500.000,00 - Rp.999.999,00</option>
                        <option value="2">Rp.1.000.000,00 - Rp.1.999.999,00</option>
                        <option value="2">Rp.2.000.000,00 - Rp.4.999.999,00</option>
                        <option value="2">Diatas Rp.5.000.000,00</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="NIK" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Peserta Ujian Nasional</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nomor Peserta Ujian Nasional" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Seri Ijazah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nomor Seri Ijazah" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Penerima KIP</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KIP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nomor KIP" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Di KIP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Di KIP" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Registrasi Akta Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nomor Registrasi Akta Lahir" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Bank</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Bank" />
                </div>
            </div>
             <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor Rekening Bank</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nomor Rekening Bank" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Rekening Atas Nama</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Rekening Atas Nama" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Layak PIP (Usulan Dari Sekolah)</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alasan Layak PIP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Alasan Layak PIP" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kebutuhan Khusus</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Kebutuhan Khusus" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sekolah Asal</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Sekolah Asal" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Anak Ke-</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="number" placeholder="Anak Ke-" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jumlah Saudara Kandung</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="number" placeholder="Jumlah Saudara Kandung" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Berat Badan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="number" placeholder="Berat Badan" />
                </div>
            </div>
             <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tinggi Badan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="number" placeholder="Tinggi Badan" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jarak Rumah Ke Sekolah (KM)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="number" placeholder="Jarak Rumah Ke Sekolah (KM)" />
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
