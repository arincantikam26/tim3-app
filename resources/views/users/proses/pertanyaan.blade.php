@extends('layouts.main_users')
@section('content')
    <section id="main">
        <div class="card text-center p-4">
            <div class="card-header">
                <h4 class="card-title badge rounded-pill bg-dark">Cek Program Studi</h4>
                <div class="card-text">
                    <h3>Cek Minat, Bakat, dan Hobi terhadap Program Studi</h3>
                    <p>Jawablah Pertanyaan Berikut dengan Baik</p>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 offset-2 text-start">
                        <form action="/hasilpilihan" style="margin:1em" method="post">
                            @csrf

                            @foreach ($prodi as $index => $pilih)
                                <div class="row justify-content-center align-items-center g-2">
                                    <div class="col-lg-4 form-group">
                                        <h5>{{ $pilih->nama_prodi }}</h5>
                                    </div>
                                    <div class="col-lg-8">
                                        @foreach ($kriteria as $kri)
                                            <div class="checkbox mb-2">
                                                <h5>{{ $kri->nama_kriteria }}</h5>
                                            </div>
                                            @php
                                                $subIndex = 0;
                                            @endphp
                                            @foreach ($pertanyaan as $question)
                                                @if ($question->id_prodi == $pilih->id_prodi && $question->id_kriteria == $kri->id)
                                                    <li class="mb-3">
                                                        {{ $question->pertanyaan }}
                                                        <input type="range"
                                                            name="data[{{ $index }}][p{{ $kri->id }}]"
                                                            class="form-range" min="1" id="vol" max="5"
                                                            step="1" onClick="hey()" id="{{ $kri->nama_kriteria }}">
                                                    </li>
                                                    @php
                                                        $subIndex++;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        @endforeach
                                        <input type="hidden" name="data[{{ $index }}][nama]"
                                            value="{{ $prodi[$index]->nama_prodi }}">
                                    </div>
                                </div>
                                <hr>
                                @php
                                    $subIndex = 0;
                                    $index++;
                                @endphp
                            @endforeach
                            <input type="submit" class="btn btn-primary" value="submit">

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
