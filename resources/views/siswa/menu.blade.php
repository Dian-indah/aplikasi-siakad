@extends('Layouts.siakad')

@section('content')
    <div class="card-box mb-30">
        <h2 class="pd-20 ">Dashboard</h2>
        <div class="xs-pd-20-10 pd-ltr-20">

            <div class="row pb-10">
                @foreach ($nilai as $row)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">{{ $row->kelas }}</div>
                                    <div class="font-14 text-secondary weight-500">
                                        {{ $row->namaMapel }}
                                    </div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon" data-color="#00eccf">
                                        <i class="icon-copy bi bi-bookmarks-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
