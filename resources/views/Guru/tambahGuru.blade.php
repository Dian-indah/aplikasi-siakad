@extends('Layouts.siakad')
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="h4">Tambah Data Guru</p>
            </div>
        </div>
        <form action="{{ route('simpanGuru') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="username" name="username" type="text" placeholder="Nama" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
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
                <label class="col-sm-12 col-md-2 col-form-label">NUPTK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nuptk" name="nuptk" placeholder="NUPTK" type="text" />
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
                <label class="col-sm-12 col-md-2 col-form-label">NIP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nip" name="nip" placeholder="NIP" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Telepon</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="notelp" name="notelp" placeholder="No Telepon" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status Kepegawaian</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="statusKepegawaian" name="statusKepegawaian"
                        placeholder="Status Kepegawaian" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">SK Pengangkatan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="skPengangkatan" name="skPengangkatan" placeholder="SK Pengangkatan"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">TMT Pengangkatan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="tmpPengangkatan" name="tmpPengangkatan"
                        placeholder="TMT Pengangkatan" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Lembaga Pengangkatan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="lembagaPengangkatan" name="lembagaPengangkatan"
                        placeholder="Lembaga Pengangkatan" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sumber Gaji</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="sumberGaji" name="sumberGaji" placeholder="Sumber Gaji"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis PTK</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="jenisPtk" name="jenisPtk" placeholder="Jenis PTK"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NPWP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="npwp" name="npwp" placeholder="NPWP" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Wajib Pajak</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="namaNpwp" name="namaNpwp" placeholder="Nama Wajib Pajak"
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
                <label class="col-sm-12 col-md-2 col-form-label">Kewarganegaraan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="kewarganegaraan" name="kewarganegaraan"
                        placeholder="Kewarganegaraan" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Ibu Kandung</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="ibuKandung" name="ibuKandung" placeholder="Nama Ibu Kandung"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status Perkawinan</label>
                <div class="col-sm-12 col-md-10">
                    <select id="statusPerkawinan" name="statusPerkawinan" class="custom-select col-12">
                        <option selected="" disabled>Status...</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Sudah Kawin">Kawin</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Suami/Istri</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="namaPasangan" name="namaPasangan" placeholder="Nama Suami/Istri"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">NIP Suami/Istri</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="nipPasangan" name="nipPasangan" placeholder="NIP Suami/Istri"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan Suami/Istri</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="pekerjaanPasangan" name="pekerjaanPasangan"
                        placeholder="Pekerjaan Suami/Istri" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sudah Lisensi Kepala Sekolah</label>
                <div class="col-sm-12 col-md-10">
                    <select id="lisensiKepsek" name="lisensiKepsek" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Pernah Diklat Kepegawaian</label>
                <div class="col-sm-12 col-md-10">
                    <select id="diklatKepegawaian" name="diklatKepegawaian" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Keahlian Braille</label>
                <div class="col-sm-12 col-md-10">
                    <select id="keahlianBraile" name="keahlianBraile" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Keahlian Bahasa Isyarat</label>
                <div class="col-sm-12 col-md-10">
                    <select id="keahlianBahasaIsyarat" name="keahlianBahasaIsyarat" class="custom-select col-12">
                        <option selected="" disabled>Pilih...</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Bank</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="bank" name="bank" placeholder="Bank" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Rekening</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="norek" name="norek" placeholder="No Rekening"
                        type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Rekening Atas Nama</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" id="namaRek" name="namaRek" placeholder="Rekening Atas Nama"
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
    <script src="{{ asset('scripts/tambahGuru.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    {{-- <script>
    $(document).ready(function() {
      $("#tanggalLahir").datepicker();
    });
  </script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
</script>
@endsection