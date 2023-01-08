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
                <form class="needs-validation forms-sample" method="POST" action="{{ route('admin-preferensi.store') }}" novalidate>
                    @csrf
                    <div class="col-lg-6 offset-2 col-md-4">
                        @include('partials.messages')
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder=" "
                                aria-describedby="helpId" required="required" value="{{ old('keterangan') }}">
                            @if ($errors->has('keterangan'))
                                <span class="text-danger text-left">{{ $errors->first('keterangan') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="nilai" class="form-label">Nilai</label>
                            <input type="text" name="nilai" class="form-control" placeholder=" "
                                aria-describedby="helpId" required="required" value="{{ old('nilai') }}">
                            @if ($errors->has('nilai'))
                                <span class="text-danger text-left">{{ $errors->first('nilai') }}</span>
                            @endif
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin-preferensi') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
