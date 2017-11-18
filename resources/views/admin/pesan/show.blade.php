@extends('admin.template')

@section('pageTitle', 'Halaman Detail Pesan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row clearfix">
                <div class="col-md-8 col-lg-8">
                    <h3>{{ $pesan['nama'] }}</h3>
                    <span class="text-muted">
                        <i class="fa fa-envelope"></i>
                        {{ $pesan['email'] }}
                    </span> &nbsp;&nbsp;
                    <span class="text-muted">
                        <i class="fa fa-phone"></i>
                        {{ $pesan['telp'] }}
                    </span> &nbsp;&nbsp;
                    <span class="text-muted">
                        <i class="fa fa-calendar"></i>
                        {{ $pesan['created_at'] }}
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-content table-responsive">

                    <div class="row">
                        <div class="col-md-8 col-lg-8">
                            <p>{{ $pesan['isi'] }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection