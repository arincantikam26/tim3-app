@extends('layouts.main_users')

@section('content')
    <section id="hero">
        <div class="hero">
            <div class="text-center mt-3">
                <h1 class="display-5 fw-bold">Pilih Program Studi</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="mb-4">
                        Temukan program studi yang tepat dengan menggunakan pemilihan minat dan bakat dan jurusan yang
                        sesuai dengan anda.
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="" class="btn btn-primary btn-lg px-4 gap-3 text-decoration-none">Mulai Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="jurusan pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Jurusan Politeknik Negeri Padang</h3>
                </div>
                {{-- <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#jurusanCarousel" role="button" data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#jurusanCarousel" role="button" data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div> --}}
                <div class="col-12 mt-3">
                    <div id="jurusanCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @foreach ($datajurusan as $item)
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" width="500" height="250"
                                                    src="{{ $item->gambar_jurusan }}">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $item->nama_jurusan }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
