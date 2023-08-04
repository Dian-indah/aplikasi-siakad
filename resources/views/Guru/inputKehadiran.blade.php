@extends('Layouts.siakad')
@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="title">
                        <h4>Kehadiran Siswa</h4>
                        <form id="tgl" name="tgl">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12">
                                        <label class="col-sm-12 col-md-2 col-form-label">Select</label>
                                        <div class="col-sm-12 col-md-10">
                                            <select class="custom-select col-12">
                                                <option selected="">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="pull-right col-md-2 col-sm-2">

                </div>
            </div>
        </div>
        {{-- Content bawah --}}
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <form id="kehadiran" name="kehadiran" action="{{ route('saveKehadiran') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIPD</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kh as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nipd }}</td>
                                    <td>{{ $item->namaSiswa }}</td>
                                    <td hidden><input value="{{ $item->siswaId }}" name="siswaId" id="siswaId"></td>
                                    {{-- <td><input type="text" name="attendance_date" id="attendance_date"></td> --}}
                                    <td hidden><input value="{{ $item->idKelasSiswa }}" name="idKelasSiswa"
                                            id="idKelasSiswa"></td>
                                    <td>
                                        <select name="kehadiran[{{ $item->siswaKelasId }}]" required>
                                            <option value="Hadir">Hadir</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Sakit">Sakit</option>
                                            <option value="Alpa">Alpa</option>
                                        </select>
                                        {{-- <input type="radio" name="kehadiran[{{ $item->siswaKelasId }}]" value="Hadir">
                                        Hadir
                                        <input type="radio" name="kehadiran[{{ $item->siswaKelasId }}]"
                                            value="Tidak Hadir">
                                        Tidak Hadir --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- end content bawah --}}
    </div>
@endsection
@section('js')
    <script>
        document.getElementById("tgl").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission to the server for now

            // Get data from form orang tua
            var tglKehadiran = document.getElementById("tanggal").value.trim();

            // Fill the data into form wali siswa
            document.getElementById("attendance_date").value = tglKehadiran;
        });
    </script>
    <script>
        const radioOptions = document.querySelectorAll('.radio-option');

        radioOptions.forEach(option => {
            option.addEventListener('click', function() {
                radioOptions.forEach(otherOption => {
                    if (otherOption !== option) {
                        otherOption.checked = false;
                    }
                });
            });
        });
    </script>
@endsection
