@extends('layouts.main_users')
@section('content')
    <h1>Hasil Rekomenasi Program Studi</h1>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
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
                        @php
                            $q = 1;
                        @endphp
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

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Hasil Pemilihan Program Studi</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h1>Halo, {{ auth()->user()->name }}</h1>
                    <h2>Hasil pemilihan adalah <span style="color:red"></span></h2>
                </div>
            </div>
        </div>
    </div>
@endsection
