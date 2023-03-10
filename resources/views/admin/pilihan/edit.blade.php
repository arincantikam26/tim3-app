@extends('layouts.main_admin')
@section('content')
    <h1>Edit {{ $title }}</h1>
    <div class="card mb-5">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Edit {{ $title }}</h5>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <div class="row">
                <form class="needs-validation forms-sample" method="POST"
                    action="{{ route('admin-pilihan.update', $pilihan->id) }}" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-lg-6 offset-2 col-md-4">
                        @include('partials.messages')
                        <div class="mb-3">
                            <label for="id_jurusan_sekolah" class="form-label">Jurusan Sekolah Asal</label>
                            <select class="form-select form-select-lg" name="id_jurusan_sekolah" id="id_jurusan_sekolah">
                                <option>Pilih Jurusan Sekolah</option>
                                @foreach ($jurusansekolah as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $pilihan->id_jurusan_sekolah ? 'selected' : '' }}>
                                        {{ $item->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="prodi_id" class="form-label">Pilihan Prodi</label>
                            <select class="form-select form-select-lg" name="prodi_id" id="prodi_id">
                                <option>Pilih Prodi</option>
                                @foreach ($prodi as $item)
                                    <option value="{{ $item->id_prodi }}"
                                        {{ $item->id_prodi == $pilihan->prodi_id ? 'selected' : '' }}>
                                        {{ $item->nama_prodi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin-pilihan.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
