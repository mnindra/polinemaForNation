@extends('admin.template')

@section('pageTitle', 'Halaman Tambah Buku')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Tambah Buku</h4>
            <div class="card">
                <div class="card-content">
                    <form action="{{ url('/admin/buku') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text id_buku --}}
                                <div class="form-group label-floating{{ $errors->has('id_buku') ? ' has-error' : '' }}">
                                    <label class="control-label" for="id_buku">ID Buku</label>
                                    <input id="id_buku" type="text" class="form-control" name="id_buku" value="{{ old('id_buku') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('id_buku'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('id_buku') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text isbn --}}
                                <div class="form-group label-floating{{ $errors->has('isbn') ? ' has-error' : '' }}">
                                    <label class="control-label" for="isbn">ISBN</label>
                                    <input id="isbn" type="text" class="form-control" name="isbn" value="{{ old('isbn') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('isbn'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('isbn') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Select id_kategori --}}
                                <div class="form-group label-floating{{ $errors->has('id_kategori') ? ' has-error' : '' }}">
                                    <label class="control-label" for="id_kategori">Kategori</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control">
                                        <option selected disabled></option>
                                        @foreach($kategori as $row)
                                            <option value="{{ $row['id_kategori'] }}" {{ old('id_kategori') == $row['id_kategori'] ? 'selected' : '' }}>
                                                {{ $row['nama'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="material-input"></span>
                                    @if ($errors->has('id_kategori'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('id_kategori') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text judul --}}
                                <div class="form-group label-floating{{ $errors->has('judul') ? ' has-error' : '' }}">
                                    <label class="control-label" for="judul">Judul</label>
                                    <input id="judul" type="text" class="form-control" name="judul" value="{{ old('judul') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('judul'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('judul') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text pengarang --}}
                                <div class="form-group label-floating{{ $errors->has('pengarang') ? ' has-error' : '' }}">
                                    <label class="control-label" for="pengarang">Pengarang</label>
                                    <input id="pengarang" type="text" class="form-control" name="pengarang" value="{{ old('pengarang') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('pengarang'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pengarang') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text penerbit --}}
                                <div class="form-group label-floating{{ $errors->has('penerbit') ? ' has-error' : '' }}">
                                    <label class="control-label" for="penerbit">Penerbit</label>
                                    <input id="penerbit" type="text" class="form-control" name="penerbit" value="{{ old('penerbit') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('penerbit'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('penerbit') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text tahun_terbit --}}
                                <div class="form-group label-floating{{ $errors->has('tahun_terbit') ? ' has-error' : '' }}">
                                    <label class="control-label" for="tahun_terbit">Tahun Terbit</label>
                                    <input id="tahun_terbit" type="text" class="form-control" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('tahun_terbit'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tahun_terbit') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text jumlah_halaman --}}
                                <div class="form-group label-floating{{ $errors->has('jumlah_halaman') ? ' has-error' : '' }}">
                                    <label class="control-label" for="jumlah_halaman">Jumlah Halaman</label>
                                    <input id="jumlah_halaman" type="text" class="form-control" name="jumlah_halaman" value="{{ old('jumlah_halaman') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('jumlah_halaman'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jumlah_halaman') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text harga --}}
                                <div class="form-group label-floating{{ $errors->has('harga') ? ' has-error' : '' }}">
                                    <label class="control-label" for="harga">Harga</label>
                                    <input id="harga" type="text" class="form-control" name="harga" value="{{ old('harga') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('harga'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('harga') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text stok --}}
                                <div class="form-group label-floating{{ $errors->has('stok') ? ' has-error' : '' }}">
                                    <label class="control-label" for="stok">Stok</label>
                                    <input id="stok" type="text" class="form-control" name="stok" value="{{ old('stok') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('stok'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stok') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input File file --}}
                                <div class="form-group is-focused label-floating{{ $errors->has('file') ? ' has-error' : '' }}">
                                    <label class="control-label" for="file">File Ebook</label>
                                    <input id="file" type="file" class="form-control" name="file" value="{{ old('file') }}" required autofocus>
                                    <span class="material-input"></span><br><br>
                                    @if ($errors->has('file'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('file') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input File sampul --}}
                                <div class="form-group is-focused label-floating{{ $errors->has('sampul') ? ' has-error' : '' }}">
                                    <label class="control-label" for="sampul">Sampul</label>
                                    <input id="sampul" type="file" class="form-control" name="sampul" value="{{ old('sampul') }}" required autofocus>
                                    <span class="material-input"></span><br><br>
                                    @if ($errors->has('sampul'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sampul') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                {{-- Input Textarea deskripsi --}}
                                <div class="form-group label-floating {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                    <label for="deskripsi" class="control-label">Deskripsi</label>
                                    <textarea id="deskripsi" class="form-control" name="deskripsi" required autofocus>{{ old('deskripsi') }}</textarea>
                                    <span class="input-material"></span>
                                    @if ($errors->has('deskripsi'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('deskripsi') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
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