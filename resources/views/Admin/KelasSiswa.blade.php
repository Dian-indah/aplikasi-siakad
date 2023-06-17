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
                            <a class="dropdown-item" href="#">10</a>
                            <a class="dropdown-item" href="#">11</a>
                            <a class="dropdown-item" href="#">12</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right col-md-2 col-sm-2">
                    <a href="/tambah kelas siswa" class="btn btn-success btn-sm"><i class="icon-copy fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
                </div> <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Guru Pengajar</th>   
                            <th scope="col">Jumlah Siswa</th>                                             
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>10</td>
                            <td>Bahasa Inggris</td>
                            <td>Dian</td> 
                            <td>30</td>                                         
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" 
                                type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" 
                                type="button"><i class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>                                
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>11</td>
                            <td>Bahasa Indonesia</td>
                            <td>Indah</td>  
                            <td>25</td>                                        
                            <td class="text-center"><a href="/detail nilai" class="btn btn-info" 
                                type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                <a href="/detail nilai" class="btn btn-warning" 
                                type="button"><i class="icon-copy fa fa-edit" aria-hidden="true"></i> Edit</a>                                
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>12</td>
                            <td>Peternakan</td>
                            <td>Kumala</td>   
                            <td>15</td>                                       
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
