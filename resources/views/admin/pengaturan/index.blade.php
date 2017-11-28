@extends('admin.template')

@section('pageTitle', 'Halaman Pengaturan')

@section('content')
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1033;">×</button>
                    <span>{{ session('error_message') }}</span>
                </div>
            @endif

            @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1033;">×</button>
                    <span>{{ session('success_message') }}</span>
                </div>
            @endif

            <h4>Pengaturan</h4>
            <div class="card">
                <div class="card-content">
                    <form action="{{ url('/admin/pengaturan/' . $pengaturan['id_pengaturan']) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                {{-- Input Text heading --}}
                                <div class="form-group label-floating{{ $errors->has('heading') ? ' has-error' : '' }}">
                                    <label class="control-label" for="heading">Heading</label>
                                    <input id="heading" type="text" class="form-control" name="heading" value="{{ old('heading', $pengaturan['heading']) }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('heading'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('heading') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                {{-- Input Email email --}}
                                <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $pengaturan['email']) }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                {{-- Input Text telp --}}
                                <div class="form-group label-floating{{ $errors->has('telp') ? ' has-error' : '' }}">
                                    <label class="control-label" for="telp">Telpon</label>
                                    <input id="telp" type="text" class="form-control" name="telp" value="{{ old('telp', $pengaturan['telp']) }}" required autofocus>
                                    <span class="material-input"></span>
                                    @if ($errors->has('telp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                {{-- Input Textarea aturan_pemesanan --}}
                                <div class="form-group {{ $errors->has('aturan_pemesanan') ? ' has-error' : '' }}">
                                    <label for="deskripsi">Aturan Pemesanan</label>
                                    <textarea id="deskripsi" class="form-control" name="aturan_pemesanan" required autofocus>{{ old('aturan_pemesanan', $pengaturan['aturan_pemesanan']) }}</textarea>
                                    <span class="input-material"></span>
                                    @if ($errors->has('aturan_pemesanan'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('aturan_pemesanan') }}</strong>
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