@extends('layouts.main_users')
@section('content')
    <section id="main">
        <div class="card text-center p-4">
            <div class="card-body">
                <h4 class="card-title badge rounded-pill bg-dark">Cek Program Studi</h4>
                <div class="card-text">
                    <h3>Cek Jurusan Sekolah Asal</h3>
                    <p>Jawablah Pertanyaan Berikut dengan Baik</p>

                </div>
                <div class="row">
                    <div class="col-lg-8 offset-2 text-start">
                        @foreach ($prodi as $item)
                            <p>{{ $item->nama_prodi }}</p>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
