@extends('Layouts.siakad')

@section('content')
<div class="min-height-200px">
<div class="page-header">
<div class="row">
        <div class="col-md-6 col-sm-12 title">				
            <h4>Nilai Siswa</h4>						
        </div>
        <div class="col-md-4 col-sm-6 text-right m-3">
            <div class="dropdown">
                <a 
                class="btn btn-primary dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    >Kelas</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Kelas 10</a>
                    <a class="dropdown-item" href="#">Kelas 11</a>
                    <a class="dropdown-item" href="#">Kelas 12</a>
                </div>						
            </div>
        </div>
        <div class=" text-right">
            <div class="dropdown">
                <a 
                class="btn btn-primary dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    >Semester</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Semester 1 Ganjil</a>
                    <a class="dropdown-item" href="#">Semester 2 Genap</a>								
                </div>						
            </div>
        </div>	
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Guru Pengajar</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Bahasa Indonesia</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>A</td>                   
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bahasa Inggris</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>B</td>                    
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Matematika</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>B+</td>                   
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection