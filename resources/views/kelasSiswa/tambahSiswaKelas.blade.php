@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Nama Siswa</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd-10 card-box mb-20">
            <div class="clearfix">
                <form action="{{ route('simpanTambahSisKel') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Input Nama Siswa</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="livesearch form-control p-3" id="livesearch" name="livesearch" required></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <input type="text" value="{{ $ks->id }}" id="idKelasSiswa" name="idKelasSiswa" hidden>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-12 col-md-10">                          
                            <button type="submit" class="btn btn-success btn-sm "><i class="icon-copy fa fa-plus"></i>
                                Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <table class="table table-bordered ">
                    {{-- data-table table stripe hover nowrap table-bordered --}}
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th scope="col">NIPD</th>
                            <th scope="col">Nama Siswa</th>
                            <th class="table-plus datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siskel as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->nipd }}</td>
                                <td>{{ $row->namaSiswa }}</td>
                                <td class="text-center">
                                    <a href="#" id="editMapel" class="btn btn-warning" type="button"><i
                                            class="icon-copy fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" id="btn-hapus" class="btn btn-danger"><i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $('.livesearch').select2({
            placeholder: 'Input Nama Siswa',
            ajax: {
                url: '/searchSiswa',
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
@endsection
