@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Guru </h4>
                    </div>
                </div>
                <div class="pull-right col-md-2 col-sm-2">
                    <a href="/tambah guru" class="btn btn-success btn-sm scroll-click"><i class="icon-copy fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
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
                            <th scope="col">NUPKTK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis PTK</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>12345</td>
                            <td>Dian</td>
                            <td>Guru Mapel</td>
                            <td>09876</td>
                            <td>dian@gmail.com</td>
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" 
                                type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" 
                                type="button"><i class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>                                
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>12345</td>
                            <td>Indah</td>
                            <td>Guru Mapel</td>
                            <td>09876</td>
                            <td>dian@gmail.com</td>
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" 
                                type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" 
                                type="button"><i class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>                                
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>12345</td>
                            <td>Kumala</td>
                            <td>Guru Mapel</td>
                            <td>09876</td>
                            <td>dian@gmail.com</td>
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" 
                                type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" 
                                type="button"><i class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
