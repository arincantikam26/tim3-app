@extends('layouts.main_users')

@section('content')
    <section id="hero">
        <div class="hero">
            <div class="text-center mt-3">
                <h1 class="display-5 fw-bold">Pilih Program Studi</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="mb-4">
                        Temukan program studi yang tepat dengan menggunakan pemilihan minat dan bakat dan jurusan yang sesuai dengan anda.
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="" class="btn btn-primary btn-lg px-4 gap-3">Mulai Sekarang</a>
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
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#jurusanCarousel" role="button" data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#jurusanCarousel" role="button" data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12 mt-3">
                    <div id="jurusanCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/410/75/610/pearls-blueprints-calculator-civil-engineering-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Teknik Sipil</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/682/795/801/computer-engineering-science-tech-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Teknologi Informasi</h4>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/969/670/409/robot-machine-engineering-factory-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Teknik Mesin</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                            <div class="card-body">
                                                <h4 class="card-title">Bahasa Inggris</h4>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/158/131/815/abstract-circuit-computer-detail-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Teknik Elektro</h4>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/608/681/293/administration-adult-banking-business-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Administrasi Niaga</h4>
    
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/29/876/1002/paper-economy-calculator-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Akuntansi</h4>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/779/635/598/technology-computer-circuit-boards-electricity-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">PSDKU Kampus Tanah Datar</h4>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/610/713/297/cpu-computer-circuit-boards-technology-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    PSDKU Kampus Pelalawan		
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://p4.wallpaperbetter.com/wallpaper/72/379/768/technology-security-multimedia-electronic-device-wallpaper-preview.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    PSDKU Kampus Solok Selatan
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection