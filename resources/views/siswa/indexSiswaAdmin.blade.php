@extends('Layouts.siakad')

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Daftar Siswa</h4>
                    </div>
                </div>
                <div class="text-right col-md-2 col-sm-2 dropdown">                    
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right col-md-2 col-sm-2">
                    <a href="{{ route('tambahSiswa') }}" class="btn btn-success btn-sm"><i class="icon-copy fa fa-plus"
                            aria-hidden="true"></i> Tambah Data</a>
                </div> <br><br>
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NISN</th>                            
                            <th scope="col">Nama</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->nisn }}</td>                                
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->noHp }}</td>
                                <td>{{ $row->jenkel }}</td>
                                <td class="text-center">
                                    <a href="#" data-id="<?= $row->id ?>" class="btn btn-info" id="tampilSiswa"
                                        type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                    <a href="{{ url('/siswa/editSiswa/'.$row->id)}}" class="btn btn-warning " id="editSiswa" type="button"> <i
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

    <!-- Start tampil modal -->
    <div class="modal fade" id="showDataSiswa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content justify-center">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Detail Data Siswa
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×

                    </button>
                </div>
                {{-- form --}}
                <form>
                    <input id="idSiswa" name="idSiswa" hidden />                    
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="name" name="name" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">NISN</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="nisn" name="nisn" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="jenkel" name="jenkel" disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="tempatLahir" name="tempatLahir" class="form-control" disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="tanggalLahir" name="tanggalLahir" class="form-control date-picker"
                                    type="date" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="nik" name="nik" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="noKk" name="noKk" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">No Handphone</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="noHp" name="noHp" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="email" name="email" class="form-control" type="email" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Agama</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="agama" name="agama" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                            <div class="col-sm-12 col-md-12">
                                <textarea id="alamat" name="alamat" class="form-control" disabled></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Jenis Tinggal</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="jenisTinggal" name="jenisTinggal" class="form-control" type="text"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Alat Transportasi</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="trasportasi" name="trasportasi" class="form-control" type="text"
                                    disabled />
                            </div>
                        </div>
                    </div>                                      
                    {{-- Input Data Ayah --}}
                    <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Ayah</div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="namaAyah" name="namaAyah" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="tanggalLahirAyah" name="tanggalLahirAyah" class="form-control" type="date"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jenjang Pendidikan</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="pendidikanAyah" name="pendidikanAyah" class="form-control" type="text"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="pekerjaanAyah" name="pekerjaanAyah" class="form-control" type="text"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="penghasilanAyah" name="penghasilanAyah" class="form-control" type="text"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="nikAyah" name="nikAyah" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    {{-- Input Data Ibu --}}
                    <div class="col-sm-12 col-md-12 pd-20 text-center h4 text-blue">Data Ibu</div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="namaIbu" name="namaIbu" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="tanggalLahirIbu" name="tanggalLahirIbu" class="form-control month-picker"
                                    type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jenjang Pendidikan</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="pendidikanIbu" name="pendidikanIbu" class="form-control month-picker"
                                    type="text" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="pekerjaanIbu" name="pekerjaanIbu" class="form-control" type="text"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Penghasilan</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="penghasilanIbu" name="penghasilanIbu" class="form-control" type="text"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="nikIbu" name="nikIbu" class="form-control" type="text" disabled />
                            </div>
                        </div>
                    </div>                                                                                                                                                                                           
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Sekolah Asal</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="sekolahAsal" name="sekolahAsal" class="form-control" type="text"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Anak Ke-</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="anak" name="anak" class="form-control" type="number" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jumlah Saudara Kandung</label>
                            <div class="col-sm-12 col-md-12">
                                <input id="jmlSaudara" name="jmlSaudara" class="form-control" type="number" disabled />
                            </div>
                        </div>
                    </div>                
                </form>
            </div>
        </div>
    </div>
    {{-- end tampil modal --}}
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
    <script>
        // Show Data
        $(document).on('click', '#tampilSiswa', function() { //editKelas ada di class     
            var id = $(this).data(
                'id'
            ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                // console.log(id);
                url: "{{ url('/siswa/showSiswaById') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    console.log(data.data)
                    $('#showDataSiswa').modal('show'); //menampilkan modal
                    $('#idSiswa').val(data.data.id);
                    $('#username').val(data.data.username);
                    $('#name').val(data.data.name);
                    $('#email').val(data.data.email);
                    $('#nisn').val(data.data.nisn);
                    $('#jenkel').val(data.data.jenkel);
                    $('#tempatLahir').val(data.data.tempatLahir);
                    $('#tanggalLahir').val(data.data.tanggalLahir);
                    $('#nik').val(data.data.nik);
                    $('#noKk').val(data.data.noKk);
                    $('#noHp').val(data.data.noHp);
                    $('#agama').val(data.data.agama);
                    $('#alamat').val(data.data.alamat);
                    $('#jenisTinggal').val(data.data.jenisTinggal);
                    $('#trasportasi').val(data.data.trasportasi);
                    $('#skhun').val(data.data.skhun);
                    $('#penerimaKpps').val(data.data.penerimaKpps);
                    $('#noKpps').val(data.data.noKpps);
                    $('#namaAyah').val(data.data.namaAyah);
                    $('#tanggalLahirAyah').val(data.data.tanggalLahirAyah);
                    $('#pendidikanAyah').val(data.data.pendidikanAyah);
                    $('#pekerjaanAyah').val(data.data.pekerjaanAyah);
                    $('#penghasilanAyah').val(data.data.penghasilanAyah);
                    $('#nikAyah').val(data.data.nikAyah);
                    $('#namaIbu').val(data.data.namaIbu);
                    $('#tanggalLahirIbu').val(data.data.tanggalLahirIbu);
                    $('#pendidikanIbu').val(data.data.pendidikanIbu);
                    $('#pekerjaanIbu').val(data.data.pekerjaanIbu);
                    $('#penghasilanIbu').val(data.data.penghasilanIbu);
                    $('#nikIbu').val(data.data.nikIbu);
                    $('#namaWali').val(data.data.namaWali);
                    $('#tanggalLahirWali').val(data.data.tanggalLahirWali);
                    $('#pendidikanWali').val(data.data.pendidikanWali);
                    $('#pekerjaanWali').val(data.data.pekerjaanWali);
                    $('#penghasilanWali').val(data.data.penghasilanWali);
                    $('#nikWali').val(data.data.nikWali);
                    $('#noUn').val(data.data.noUn);
                    $('#noSeriIjazah').val(data.data.noSeriIjazah);
                    $('#penerimaKip').val(data.data.penerimaKip);
                    $('#noKip').val(data.data.noKip);
                    $('#namaKip').val(data.data.namaKip);
                    $('#noReqAkta').val(data.data.noReqAkta);
                    $('#bank').val(data.data.bank);
                    $('#noRekening').val(data.data.noRekening);
                    $('#namaRekening').val(data.data.namaRekening);
                    $('#layakPip').val(data.data.layakPip);
                    $('#alasanPip').val(data.data.alasanPip);
                    $('#kebutuhanKhusus').val(data.data.kebutuhanKhusus);
                    $('#sekolahAsal').val(data.data.sekolahAsal);
                    $('#anak').val(data.data.anak);
                    $('#jmlSaudara').val(data.data.jmlSaudara);
                    $('#bb').val(data.data.bb);
                    $('#tb').val(data.data.tb);
                    $('#jarakSekolah').val(data.data.jarakSekolah);
                    $('#nipd').val(data.data.nipd);
                }
            });
        });
    </script>
@endsection
