@extends('admin.template')

@section('pageTitle', 'Halaman Ubah Petugas')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Ubah Petugas</h4>
            <div class="card">
                <div class="card-content">
                    <form action="{{ url('/petugas/' . $petugas['id_petugas']) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text nama --}}
                                <div class="form-group label-floating {{ $errors->has('nama') ? ' has-error' : '' }}">
                                    <label for="nama" class="control-label">Nama</label>
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama', $petugas['nama']) }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text telp --}}
                                <div class="form-group label-floating{{ $errors->has('telp') ? ' has-error' : '' }}">
                                    <label for="telp" class="control-label">Telpon</label>
                                    <input id="telp" type="text" class="form-control" name="telp" value="{{ old('telp', $petugas['telp']) }}" required autofocus>
                                    <span class="input-material"></span>
                                    @if ($errors->has('telp'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('telp') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Radio jenis_kelamin --}}
                                <div class="form-group label-floating {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="radio">
                                        <label><input type="radio" name="jenis_kelamin" value="1" {{ old('jenis_kelamin', $petugas['jenis_kelamin']) == "1" ? "checked" : ""}}>Laki-Laki</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="jenis_kelamin" value="0" {{ old('jenis_kelamin', $petugas['jenis_kelamin']) == "0" ? "checked" : ""}}>Perempuan</label>
                                    </div>
                                    @if ($errors->has('jenis_kelamin'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                {{-- Input Textarea alamat --}}
                                <div class="form-group label-floating {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                    <label for="alamat" class="control-label">Alamat</label>
                                    <textarea id="alamat" class="form-control" name="alamat" required autofocus>{{ old('alamat', $petugas['alamat']) }}</textarea>
                                    <span class="input-material"></span>
                                    @if ($errors->has('alamat'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group label-floating ">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection