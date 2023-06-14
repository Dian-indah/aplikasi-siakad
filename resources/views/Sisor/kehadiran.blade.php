@extends('Layouts.siakad')

@section('content')
<div class="min-height-200px">
<div class="page-header">
<div class="row">
        <div class="col-md-6 col-sm-12 title">				
            <h4>Kehadiran</h4>						
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
                    <th scope="col">No</th>
                    <th scope="col">Kode Mapel</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Kehadiran</th>                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>BIN123</td>
                    <td>Bahasa Indonesia</td>
                    <td>10</td>
                    <td>50%</td>                                    
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>BIG123</td>
                    <td>Bahasa Inggris</td>
                    <td>10</td>
                    <td>60%</td>                   
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>MAT123</td>
                    <td>Matematika</td>
                    <td>10</td>
                    <td>55%</td>                     
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection