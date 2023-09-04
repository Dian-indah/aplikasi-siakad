@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Anggota Administrator </h4>
                    </div>
                </div>
                <div class="pull-right col-md-2 col-sm-2">
                    <a href="" class="btn btn-success btn-sm scroll-click" data-toggle="modal"
                        data-target="#small-modal"><i class="icon-copy fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Status Kepegawaian</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->statusKepegawaian }}</td>
                                <td>{{ $row->notelp }}</td>
                                <td>{{ $row->email }}</td>
                                <td class="text-center">
                                    <a href="javascript:;" data-id="<?= $row->id ?>" class="btn btn-info" id="tampilPegawai"
                                        type="button"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="javascript:;" data-id="<?= $row->id ?>" class="btn btn-warning"
                                        id="editPegawai" type="button"><i class="icon-copy fa fa-edit"
                                            aria-hidden="true"></i> </a>
                                {{-- <td>
                                    @if (Auth::guard('admin') === 'admin' && Auth::guard('admin')->id !== $row->id)
                                        <!-- Tampilkan tombol untuk menghapus akun jika user adalah admin dan bukan akun yang sedang login -->
                                        <form action="{{ route('users.destroy', $row->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-sm btn-danger" type="submit">Hapus Akun</button>
                                        </form>
                                    @endif
                                </td> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- end content bawah --}}

    <!-- Start tampil modal -->
    <div class="modal fade" id="showDataPegawai" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content justify-center">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Detail Data Pegawai
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×

                    </button>
                </div>
                <form>
                    <input id="idPegawai" name="idPegawai" hidden />
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Username</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="username" name="username" type="text" disabled
                                    placeholder="Username" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="name" name="name" type="text" disabled
                                    placeholder="Nama Lengkap" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="tampilJenkel" name="tampilJenkel"
                                    placeholder="Jenis Kelamin" disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label for="notelp" class="col-sm-12 col-md-12 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="notelp" name="notelp" class="form-control" type="text"
                                    placeholder="Nomor Telepon" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="tempatLahir" name="tempatLahir" disabled
                                    placeholder="Tempat Lahir" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control date-picker" id="tanggalLahir" name="tanggalLahir" disabled
                                    placeholder="Tanggal Lahir" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="email" name="email" class="form-control" type="email"
                                    placeholder="Email" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Status Kepegawaian</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="statusKepegawaian" name="statusKepegawaian"
                                    placeholder="Status Kepegawaian" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label for="alamat" class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                            <div class="col-sm-12 col-md-12">
                                <textarea id="alamat" name="alamat" class="form-control" type="text" placeholder="Alamat" disabled></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end tampil modal --}}

    <!-- Start tambah modal -->
    <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Tambah Pegawai
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{ route('tambahPegawai') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="username">Username</label>
                                <input id="username" name="username" class="form-control" type="text"
                                    placeholder="Username" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="password">Password</label>
                                <input id="password" name="password" class="form-control" type="password"
                                    placeholder="password" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="name">Nama Lengkap</label>
                                <input id="name" name="name" class="form-control" type="text"
                                    placeholder="Nama Lengkap" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 ">Jenis Kelamin</label>
                            <div class="col-sm-12 col-md-12">
                                <select id="jenkel" name="jenkel" class="custom-select col-12">
                                    <option selected="">Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="notelp">Nomor Telepon</label>
                                <input id="notelp" name="notelp" class="form-control" type="text"
                                    placeholder="Nomor Telepon" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="tempatLahir">Tempat Lahir</label>
                                <input id="tempatLahir" name="tempatLahir" class="form-control" type="text"
                                    placeholder="Tempat Lahir" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="tglLahir">Tanggal Lahir</label>
                                <input id="tglLahir" name="tglLahir" class="form-control" type="date"
                                    placeholder="Tanggal Lahir" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="email">Email</label>
                                <input id="email" name="email" class="form-control" type="email"
                                    placeholder="Email" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label class="col-sm-12 col-md-12">Status Kepegawaian</label>
                                <input class="form-control" id="statusKepegawaian" name="statusKepegawaian"
                                    placeholder="Status Kepegawaian" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="alamat">Alamat</label>
                                <textarea id="alamat" name="alamat" class="form-control" type="text" placeholder="Alamat" required></textarea>
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
    <div class="modal fade" id="showEditPegawai" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modPal-title" id="myLargeModalLabel">
                        Edit Pegawai
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{route('updatePegawai')}}" method="POST">
                    @csrf
                    <input type="text" id="idPegawai" name="idPegawai" hidden>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="username">Username</label>
                                <input id="editusername" name="editusername" class="form-control" type="text"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="password">Password</label>
                                <input id="editpassword" name="editpassword" class="form-control" type="password"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="name">Nama Lengkap</label>
                                <input id="editname" name="editname" class="form-control" type="text" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="tglLahir">Tanggal Lahir</label>
                                <input id="edittanggalLahir" name="edittanggalLahir" class="form-control" type="date"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="email">Email</label>
                                <input id="editemail" name="editemail" class="form-control" type="email" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label class="col-sm-12 col-md-12">Status Kepegawaian</label>
                                <input class="form-control" id="editstatusKepegawaian" name="editstatusKepegawaian"
                                    type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="alamat">Alamat</label>
                                <textarea id="editalamat" name="editalamat" class="form-control" type="text" required></textarea>
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
    {{-- end edit --}}
@endsection
@section('js')
    <script>
        // Show Data
        $(document).on('click', '#tampilPegawai', function() { //editKelas ada di class     
            var id = $(this).data(
                'id'
            ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                // console.log(id);
                url: "{{ url('/pegawai/showPegawai') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data)
                    $('#showDataPegawai').modal('show'); //menampilkan modal
                    $('#idPegawai').val(data.data.id);
                    $('#username').val(data.data.username);
                    $('#name').val(data.data.name);
                    $('#tampilJenkel').val(data.data.jenkel);
                    $('#tempatLahir').val(data.data.tempatLahir);
                    $('#tanggalLahir').val(data.data.tglLahir);
                    $('#notelp').val(data.data.notelp);
                    $('#email').val(data.data.email);
                    $('#statusKepegawaian').val(data.data.statusKepegawaian);
                    $('#alamat').val(data.data.alamat);
                }
            });
        });

        // Edit Data 
        $(document).on('click', '#editPegawai', function() { //editKelas ada di class     
            var id = $(this).data(
                'id'
            ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                // console.log(id);
                url: "{{ url('/pegawai/editPegawai') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    console.log(data.data)
                    $('#showEditPegawai').modal('show'); //menampilkan modal
                    $('#idPegawai').val(data.data.id);
                    $('#editpassword').val(data.data.password);
                    $('#editusername').val(data.data.username);
                    $('#editname').val(data.data.name);
                    $("div.jenkel select").val(data.data.jenkel).change();
                    $('#edittempatLahir').val(data.data.tempatLahir);
                    $('#edittanggalLahir').val(data.data.tglLahir);
                    $('#editnotelp').val(data.data.notelp);
                    $('#editemail').val(data.data.email);
                    $('#editstatusKepegawaian').val(data.data.statusKepegawaian);
                    $('#editalamat').val(data.data.alamat);
                }
            });
        });
    </script>
@endsection
@section('js')
    <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
@endsection
