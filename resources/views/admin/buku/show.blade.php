@extends('admin.template')

@section('pageTitle', 'Halaman Detail Buku')

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
                    <h3>{{ $buku['judul'] }}</h3>
                </div>
                <div class="col-md-4 col-lg-4">
                    <a class="btn btn-primary pull-right" href="{{ url('ebook/' . $buku['file']) }}" role="button">Lihat Buku</a>
                </div>
            </div>

            <div class="card">
                <div class="card-content table-responsive">

                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <img class="img-responsive" src="{{ url('/img/sampul/' . $buku['sampul']) }}" alt="sampul buku">
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <table class="table table-striped">
                                <tr>
                                    <td>ID Buku</td>
                                    <td>{{ $buku['id_buku'] }}</td>
                                </tr>
                                <tr>
                                    <td>ISBN</td>
                                    <td>{{ $buku['isbn'] }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>{{ $buku['kategori']->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Pengarang</td>
                                    <td>{{ $buku['pengarang'] }}</td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>{{ $buku['penerbit'] }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun Terbit</td>
                                    <td>{{ $buku['tahun_terbit'] }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Halaman</td>
                                    <td>{{ $buku['jumlah_halaman'] . " Lembar" }}</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>{{ 'Rp.' . $buku['harga'] }}</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>{{ $buku['stok'] }}</td>
                                </tr>
                            </table>
                            <hr>
                            <p>{{ $buku['deskripsi'] }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection