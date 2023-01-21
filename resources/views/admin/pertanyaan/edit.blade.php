@extends('layouts.main_admin')
@section('content')
    <h1>Edit {{ $title }}</h1>
    <div class="card mb-5">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Edit {{ $pertanyaan->pertanyaan }}</h5>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <div class="row">
                <form class="needs-validation forms-sample" method="POST"
                    action="{{ route('pertanyaan.update', $pertanyaan->id_pertanyaan) }}" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-lg-6 offset-2 col-md-4">
                        @include('partials.messages')
                        <div class="mb-3">
                            <label for="pertanyaan" class="form-label">Nama Program Studi</label>
                            <select class="form-select form-select-lg" name="id_prodi" id="id_prodi">
                                <option>Pilih Program Studi</option>
                                @foreach ($pertanyaan as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $pertanyaan->id_prodi ? 'selected' : '' }}>
                                        {{ $item->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan" class="form-label">Nama Kriteria</label>
                            <select class="form-select form-select-lg" name="id_kriteria" id="id_kriteria">
                                <option>Pilih Kriteria</option>
                                @foreach ($pertanyaan as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $pertanyaan->id_kriteria ? 'selected' : '' }}>
                                        {{ $item->nama_kriteria }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_pertanyaan" class="form-label">Nama Pertanyaan</label>
                            <input type="text" name="nama_pertanyaan" class="form-control" placeholder="Nama Pertanyaan"
                                aria-describedby="helpId" required="required" value="{{ $pertanyaan->pertanyaan }}">
                            @if ($errors->has('pertanyaan'))
                                <span class="text-danger text-left">{{ $errors->first('pertanyaan') }}</span>
                            @endif
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin-prodi') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
