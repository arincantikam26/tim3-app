@extends('layouts.main_admin')
@section('content')

<section id="hero">
    <div class="row">
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img class="card-img card-img-left" src="{{ asset('assets/image/admin_hero.jpg') }}" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Haloo!!</h5>
                            <div class="card-text">
                                <q>
                                    Hal terpenting tentang teknologi adalah bagaimana hal itu mengubah orang.
                                </q>
                                <hr>
                                <p>
                                    Selamat Datang di Sistem Pendukung Keputusan Pemilihan Program Studi PNP
                                </p>
                            </div>
                            <p class="card-text"><small class="text-muted"><span id='ct5'></span></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="data-admin">
    <div class="row">
        <div class="col-lg-4 col-md-4 order-0 mb-3">
            <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <i class="bx bxs-buildings" style="color:rgb(117, 233, 117); font-size:2em;"></i>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Jurusan Kampus</span>
                  <h3 class="card-title mb-2"> {{ $jurusan }}Jurusan</h3>
                  <small class="text-success fw-semibold"><a href="#"> Details <i class="fa-solid fa-angles-right"></i></a></small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-0 mb-3">
            <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <i class="bx bxs-school" style="color:rgb(117, 233, 117); font-size:2em;"></i>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Prodi</span>
                  <h3 class="card-title mb-2"> {{ $prodi }}Jurusan</h3>
                  <small class="text-success fw-semibold"><a href="#"> Details <i class="fa-solid fa-angles-right"></i></a></small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-0 mb-3">
            <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <i class="bx bxs-user" style="color:rgb(117, 233, 117); font-size:2em;"></i>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Data User</span>
                  <h3 class="card-title mb-2"> Pengguna</h3>
                  <small class="text-success fw-semibold"><a href="#"> Details <i class="fa-solid fa-angles-right"></i></a></small>
                </div>
            </div>
        </div>
        
    </div> 
</section>

<script>
    function display_ct5() {
        var x = new Date()
        var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

        var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
        x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
        document.getElementById('ct5').innerHTML = x1;
        display_c5();
    }
    function display_c5(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct5()',refresh)
    }
    display_c5()
</script>
  <!--/ Horizontal -->
@endsection
