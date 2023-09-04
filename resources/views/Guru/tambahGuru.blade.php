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
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label ">Username</label>
                <div class="col-sm-12 col-md-10">
                    <input
                        class="form-control @error('username') is-invalid @enderror" id="username" name="username" type="text" placeholder="Userame" />
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group
                        row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Password" />
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
                        <input class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" name="nuptk"
                            placeholder="Nomor Unik Pendidik dan Tenaga Kependidikan" type="text" />
                            @error('nuptk')
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
