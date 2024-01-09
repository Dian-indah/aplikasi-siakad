@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Orang Tua Siswa</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 ">
                    {{-- <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown">Kelas</a>

                        <div id="dropdown" class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">10</a>
                            <a class="dropdown-item" href="#">11</a>
                            <a class="dropdown-item" href="#">12</a>
                        </div>
                    </div> --}}
                    <div class="pull-right col-md-12 col-sm-6">
                        <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#small-modal"><i
                                class="icon-copy fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
                    </div> <br><br>
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <table id="example" class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Ortu</th>
                            <th scope="col">Username</th>
                            <th scope="col">Nama Siswa</th>
                            <th class="table-plus datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->namaOrtu }}</td>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->namaSiswa }}</td>
                                <td class="text-center">                                    
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
    <div class="modal fade" id="small-modal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Tambah Akun Ortu
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{route('simpanOrtu')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="username">Username Ortu</label>
                                <input id="username" name="username" class="form-control" type="text"
                                    placeholder="Username Ortu" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="namaOrtu">Nama Ortu</label>
                                <input id="namaOrtu" name="namaOrtu" class="form-control" type="text"
                                    placeholder="Nama Ortu" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="password">Password</label>
                                <input id="password" name="password" class="form-control" type="text"
                                    placeholder="Password" required />
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label>Input Nama Siswa</label>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <select style="width: 100%" class="form-control livesearch" id="livesearch" name="livesearch" required></select>
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
    <div class="modal fade" id="editmodal" name="editmodal" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Edit Orang Tua
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <form action="{{ route('updateOrtu') }}" method="POST">
                    @csrf
                    <input type="text" id="idOrtu" name="idOrtu" hidden>
                    <div class="modal-body">  
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="editUsername">Username Ortu</label>
                                <input id="editUsername" name="editUsername" class="form-control" type="text"/>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="editNamaOrtu">Nama Ortu</label>
                                <input id="editNamaOrtu" name="editNamaOrtu" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label for="editPassword">Password</label>
                                <input id="editPassword" name="editPassword" class="form-control" type="text"/>
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                                <label>Input Nama Siswa</label>
                            </div>
                            <div class="col-sm-12 col-md-12" >
                                <select style="width: 100%" class="livesearch form-control" id="livesearch" name="livesearch" required></select>
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

    {{-- start data table --}}
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    {{-- end data table --}}

    {{-- start select 2 --}}
    <script type="text/javascript">
        $('.livesearch').select2({
            placeholder: 'Input Nama Siswa',
            ajax: {
                url: '/cariSiswa',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
    </script>
    {{-- end select 2 --}}

    {{-- Edit Data --}}
    <script>   
        $(document).on('click', '#edit', function() { 
            // alert('test');
            var id = $(this).data(
                'id'
            ); 
            $.ajax({
                // console.log(id);
                url: "{{ url('/ortu/editOrtu/') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {                
                    $('#editmodal').modal('show'); 
                    $('#editUsername').val(data.data.username);
                    $('#editNamaOrtu').val(data.data.name);
                    $('#editPassword').val(data.data.password);
                    $('#namaSiswa').val(data.data.namaSiswa);
                    $('#idOrtu').val(data.data.id);
                }
            });
        });
    </script>
@endsection
