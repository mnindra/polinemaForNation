@extends('admin.template')

@section('pageTitle', 'Kategori')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-content table-responsive">
                    <b>Data Kategori</b>
                    <table class="table table-striped table-bordered" id="table">
                        <thead class="text-primary">
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kategori as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row['nama'] }}</td>
                                <td>
                                    <form id="{{ 'form' . $row['id_kategori'] }}" action="{{ url('/kategori/' . $row['id_kategori']) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    </form>

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('/kategori/' . $row['id_kategori'] . '/edit') }}" class="btn btn-sm btn-warning">Ubah</a>
                                        <button type="submit" class="btn btn-sm btn-danger" form="{{ 'form' . $row['id_kategori'] }}">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-content">
                    <b>Tambah Kategori</b>
                    <form action="{{ url('/kategori') }}" method="post">
                        {{ csrf_field() }}

                        {{-- Input Text nama --}}
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama">Nama Kategori</label>
                            <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>
                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection