@extends('Layouts.siakad')

@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="h4">Tambah Data Guru</p>
            </div>
        </div>
        <form>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="NIK" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Nomor KK" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NUPTK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="NUPTK" type="text" />
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
                <label class="col-sm-12 col-md-2 col-form-label">NIP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="NIP" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Telepon</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="No Telepon" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Email" type="email" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status Kepegawaian</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Status Kepegawaian" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">SK Pengangkatan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="SK Pengangkatan" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">TMT Pengangkatan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="TMT Pengangkatan" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Lembaga Pengangkatan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Lembaga Pengangkatan" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sumber Gaji</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Sumber Gaji" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis PTK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Jenis PTK" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NPWP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="NPWP" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Wajib Pajak</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Nama Wajib Pajak" type="text" />
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
                <label class="col-sm-12 col-md-2 col-form-label">Kewarganegaraan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Kewarganegaraan" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Ibu Kandung</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Nama Ibu Kandung" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status Perkawinan</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Status...</option>
                        <option value="1">Belum Kawin</option>
                        <option value="2">Kawin</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Suami/Istri</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Nama Suami/Istri" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIP Suami/Istri</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="NIP Suami/Istri" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan Suami/Istri</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Pekerjaan Suami/Istri" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sudah Lisensi Kepala Sekolah</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pernah Diklat Kepegawaian</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Keahlian Braille</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Keahlian Bahasa Isyarat</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Pilih...</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Bank</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Bank" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Rekening</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="No Rekening" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Rekening Atas Nama</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Rekening Atas Nama" type="text" />
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
