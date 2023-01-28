@extends('layouts.main_users')
@section('content')
    <section id="main">
        <div class="card text-center p-4">
            <div class="card-body">
                <h4 class="card-title badge rounded-pill bg-dark">Cek Program Studi</h4>
                <div class="card-text">
                    <h3>Cek Jurusan Sekolah Asal</h3>
                    <p>Membantu menemukan Program Studi yang ada di Politeknik Negeri Padang berdasarkan Jurusan Sekolah
                        asal.</p>
                </div>
                <div class="row">
                    <div class="col-lg-5 mb-3">
                        <img class="me-3 img-fluid" src="{{ asset('logopoli.png') }}" alt="pnp" width="200px" />
                    </div>
                    <div class="col-lg-7 text-start">
                        <h3>Lengkapi Data Dibawah ini</h3>
                        <p>Silahkan isi sesuai data anda :</p>
                        <form action="/check" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user"></i></span>
                                        <input type="text" name="name" id="name" class="form-control me-5 p-2"
                                            id="basic-icon-default-fullname" placeholder="User Name" aria-label="User Name"
                                            value="{{ auth()->user()->name }}"
                                            aria-describedby="basic-icon-default-fullname2" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Jurusan
                                    Sekolah</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i
                                                class="bx bx-buildings"></i></span>
                                        <div style="border: 1px solid rgb(220, 219, 219);">
                                            <select name="jurusansekolah_id" id="jurusansekolah_id"
                                                class="selectpicker form-group me-5" aria-label="Jurusan Sekolah"
                                                data-live-search="true" required>
                                                <option value="">Pilih Jurusan Sekolah</option>
                                                @foreach ($jurusan as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid text-center gap-2 me-5" id="cek">
                                <button type="submit" class="btn btn-primary">Cek Program Studi</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
