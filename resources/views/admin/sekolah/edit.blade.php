@extends('layouts.main_admin')
@section('content')
    <h1>Edit {{ $title }}</h1>
    <div class="card mb-5">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Edit {{ $sekolah->keterangan }}</h5>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <div class="row">
                <form class="needs-validation forms-sample" method="POST"
                    action="{{ route('admin-sekolah.update', $sekolah->id) }}" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-lg-6 offset-2 col-md-4">
                        @include('partials.messages')
                        <div class="mb-3">
                            <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                            <input type="text" id="nama_jurusan" name="nama_jurusan" class="form-control" placeholder="Nama Jurusan"
                                aria-describedby="helpId" required="required" value="{{ $sekolah->nama_jurusan }}">
                           
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin-sekolah.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
