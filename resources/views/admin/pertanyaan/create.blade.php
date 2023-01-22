@extends('layouts.main_admin')
@section('content')
    <h1>Tambah {{ $title }}</h1>
    <div class="card mb-5">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>{{ $title }}</h5>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <div class="row">
                <form class="needs-validation forms-sample" method="POST" action="{{ route('admin-pertanyaan.store') }}"
                    novalidate>
                    @csrf
                    <div class="col-lg-6 offset-2 col-md-4">
                        @include('partials.messages')
                        <div class="mb-3">
                            <label for="id_prodi" class="form-label">Nama Program Studi</label>
                            <select class="form-select form-select-lg" name="id_prodi" id="id_prodi">
                                <option value="">Pilih Prodi</option>
                                @foreach ($prodi as $item)
                                    <option value="{{ $item->id_prodi }}">{{ $item->nama_prodi }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_prodi'))
                                <span class="text-danger text-left">{{ $errors->first('id_prodi') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="id_kriteria" class="form-label">Nama Kriteria</label>
                            <select class="form-select form-select-lg" name="id_kriteria" id="id_kriteria">
                                <option value="">Pilih Kriteria</option>
                                @foreach ($kriteria as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kriteria }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_kriteria'))
                                <span class="text-danger text-left">{{ $errors->first('id_kriteria') }}</span>
                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan" class="form-label">Pertanyaan</label>
                            <input type="text" name="pertanyaan" class="form-control" placeholder="Pertanyaan"
                                aria-describedby="helpId" required="required" value="{{ old('pertanyaan') }}">
                            @if ($errors->has('pertanyaan'))
                                <span class="text-danger text-left">{{ $errors->first('pertanyaan') }}</span>
                            @endif
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin-pertanyaan.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
