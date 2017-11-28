@extends('template')

@section('content')

    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-5 my-auto">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="{{ asset('img/sampul/' . $buku['sampul']) }}" style="width: 100%;" class="img-fluid mb-3">
                </div>
                <div class="col-lg-7 my-auto">
                    <div class="header-content mx-auto">
                        <h4>{{ $buku['id_buku'] }}</h4>
                        <h1 class="mb-1">{{ $buku['judul'] }}</h1>
                        <h3 class="mb-5">{{ $buku['kategori']->nama }}</h3>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 mb-3">
                                <a href="{{ url('/ebook/' . $buku['file']) }}" role="button" class="btn btn-outline btn-xl btn-block"><b>Lihat Buku</b></a>
                            </div>

                            <div class="col-md-12 col-lg-12 mb-3">
                                <a href="#book" class="btn btn-primary btn-xl btn-block js-scroll-trigger"><b>Informasi Buku</b></a>
                            </div>

                            <div class="col-md-12 col-lg-12 mb-3">
                                <a href="{{ url('/#contact') }}" role="button" class="btn btn-success btn-xl btn-block"><b>Pesan Sekarang</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="features" id="book">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Informasi Buku</h2>
                @php $tersedia = $buku['stok'] > 0 ? 'tersedia' : 'tidak tersedia' @endphp
                @php $color = $buku['stok'] > 0 ? '#8BC34A' : '#F44336' @endphp
                <h3 style="color: {{ $color }};">{{ $tersedia }}</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="feature-item">
                                    <i class="fa fa-usd"></i>
                                    <h3>Harga</h3>
                                    <p class="text-muted">Rp. {{ $buku['harga'] }}</p>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-item">
                                    <i class="fa fa-book"></i>
                                    <h3>Jumlah Halaman</h3>
                                    <p class="text-muted">{{ $buku['jumlah_halaman'] }}</p>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-item">
                                    <i class="fa fa-calendar"></i>
                                    <h3>Tahun Terbit</h3>
                                    <p class="text-muted">{{ $buku['tahun_terbit'] }}</p>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-item">
                                    <i class="fa fa-building"></i>
                                    <h3>Penerbit</h3>
                                    <p class="text-muted">{{ $buku['penerbit'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" style="margin: auto">
                    {!! $buku['deskripsi'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection