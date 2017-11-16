@extends('admin.template')

@section('pageTitle', 'Halaman Tambah Petugas')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Tambah Petugas</h4>
            <div class="card">
                <div class="card-content">
                    <form action="{{ url('/admin/petugas') }}" method="post">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text nama --}}
                                <div class="form-group label-floating {{ $errors->has('nama') ? ' has-error' : '' }}">
                                    <label for="nama" class="control-label">Nama</label>
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Email email --}}
                                <div class="form-group label-floating {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="control-label">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    <span class="input-material"></span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text telp --}}
                                <div class="form-group label-floating{{ $errors->has('telp') ? ' has-error' : '' }}">
                                    <label for="telp" class="control-label">Telpon</label>
                                    <input id="telp" type="text" class="form-control" name="telp" value="{{ old('telp') }}" required autofocus>
                                    <span class="input-material"></span>
                                    @if ($errors->has('telp'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('telp') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Radio jenis_kelamin --}}
                                <div class="form-group label-floating {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="radio">
                                        <label><input type="radio" name="jenis_kelamin" value="1" {{ old('jenis_kelamin') == "1" ? "checked" : ""}}>Laki-Laki</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="jenis_kelamin" value="0" {{ old('jenis_kelamin') == "0" ? "checked" : ""}}>Perempuan</label>
                                    </div>
                                    @if ($errors->has('jenis_kelamin'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-8 col-lg-8">
                                {{-- Input Textarea alamat --}}
                                <div class="form-group label-floating {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                    <label for="alamat" class="control-label">Alamat</label>
                                    <textarea id="alamat" class="form-control" name="alamat" required autofocus>{{ old('alamat') }}</textarea>
                                    <span class="input-material"></span>
                                    @if ($errors->has('alamat'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text username --}}
                                <div class="form-group label-floating {{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username" class="control-label">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                    <span class="input-material"></span>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Password password --}}
                                <div class="form-group label-floating {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="control-label">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required autofocus>
                                    <span class="input-material"></span>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Password konfirmasi_password --}}
                                <div class="form-group label-floating {{ $errors->has('konfirmasi_password') ? ' has-error' : '' }}">
                                    <label for="konfirmasi_password" class="control-label">Konfirmasi Password</label>
                                    <input id="konfirmasi_password" type="password" class="form-control" name="konfirmasi_password" required autofocus>
                                    <span class="input-material"></span>
                                    @if ($errors->has('konfirmasi_password'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('konfirmasi_password') }}</strong>
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