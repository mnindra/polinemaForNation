@extends('template')

@section('content')
    <section class="features" id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>{{ $buku['judul'] }}</h2>
                <p class="text-muted">{{ $buku['kategori']->nama }}</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-4 my-auto">
                    <img src="{{ asset('img/sampul/' . $buku['sampul']) }}" class="img-fluid">
                    <br><br>
                    <div class="text-center">
                        <span class="text-muted">ID BUKU</span>
                        <h4>{{ $buku['id_buku'] }}</h4>
                    </div>
                    <br>
                    <a href="{{ url('/ebook/' . $buku['file']) }}" role="button" class="btn btn-outline-primary btn-lg btn-block">Lihat Buku</a>
                    <a href="{{ url('/#contact') }}" role="button" class="btn btn-outline-success btn-lg btn-block">Pesan Sekarang</a>
                </div>
                <div class="col-lg-8 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fa fa-usd"></i>
                                    <h3>Harga</h3>
                                    <p class="text-muted">Rp. {{ $buku['harga'] }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fa fa-book"></i>
                                    <h3>Jumlah Halaman</h3>
                                    <p class="text-muted">{{ $buku['jumlah_halaman'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fa fa-calendar"></i>
                                    <h3>Tahun Terbit</h3>
                                    <p class="text-muted">{{ $buku['tahun_terbit'] }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fa fa-building"></i>
                                    <h3>Penerbit</h3>
                                    <p class="text-muted">{{ $buku['penerbit'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                {!! $buku['deskripsi'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection