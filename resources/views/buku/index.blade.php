@extends('template')

@section('content')
    <section class="features" id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Koleksi Buku Kami</h2>
                <p class="text-muted">deskripsi</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 my-auto">
                    <div class="container-fluid" id="book-list">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        <input type="text" class="search form-control" placeholder="Cari Buku">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row list">
                            @foreach($buku as $row)
                            <div class="col-md-3">
                                <div class="feature-item">
                                    <a href="{{ url('/buku/' . $row['id_buku']) }}" style="text-decoration: none">
                                        <img style="height: 350px; width: auto" src="{{ url('/img/sampul/' . $row['sampul']) }}">
                                        <br><br>
                                        <h3 class="judul">{{ $row['judul'] }}</h3>
                                        @php $tersedia = $row['stok'] > 0 ? 'tersedia' : 'tidak tersedia' @endphp
                                        @php $color = $row['stok'] > 0 ? '#8BC34A' : '#F44336' @endphp
                                        <p style="color: {{ $color }};">{{ $tersedia }}</p>
                                        <p class="text-muted kategori text-hide">{{ $row['kategori']->nama }}</p>
                                        <p class="text-muted harga text-hide">Rp. {{ $row['harga'] }}</p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination"></ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection