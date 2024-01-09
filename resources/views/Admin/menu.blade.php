@extends('Layouts.siakad')

@section('content')
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                    Dashboard
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mb-30">
                <div id="chartA"></div>
            </div>
            <div class="col-xl-6 mb-30">
                <div id="chartC">
                </div>
            </div>
            {{-- <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Activity</h2>
                    <div id="chart5"></div>
                </div>
            </div> --}}
            {{-- <div class="col-xl-4 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Lead Target</h2>
                    
                </div>
            </div> --}}
        </div>
    </div>
    <div class="footer-wrap pd-20 mb-20 card-box">
        SMKI Al-Futuhiyyah
    </div>
@endsection
@section('footer')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        // Data Kelas Dan Jumlah Kelas
        Highcharts.chart('chartA', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Siswa Setiap Kelas',
                align: 'left'
            },
            xAxis: {
                categories: [
                    @foreach ($data as $item)
                        '{{ $item['kelas'] }}',
                    @endforeach
                ],
                crosshair: true,
                accessibility: {
                    description: 'Countries'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Siswa'
                }
            },
            tooltip: {
                valueSuffix: ' siswa'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Kelas',
                data: [
                    @foreach ($data as $item)
                        {{ $item['jumlah_siswa'] }},
                    @endforeach
                ]
            }, ]
        });
    </script>
    <script>
        // Data Jumlah Pengguna Aplikasi
        Highcharts.chart('chartC', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Pengguna Aplikasi SIAKAD',
                align: 'left'
            },
            xAxis: {
                categories: ['Kepala Sekolah', 'Guru', 'Siswa', 'Wali Siswa', 'Administrator'],
                crosshair: true,
                accessibility: {
                    description: 'Countries'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pengguna Aplikasi'
                }
            },
            tooltip: {
                valueSuffix: ' orang'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'User',
                data: [
                    {!! json_encode($kepsek) !!}, {!! json_encode($guru) !!}, {!! json_encode($siswa) !!},
                    {!! json_encode($ortu) !!}, {!! json_encode($admin) !!}
                ]
            }, ]
        });
    </script>
@endsection
