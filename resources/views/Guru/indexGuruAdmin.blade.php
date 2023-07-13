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
                    <a href="{{ route('tambahGuru') }}" data-target="showDataGuru"
                        class="btn btn-success btn-sm scroll-click"><i class="icon-copy fa fa-plus" aria-hidden="true"></i>
                        Tambah Data</a>
                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="card-header">
                    <a href="{{ route('exportGuru') }}" class="btn btn-success">Export Excel</a>
                    <!-- Button trigger modal -->
                    <a class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModal">
                        Import Excel
                    </a>

                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NUPTK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis PTK</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->nuptk }}</td>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->jenisPtk }}</td>
                                <td>{{ $row->notelp }}</td>
                                <td>{{ $row->email }}</td>
                                <td class="text-center">
                                    <a href="javascript:;" data-id="<?= $row->id ?>" class="btn btn-info" id="tampilGuru"
                                        type="button"><i class="icon-copy dw dw-email-2 fa-sm"></i> Detail</a>
                                    <a href="{{ url('/guru/editGuru/' . $row->id) }}" class="btn btn-warning "
                                        id="editGuru" type="button"> <i class="icon-copy fa fa-edit"
                                            aria-hidden="true"></i> Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
    {{-- Modal Import Excel --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('importGuru') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" name="file" required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Selesai</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end Modal Import Excel --}}
    <!-- Start tampil modal -->
    <div class="modal fade" id="showDataGuru" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content justify-center">
                <div class="modal-header ">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Detail Data Guru
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×

                    </button>
                </div>
                <form>
                    <input id="idGuru" name="idGuru" hidden />
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="username" name="username" type="text" disabled
                                    placeholder="Nama" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="nik" name="nik" placeholder="NIK" disabled
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="noKk" name="noKk" placeholder="Nomor KK"
                                    disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NUPTK</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="nuptk" name="nuptk" placeholder="NUPTK" disabled
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="jenkel" name="jenkel" placeholder="jenkel" disabled
                                    type="text" />
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
                            <label class="col-sm-12 col-md-2 col-form-label">NIP</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="nip" name="nip" placeholder="NIP" disabled
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">No Telepon</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="notelp" name="notelp" placeholder="No Telepon"
                                    disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="email" name="email" placeholder="Email" disabled
                                    type="email" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Status Kepegawaian</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="statusKepegawaian" name="statusKepegawaian" disabled
                                    placeholder="Status Kepegawaian" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">SK Pengangkatan</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="skPengangkatan" name="skPengangkatan" disabled
                                    placeholder="SK Pengangkatan" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">TMT Pengangkatan</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="tmpPengangkatan" name="tmpPengangkatan" disabled
                                    placeholder="TMT Pengangkatan" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Lembaga Pengangkatan</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="lembagaPengangkatan" name="lembagaPengangkatan" disabled
                                    placeholder="Lembaga Pengangkatan" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Sumber Gaji</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="sumberGaji" name="sumberGaji" placeholder="Sumber Gaji"
                                    disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Jenis PTK</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="jenisPtk" name="jenisPtk" placeholder="Jenis PTK"
                                    disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">NPWP</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" id="npwp" name="npwp" placeholder="NPWP" disabled
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Wajib Pajak</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="namaNpwp" name="namaNpwp" disabled
                                    placeholder="Nama Wajib Pajak" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Agama</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" disabled id="agama" name="agama" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                            <div class="col-sm-12 col-md-12">
                                <textarea class="form-control" id="alamat" name="alamat" disabled placeholder="Ketik disini"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="kewarganegaraan" disabled name="kewarganegaraan"
                                    placeholder="Kewarganegaraan" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Ibu Kandung</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="ibuKandung" disabled name="ibuKandung"
                                    placeholder="Nama Ibu Kandung" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Status Perkawinan</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="statusPerkawinan" disabled name="statusPerkawinan"
                                    disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Nama Suami/Istri</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="namaPasangan" name="namaPasangan" disabled
                                    placeholder="Nama Suami/Istri" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">NIP Suami/Istri</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="nipPasangan" name="nipPasangan" disabled
                                    placeholder="NIP Suami/Istri" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Pekerjaan Suami/Istri</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="pekerjaanPasangan" name="pekerjaanPasangan" disabled
                                    placeholder="Pekerjaan Suami/Istri" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Sudah Lisensi Kepala Sekolah</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="lisensiKepsek" name="lisensiKepsek" disabled
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Pernah Diklat Kepegawaian</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="diklatKepegawaian" name="diklatKepegawaian" disabled
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Keahlian Braille</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="keahlianBraile" name="keahlianBraile" disabled
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Keahlian Bahasa Isyarat</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="keahlianBahasaIsyarat" name="keahlianBahasaIsyarat"
                                    disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-2 col-form-label">Bank</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="bank" name="bank" placeholder="Bank" disabled
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">No Rekening</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="norek" name="norek" placeholder="No Rekening"
                                    disabled type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-12 col-form-label">Rekening Atas Nama</label>
                            <div class="col-sm-12 col-md-12">
                                <input class="form-control" id="namaRek" name="namaRek" disabled
                                    placeholder="Rekening Atas Nama" type="text" />
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
        // Show Data
        $(document).on('click', '#tampilGuru', function() { //editKelas ada di class     
            var id = $(this).data(
                'id'
            ); //data dan id diperoleh dari button "data-id" baris 38. serta di controller $response['data'] = $kur;
            $.ajax({
                // console.log(id);
                url: "{{ url('/guru/showGuruById') }}" + '/' + id,
                type: 'get',
                dataType: 'json',
                data: {},
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data)
                    $('#showDataGuru').modal('show'); //menampilkan modal
                    $('#idGuru').val(data.data.id);
                    $('#username').val(data.data.username);
                    $('#nik').val(data.data.nik);
                    $('#noKk').val(data.data.noKk);
                    $('#nuptk').val(data.data.nuptk);
                    $('#jenkel').val(data.data.jenkel);
                    $('#tempatLahir').val(data.data.tempatLahir);
                    $('#tanggalLahir').val(data.data.tanggalLahir);
                    $('#nip').val(data.data.nip);
                    $('#notelp').val(data.data.notelp);
                    $('#email').val(data.data.email);
                    $('#statusKepegawaian').val(data.data.statusKepegawaian);
                    $('#skPengangkatan').val(data.data.skPengangkatan);
                    $('#tmpPengangkatan').val(data.data.tmpPengangkatan);
                    $('#lembagaPengangkatan').val(data.data.lembagaPengangkatan);
                    $('#sumberGaji').val(data.data.sumberGaji);
                    $('#jenisPtk').val(data.data.jenisPtk);
                    $('#npwp').val(data.data.npwp);
                    $('#namaNpwp').val(data.data.namaNpwp);
                    $('#agama').val(data.data.agama);
                    $('#alamat').val(data.data.alamat);
                    $('#kewarganegaraan').val(data.data.kewarganegaraan);
                    $('#ibuKandung').val(data.data.ibuKandung);
                    $('#statusPerkawinan').val(data.data.statusPerkawinan);
                    $('#namaPasangan').val(data.data.namaPasangan);
                    $('#nipPasangan').val(data.data.nipPasangan);
                    $('#pekerjaanPasangan').val(data.data.pekerjaanPasangan);
                    $('#lisensiKepsek').val(data.data.lisensiKepsek);
                    $('#diklatKepegawaian').val(data.data.diklatKepegawaian);
                    $('#keahlianBraile').val(data.data.keahlianBraile);
                    $('#keahlianBahasaIsyarat').val(data.data.keahlianBahasaIsyarat);
                    $('#bank').val(data.data.bank);
                    $('#noRek').val(data.data.noRek);
                    $('#namaRek').val(data.data.namaRek);
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
