@extends('admin.template')

@section('pageTitle', 'Halaman Petugas')

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
                    <h4>Data Petugas</h4>
                </div>
                <div class="col-md-4 col-lg-4">
                    <a class="btn btn-primary pull-right" href="{{ url('/admin/petugas/create') }}" role="button">Tambah</a>
                </div>
            </div>

            <div class="card">
                <div class="card-content table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead class="text-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Telpon</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($petugas as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row['nama'] }}</td>
                                <td>{{ $row['jenis_kelamin'] == 1 ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td>{{ $row['username'] }}</td>
                                <td>{{ $row['email'] }}</td>
                                <td>{{ $row['telp'] }}</td>
                                <td>
                                    <form id="{{ 'form' . $row['id_petugas'] }}" action="{{ url('/admin/petugas/' . $row['id_petugas']) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    </form>

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('/admin/petugas/' . $row['id_petugas'] . '/edit') }}" class="btn btn-sm btn-warning">Ubah</a>
                                        <button type="submit" class="btn btn-sm btn-danger" form="{{ 'form' . $row['id_petugas'] }}">Hapus</button>
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