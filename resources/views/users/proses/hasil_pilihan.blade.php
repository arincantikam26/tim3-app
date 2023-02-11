@extends('layouts.main_users')
@section('content')
    <h1>Hasil Rekomendasi Program Studi</h1>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Hasil Rekomendasi Program Studi</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h1>Halo, {{ auth()->user()->name }}</h1>
                    <h2>Rekomendasi Program Studi Terbaik untuk Anda adalah :<br><br> <span
                            style="color:red">{{ $result['prodi_max'] }}</span></h2>
                    <br>
                    <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#proses"
                            aria-expanded="false" aria-controls="proses">
                            Lihat Proses Perhitungan
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="proses" class="collapse">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">Proses Perhitungan</h2>
                        <h5>Tabel Perbandingan Kriteria dan Alternatif</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <strong>
                                <tr>
                                    <th scope="col">Nama Prodi</th>
                                    @foreach ($result['nama'] as $index => $item)
                                        <th scope="col">{{ $item }}</th>
                                    @endforeach
                                </tr>
                            </strong>
                        </thead>
                        <tbody>
                            @foreach ($result['data'] as $index => $item)
                                <tr>
                                    <th>{{ $item['nama'] }}</th>
                                    @foreach ($result['id'] as $value)
                                        <td>
                                            {{ $item['p' . $value] }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="fw-bold">
                                <td>Max</td>
                                @foreach ($result['max'] as $item)
                                    <td>{{ $item }}</td>
                                @endforeach

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Tabel Normalisasi Perbandingan Alternatif dan Kriteria</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama Prodi</th>
                                @foreach ($result['nama'] as $index => $item)
                                    <th scope="col">{{ $item }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $normal = [];
                                $id = 0;
                            @endphp
                            @foreach ($result['data'] as $item)
                                <tr>
                                    <th>{{ $item['nama'] }}</th>

                                    @foreach ($result['normalisasi'] as $index => $item)
                                        <td>{{ round($item[$id], 2) }}</td>
                                    @endforeach
                                    @php
                                        $id = $id + 1;
                                    @endphp
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Tabel Nilai Preferensi</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama Prodi</th>
                                @foreach ($result['nama'] as $index => $item)
                                    <th scope="col">{{ $item }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id_pref = 0;
                            @endphp
                            @foreach ($result['data'] as $item)
                                <tr>
                                    <th>{{ $item['nama'] }}</th>
                                    @foreach ($result['preferensi'] as $index => $pref)
                                        <td>{{ round($pref[$id_pref], 2) }}</td>
                                    @endforeach
                                    @php
                                        $id_pref = $id_pref + 1;
                                    @endphp
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Tabel Perangkingan</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama Prodi</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Peringkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id_pref = 1;
                            @endphp
                            @foreach ($result['sort_rank'] as $index => $item)
                                <tr @if ($id_pref == 1) style="background: rgb(192, 221, 255);" @endif>
                                    <td>{{ $index }}</td>
                                    <td>{{ round($item, 2) }}</td>
                                    <td>{{ $id_pref }}</td>
                                    @php
                                        $id_pref = $id_pref + 1;
                                    @endphp
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endsection
