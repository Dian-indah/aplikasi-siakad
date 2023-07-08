@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Edit Data Guru </h4>
                    </div>
                </div>                
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <form action="{{ route('updateGuru')}}" method="POST">
                    <input value="{{ $guru->id }}" id="idGuru" name="idGuru" hidden />
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->username }}" class="form-control" id="username" name="username" type="text"
                                    placeholder="Nama" />
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->password }}" class="form-control" id="password" name="password" type="password"
                                    placeholder="Nama" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->nik }}" class="form-control" id="nik" name="nik" placeholder="NIK"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->noKk }}" class="form-control" id="noKk" name="noKk" placeholder="Nomor KK"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NUPTK</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->nuptk }}" class="form-control" id="nuptk" name="nuptk" placeholder="NUPTK"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-12 col-md-12">
                                <select id="jenkel" name="jenkel" class="custom-select col-12">                                    
                                    <option 
                                        <?php if ($guru->jenkel=='Laki-laki') {
                                            echo ' selected';
                                        } ?>
                                    value="Laki-laki">Laki-Laki</option>
                                    <option 
                                        <?= ($guru->jenkel=='Perempuan') ? ' selected' : '' ?>
                                    value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->tempatLahir }}" class="form-control" id="tempatLahir" name="tempatLahir"
                                    placeholder="Tempat Lahir" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->tanggalLahir }}" class="form-control date-picker" id="tanggalLahir" name="tanggalLahir"
                                    placeholder="Tanggal Lahir" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NIP</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->nip }}" class="form-control" id="nip" name="nip" placeholder="NIP"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">No Telepon</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->notelp }}" class="form-control" id="notelp" name="notelp" placeholder="No Telepon"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->email }}" class="form-control" id="email" name="email" placeholder="Email"
                                    type="email" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Status Kepegawaian</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->statusKepegawaian }}" class="form-control" id="statusKepegawaian" name="statusKepegawaian"
                                    placeholder="Status Kepegawaian" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">SK Pengangkatan</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->skPengangkatan }}" class="form-control" id="skPengangkatan" name="skPengangkatan"
                                    placeholder="SK Pengangkatan" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">TMT Pengangkatan</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->tmpPengangkatan }}" class="form-control" id="tmpPengangkatan" name="tmpPengangkatan"
                                    placeholder="TMT Pengangkatan" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Lembaga Pengangkatan</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->lembagaPengangkatan }}" class="form-control" id="lembagaPengangkatan" name="lembagaPengangkatan"
                                    placeholder="Lembaga Pengangkatan" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Sumber Gaji</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->sumberGaji }}" class="form-control" id="sumberGaji" name="sumberGaji" placeholder="Sumber Gaji"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jenis PTK</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->jenisPtk }}" class="form-control" id="jenisPtk" name="jenisPtk" placeholder="Jenis PTK"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NPWP</label>
                            <div class="col-sm-12 col-md-10">
                                <input value="{{ $guru->npwp }}" class="form-control" id="npwp" name="npwp" placeholder="NPWP"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Wajib Pajak</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->namaNpwp }}" class="form-control" id="namaNpwp" name="namaNpwp"
                                    placeholder="Nama Wajib Pajak" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Agama</label>
                            <div class="col-sm-12 col-md-12">
                                <select id="agama" name="agama" class="custom-select col-12">
                                    <option 
                                        <?php if ($guru->agama=='Islam') {
                                            echo ' selected';
                                        } ?>
                                    value="Islam">Islam</option>
                                    <option 
                                        <?php if ($guru->agama=='Kristen Protestan') {
                                            echo ' selected';
                                        } ?>
                                    value="Kristen Protestan">Kristen Protestan</option>
                                    <option 
                                        <?php if ($guru->agama=='Katolik') {
                                            echo ' selected';
                                        } ?>
                                    value="Katolik">Katolik</option>
                                    <option 
                                        <?php if ($guru->agama=='Budha') {
                                            echo ' selected';
                                        } ?>
                                    value="Budha">Budha</option>
                                    <option 
                                        <?php if ($guru->agama=='Hindu') {
                                            echo ' selected';
                                        } ?>
                                    value="Hindu">Hindu</option>
                                    <option 
                                        <?php if ($guru->agama=='Konghucu') {
                                            echo ' selected';
                                        } ?>
                                    value="Konghucu">Konghucu</option>                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                            <div class="col-sm-12 col-md-12">
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Ketik disini">{{ $guru->alamat }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->kewarganegaraan }}" class="form-control" id="kewarganegaraan" name="kewarganegaraan"
                                    placeholder="Kewarganegaraan" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Ibu Kandung</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->ibuKandung }}" class="form-control" id="ibuKandung" name="ibuKandung"
                                    placeholder="Nama Ibu Kandung" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Status Perkawinan</label>
                            <div class="col-sm-12 col-md-12">
                                <select id="statusPerkawinan" name="statusPerkawinan" class="custom-select col-12">
                                    <option 
                                        <?php if ($guru->statusPerkawinan=='Belum Kawin') {
                                            echo ' selected';
                                        } ?>
                                    value="Belum Kawin">Belum Kawin</option>
                                    <option 
                                        <?php if ($guru->statusPerkawinan=='Sudah Kawin') {
                                            echo ' selected';
                                        } ?>
                                    value="Sudah Kawin">Sudah Kawin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Suami/Istri</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->namaPasangan }}" class="form-control" id="namaPasangan" name="namaPasangan"
                                    placeholder="Nama Suami/Istri" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">NIP Suami/Istri</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->nipPasangan }}" class="form-control" id="nipPasangan" name="nipPasangan"
                                    placeholder="NIP Suami/Istri" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Pekerjaan Suami/Istri</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->pekerjaanPasangan }}" class="form-control" id="pekerjaanPasangan" name="pekerjaanPasangan"
                                    placeholder="Pekerjaan Suami/Istri" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Sudah Lisensi Kepala Sekolah</label>
                            <div class="col-sm-12 col-md-12">
                                <select id="lisensiKepsek" name="lisensiKepsek" class="custom-select col-12">
                                    <option 
                                        <?php if ($guru->lisensiKepsek=='Ya') {
                                            echo ' selected';
                                        } ?>
                                    value="Ya">Ya</option>
                                    <option 
                                        <?php if ($guru->lisensiKepsek=='Tidak') {
                                            echo ' selected';
                                        } ?>
                                    value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Pernah Diklat Kepegawaian</label>
                            <div class="col-sm-12 col-md-12">
                                <select id="diklatKepegawaian" name="diklatKepegawaian" class="custom-select col-12">
                                    <option 
                                        <?php if ($guru->diklatKepegawaian=='Ya') {
                                            echo ' selected';
                                        } ?>
                                    value="Ya">Ya</option>
                                    <option 
                                        <?php if ($guru->diklatKepegawaian=='Tidak') {
                                            echo ' selected';
                                        } ?>
                                    value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Keahlian Braille</label>
                            <div class="col-sm-12 col-md-12">
                                <select id="keahlianBraile" name="keahlianBraile" class="custom-select col-12">
                                    <option 
                                        <?php if ($guru->keahlianBraile=='Ya') {
                                            echo ' selected';
                                        } ?>
                                    value="Ya">Ya</option>
                                    <option 
                                        <?php if ($guru->keahlianBraile=='Tidak') {
                                            echo ' selected';
                                        } ?>
                                    value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Keahlian Bahasa Isyarat</label>
                            <div class="col-sm-12 col-md-12">
                                <select id="keahlianBahasaIsyarat" name="keahlianBahasaIsyarat"
                                    class="custom-select col-12">
                                    <option selected="">Pilih...</option>
                                    <option 
                                        <?php if ($guru->keahlianBahasaIsyarat=='Ya') {
                                            echo ' selected';
                                        } ?>
                                    value="Ya">Ya</option>
                                    <option 
                                        <?php if ($guru->keahlianBahasaIsyarat=='Tidak') {
                                            echo ' selected';
                                        } ?>
                                    value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Bank</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->bank }}" class="form-control" id="bank" name="bank" placeholder="Bank"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">No Rekening</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->norek }}" class="form-control" id="norek" name="norek" placeholder="No Rekening"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Rekening Atas Nama</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->namaRek }}" class="form-control" id="namaRek" name="namaRek"
                                    placeholder="Rekening Atas Nama" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">                            
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>          
@endsection