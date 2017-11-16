@extends('admin.template')

@section('pageTitle', 'Halaman Buku')

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
                    <h4>Data Buku</h4>
                </div>
                <div class="col-md-4 col-lg-4">
                    <a class="btn btn-primary pull-right" href="{{ url('/buku/create') }}" role="button">Tambah</a>
                </div>
            </div>

            <div class="card">
                <div class="card-content table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead class="text-primary">
                        <tr>
                            <th>No</th>
                            <th>ID Buku</th>
                            <th>ISBN</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($buku as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row['id_buku'] }}</td>
                                <td>{{ $row['isbn'] }}</td>
                                <td>{{ $row['tahun_terbit'] }}</td>
                                <td>{{ $row['kategori']->nama }}</td>
                                <td>{{ $row['judul'] }}</td>
                                <td>{{ $row['penerbit'] }}</td>
                                <td>
                                    <form id="{{ 'form' . $row['id_buku'] }}" action="{{ url('/buku/' . $row['id_buku']) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    </form>

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('/buku/' . $row['id_buku']) }}" class="btn btn-sm btn-info">Detail</a>
                                        <a href="{{ url('/buku/' . $row['id_buku'] . '/edit') }}" class="btn btn-sm btn-warning">Ubah</a>
                                        <button type="submit" class="btn btn-sm btn-danger" form="{{ 'form' . $row['id_buku'] }}">Hapus</button>
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