@extends('template')

@section('nav')
    <ul class="navbar-nav ml-auto">
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link js-scroll-trigger" href="#features">Fitur</a>--}}
        {{--</li>--}}
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#book">Koleksi Buku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Pemesanan</a>
        </li>
    </ul>
@endsection

@section('content')
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5">Deskripsi Disini</h1>
                        <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Lihat Koleksi Buku</a>
                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="{{ asset('img/demo-screen-1.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{--<section class="features" id="features">--}}
        {{--<div class="container">--}}
            {{--<div class="section-heading text-center">--}}
                {{--<h2>Kenapa Memilih Kami</h2>--}}
                {{--<p class="text-muted">Apa yang kami tawarkan</p>--}}
                {{--<hr>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-4 my-auto">--}}
                    {{--<div class="device-container">--}}
                        {{--<div class="device-mockup iphone6_plus portrait white">--}}
                            {{--<div class="device">--}}
                                {{--<div class="screen">--}}
                                    {{--<!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->--}}
                                    {{--<img src="{{ asset('img/demo-screen-1.jpg') }}" class="img-fluid" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="button">--}}
                                    {{--<!-- You can hook the "home button" to some JavaScript events or just remove it -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-8 my-auto">--}}
                    {{--<div class="container-fluid">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<div class="feature-item">--}}
                                    {{--<i class="icon-screen-smartphone text-primary"></i>--}}
                                    {{--<h3>Device Mockups</h3>--}}
                                    {{--<p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<div class="feature-item">--}}
                                    {{--<i class="icon-camera text-primary"></i>--}}
                                    {{--<h3>Flexible Use</h3>--}}
                                    {{--<p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<div class="feature-item">--}}
                                    {{--<i class="icon-present text-primary"></i>--}}
                                    {{--<h3>Free to Use</h3>--}}
                                    {{--<p class="text-muted">As always, this theme is free to download and use for any purpose!</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<div class="feature-item">--}}
                                    {{--<i class="icon-lock-open text-primary"></i>--}}
                                    {{--<h3>Open Source</h3>--}}
                                    {{--<p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="cta" id="book">
        <div class="cta-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5">
                        <h2>Koleksi Buku Terbaru</h2>
                        <a name="" id="" class="btn btn-block btn-outline-primary btn-lg" href="#" role="button">Lihat Semua Koleksi</a>
                    </div>
                    <div class="col-md-7 col-lg-7">
                        <div class="owl-carousel">
                            @foreach($buku as $row)
                                <div>
                                    <a style="text-decoration: none" href="{{ url('/buku/' . $row['id_buku']) }}">
                                        <img width="100%" height="280" src="{{ asset('img/sampul/' . $row['sampul']) }}" alt="">
                                        <br>
                                        <h5 class="text-center text-white">{{ $row['judul'] }}</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <h2>Pemesanan</h2>
                    <form action="{{ url('/pemesanan/create') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text nama --}}
                                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="nama" type="text" class="form-control" name="nama" placeholder="nama" value="{{ old('nama') }}" required >
                                    </div>
                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Email email --}}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required >
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                {{-- Input Text telp --}}
                                <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input id="telp" type="text" class="form-control" name="telp" placeholder="nomor telepon" value="{{ old('telp') }}" required >
                                    </div>
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
                                {{-- Input Textarea isi --}}
                                <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
                                    <textarea id="isi" class="form-control" name="isi" rows="5" placeholder="Pesan" required >{{ old('isi') }}</textarea>
                                    @if ($errors->has('isi'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('isi') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 text-center">
                                <button class="btn btn-lg btn-block btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection