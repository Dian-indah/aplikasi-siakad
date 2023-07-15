@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Kelas Siswa</h4>
                    </div>
                </div>                
                <div class="text-right col-md-2 col-sm-2 dropdown">
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown">Kelas</a>

                        <div id="dropdown" class="dropdown-menu dropdown-menu-right">
                            @foreach ($tingkatKelas as $kelas)
                                <a class="dropdown-item" href="#"> {{ $kelas->tingkatKelas }} </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right col-md-2 col-sm-2">
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#small-modal"><i
                            class="icon-copy fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
                </div> <br><br>
                <table class="table table-bordered">                   
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Guru Pengajar</th>
                            <th scope="col">Wali Kelas</th>
                            <th scope="col">Jumlah Siswa</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelasSiswa as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->namaKelas }}</td>
                                <td>{{ $row->namaMapel }}</td>
                                <td>{{ $row->guruPengajar }}</td>
                                <td>{{ $row->waliKelas }}</td>
                                <td>{{ $row->jumlahSiswa }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info" type="button"><i
                                            class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                    <a href="#" class="btn btn-warning" type="button"><i class="icon-copy fa fa-edit"
                                            aria-hidden="true"></i> Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>

    <!-- Start tambah modal -->
    <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Tambah Kelas Siswa
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaGuru">Nama Kelas</label>
                                <select id="namaKelas" name="namaKelas" class="custom-select col-12" required>
                                    <option disabled selected="">Pilih..</option>
                                    @foreach ($kls as $row)
                                        <option value="{{ $row->id }}">{{ $row->namaKelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaGuru">Nama Guru Pengajar</label>                                
                                <select id="namaGuru" name="namaGuru" class="custom-select col-12" required>
                                    <option disabled selected="">Pilih..</option>
                                    @foreach ($guru as $item)
                                        <option value="{{ $item->id }}">{{ $item->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaMapel">Nama Mapel</label> 
                                <select id="namaMapel" name="namaMapel" class="custom-select col-12" required>
                                    <option disabled selected="">Pilih..</option>
                                    @foreach ($mapel as $item)
                                        <option value="{{ $item->id }}">{{ $item->namaMapel }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal tambah --}}
@endsection
