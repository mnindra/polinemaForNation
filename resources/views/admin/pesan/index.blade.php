@extends('admin.template')

@section('pageTitle', 'Halaman Pesan')

@section('content')
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('error_message'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1033;">×</button>
                <span>{{ session('error_message') }}</span>
            </div>
            @endif

            <div class="row clearfix">
                <div class="col-md-8 col-lg-8">
                    <h4>Data Pesan</h4>
                </div>
                <div class="col-md-4 col-lg-4">
                    <a class="btn btn-primary pull-right" href="{{ url('/admin/pesan/create') }}" role="button">Tambah</a>
                </div>
            </div>

            <div class="card">
                <div class="card-content table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead class="text-primary">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telp</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pesan as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row['created_at'] }}</td>
                                <td>{{ $row['nama'] }}</td>
                                <td>{{ $row['email'] }}</td>
                                <td>{{ $row['telp'] }}</td>
                                <td>
                                    <form id="{{ 'form' . $row['id_pesan'] }}" action="{{ url('/admin/pesan/' . $row['id_pesan']) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    </form>

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('/admin/pesan/' . $row['id_pesan']) }}" class="btn btn-sm btn-info">Detail</a>
                                        <button type="submit" class="btn btn-sm btn-danger" form="{{ 'form' . $row['id_pesan'] }}">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection