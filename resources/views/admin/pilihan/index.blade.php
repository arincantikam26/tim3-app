@extends('layouts.main_admin')
@section('content')
    <h1>{{ $title }} Program Studi</h1>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>{{ $title }} Program Studi</h5>
                </div>

                @include('partials.messages')
            </div>
        </div>
        <div class="table-responsive text-nowrap p-3">
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Jurusan Sekolah</th>
                        <th>Jumlah Prodi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($jurusansekolah as $index => $item)
                        <tr>
                            <th class="text-center" scope="row">{{ $index + 1 }}</th>
                            <td>{{ $item->nama_jurusan }}</td>
                            <td>{{ $item->pilihan->count() }}</td>
                            <td><a href="{{ route('admin-pilihan.show', $item->id) }}" class="btn btn-success"><i
                                        class='bx bx-plus-circle' style="font-size: 1.5em"></i> Tambah / Edit
                                    {{ $title }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
