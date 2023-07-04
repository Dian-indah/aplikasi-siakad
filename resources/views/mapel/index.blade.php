@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        {{-- {{$postId}} --}}
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Mata Pelajaran</h4>
                    </div>
                </div>
                <div class="pull-right col-md-2 col-sm-2">
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown">Kelas</a>

                        <div id="dropdown" class="dropdown-menu dropdown-menu-right">                            
                            @foreach ($tingkatKelas as $kelas)
                            <a class="dropdown-item" href="#"> {{ $kelas->tingkatKelas}} </a>  
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
                            <th scope="col">Kode Mapel</th>
                            <th scope="col">Nama Matpel</th>
                            <th scope="col">Tingkat Kelas</th>
                            <th scope="col">Kurikulum</th>
                            <th scope="col">Status di Kurikulum</th>
                            <th scope="col">Kompetensi Keahlian</th>
                            <th scope="col">Nama PTK</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $row->kodeMapel }}</td>
                            <td>{{ $row->namaMapel }}</td>
                            <td>{{ $row->tingkatKelas }}</td>
                            <td>{{ $row->namaKurikulum }}</td>
                            <td>{{ $row->statusKurikulum }}</td>
                            <td>{{ $row->kompetensiKeahlian }}</td>
                            <td>{{ $row->namaPtk }}</td>
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" type="button"><i
                                        class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" type="button"><i
                                        class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Tambah Mata Pelajaran
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{route('tambahMapel')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="kodeMapel">Kode Mapel</label>
                                <input id="kodeMapel" name="kodeMapel" class="form-control" type="text"
                                    placeholder="Kode Mapel" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaMapel">Nama Mapel</label>
                                <input id="namaMapel" name="namaMapel" class="form-control" type="text"
                                    placeholder="Nama Mapel" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="tingkatKelasId">Tingkat Kelas</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="tingkatKelasId" name="tingkatKelasId" class="custom-select col-12" required>
                                        <option disabled selected="">Pilih..</option>
                                        @foreach ($tingkatKelas as $row)
                                            <option value="{{ $row->id }}">{{ $row->tingkatKelas }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="kurikulumId">Kurikulum</label>
                                <div class="col-sm-12 col-md-12">
                                    <select id="kurikulumId" name="kurikulumId" class="custom-select col-12" required>
                                        <option disabled selected="">Pilih..</option>
                                        @foreach ($kurikulum as $row)
                                            <option value="{{ $row->id }}">{{ $row->namaKurikulum }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="statusKurikulum">Status Kurikulum</label>
                                <input id="statusKurikulum" name="statusKurikulum" class="form-control" type="text"
                                    placeholder="Status Kurikulum" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="kompetensiKeahlian">Kompetensi Keahlian</label>
                                <input id="kompetensiKeahlian" name="kompetensiKeahlian" class="form-control" type="text"
                                    placeholder="Kompetensi Keahlian" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaPtk">Nama PTK</label>
                                <input id="namaPtk" name="namaPtk" class="form-control" type="text"
                                    placeholder="Nama PTK" required />
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
