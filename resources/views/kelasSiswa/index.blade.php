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
                                <td class="text-center">
                                    <a href="{{ url('/kelasSiswa/tambahSiswaKelas/' . $row->id) }}" class="btn btn-info" type="button"><i
                                            class="icon-copy fa fa-users"></i> </a>
                                    <a href="javascript:;" data-id="<?= $row->id ?>" class="btn btn-warning " id="edit"
                                        type="button"><i class="icon-copy fa fa-edit " aria-hidden="true"></i> </a>                                      
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
                <form action="{{ route('tambahKelasSiswa') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaGuru">Nama Kelas</label>
                                <select id="kelasId" name="kelasId" class="custom-select col-12" required>
                                    <option disabled selected="">Pilih..</option>
                                    @foreach ($kls as $row)
                                        <option value="{{ $row->id }}">{{ $row->namaKelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="guruPengajar">Nama Guru Pengajar</label>
                                <select id="guruPengajar" name="guruPengajar" class="custom-select col-12" required>
                                    <option disabled selected="">Pilih..</option>
                                    @foreach ($guru as $item)
                                        <option value="{{ $item->id }}">{{ $item->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="mapelId">Nama Mapel</label>
                                <select id="mapelId" name="mapelId" class="custom-select col-12" required>
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
    <!-- Start edit modal -->
    <div class="modal fade" id="editmodal" name="editmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                <form action="{{ route('updateKelasSiswa') }}" method="POST">
                    @csrf
                    <input type="text" id="idKelasSiswa" name="idKelasSiswa" hidden>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="editkelasId">Nama Kelas</label>
                                <select id="editkelasId" name="editkelasId" class="custom-select col-12" required>
                                    <option disabled selected="">Pilih..</option>
                                    @foreach ($kls as $row)
                                        <option value="{{ $row->id }}">{{ $row->namaKelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="editguruPengajar">Nama Guru Pengajar</label>
                                <select id="editguruPengajar" name="editguruPengajar" class="custom-select col-12" required>
                                    <option disabled selected="">Pilih..</option>
                                    @foreach ($guru as $item)
                                        <option value="{{ $item->id }}">{{ $item->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="editmapelId">Nama Mapel</label>
                                <select id="editmapelId" name="editmapelId" class="custom-select col-12" required>
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
    {{-- end modal edit --}}
@endsection
@section('js')
    <script>
        // Edit Data
        $(document).on('click', '#edit', function() { //editKelas ada di class
            // alert('test');
            var id = $(this).data(
                'id'
            ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                // console.log(id);
                url: "{{ url('/kelasSiswa/editKelasSiswa') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data)
                    $('#editmodal').modal('show'); //menampilkan modal
                    $('#editkelasId select').val(data.data.kelasId).change();
                    $('#editmapelId').val(data.data.mapelId).change();
                    $('#editguruPengajar').val(data.data.guruPengajar).change();
                    $('#idKelasSiswa').val(data.data.id);
                }
            });
        });
    </script>
@endsection
