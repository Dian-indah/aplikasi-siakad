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
                    @csrf
                    <input value="{{ $guru->id }}" id="idGuru" name="idGuru" hidden />
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->username }}" class="form-control" id="username" name="username" type="text"
                                     />
                            </div>
                        </div>
                    </div>        
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="{{ $guru->nama }}" class="form-control" id="nama" name="nama" type="text"
                                     />
                            </div>
                        </div>
                    </div>             
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-12">
                                <input value="" class="form-control" id="password" name="password" type="password"
                                    placeholder="password" />
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
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>          
@endsection