@extends('admin.template')

@section('pageTitle', 'Halaman Ubah Kategori')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <form action="{{ url('/admin/kategori/' . $kategori['id_kategori']) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        {{-- Input Text nama --}}
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama">Nama Kategori</label>
                            <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') == null ? $kategori['nama'] : old('nama') }}" required autofocus>
                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-danger" onclick="history.go(-1)">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection