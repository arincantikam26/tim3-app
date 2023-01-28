@extends('layouts.main_users')
@section('content')
    <section id="main">
        <div class="card text-center p-4">
            <div class="card-body">
                <h4 class="card-title badge rounded-pill bg-dark">Cek Program Studi</h4>
                <div class="card-text">
                    <h3>Cek Jurusan Sekolah Asal</h3>
                    <p>Berikut Prodi yang dapat Anda Pilih dari Jurusan Sekolah Anda : {{ $sekolah->nama_jurusan }}</p>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-2 text-start">
                        <form action="/pertanyaan" style="margin:1em" method="POST">
                            @csrf
                            <div class="table-responsive text-nowrap p-3">
                                @include('partials.messages')
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Jurusan</th>
                                            <th>Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @php
                                            $before = '';
                                        @endphp
                                        @foreach ($available as $item)
                                            <tr>
                                                <td>{{ $item->prodi->jurusan->nama_jurusan != $before ? $item->prodi->jurusan->nama_jurusan : '' }}
                                                </td>
                                                @php
                                                    $before = $item->prodi->jurusan->nama_jurusan;
                                                @endphp
                                                <td>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="id_prodi[]"
                                                                value="{{ $item->prodi_id }}"/>
                                                            {{ $item->prodi->nama_prodi }}
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            {{-- <a href="/pertanyaan" class="btn btn-primary">Proses</a> --}}
                            <button type="submit" class="btn btn-primary">Proses</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
