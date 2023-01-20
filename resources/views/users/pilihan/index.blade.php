@extends('layouts.main_admin')
@section('content')
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>{{ $title }}</h5>
                </div>
                <div class="col-lg-4 text-end mb-3">
                    <a href="{{ route('user-pilihan.create') }}" class="btn btn-success"><i class='bx bx-plus-circle'
                            style="font-size: 1.5em"></i> Tambah
                        {{ $title }}</a>
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
                        <th>Prodi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($pilihan as $index => $item)
                        <tr>
                            <th class="text-center" scope="row">{{ $index + 1 }}</th>
                            <td>{{ $item->jurusansekolah->nama_jurusan }}</td>
                            <td>{{ $item->prodi->nama_prodi }}</td>
                            <td>
                                <form action="{{ route('user-pilihan.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('user-pilihan.edit', $item->id) }}">
                                        <i class='bx bx-edit crud-icon'
                                            style="font-size: 1.5em; color:green;"title="Edit"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-transparent border-0"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                        <i class='bx bxs-eraser' style="font-size: 1.5em; color:red;"title="Hapus"></i>
                                    </button>
                                    {{ $item->username }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
