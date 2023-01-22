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
                <a href="{{ route('admin-preferensi.create') }}" class="btn btn-success"><i class='bx bx-plus-circle'
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
                    <th>
                        <span class="ps-5">Action</span>
                        <span class="ps-5">Label</span>
                    </th>    
                    <th>Bobot</th>
                    <th>Kriteria 1</th>
                    <th>Kriteria 2</th>
                    <th>Dibuat Pada</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($preferensi as $index => $item)
                    <tr>
                        <th class="text-center" scope="row">{{ $index + 1 }}</th>
                        <td>
                           
                            <a class="ps-5" href="{{ route('admin-preferensi.edit', $item->id) }}">
                                <i class='bx bx-edit crud-icon'
                                    style="font-size: 1.5em; color:green;"title="Edit"></i>
                            </a>
                            
                            <button type="button" class="bg-transparent border-0" data-bs-toggle="modal"
                                data-bs-target="#basicModal{{ $item->id }}">
                                <i class='bx bxs-eraser' style="font-size: 1.5em; color:red;"title="Hapus"></i>
                            </button>
                                {{-- Modal Delete --}}
                        <div class="modal fade" id="basicModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Hapus Data {{ $title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">Apakah Anda Yakin Ingin Menghapus?</div>
                                    <div class="modal-footer">
                                        <form action="{{ route('admin-preferensi.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>

                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Batal
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                            {{ $item->keterangan }}
                        </td>
                        <td>{{ $item->nilai }}</td>
                        @foreach ($item->kriteria()->get() as $kriteria)
                            <td> {{ $kriteria->nama_kriteria }}</td>
                            <td>{{ $kriteria->nama_kriteria }}</td>
                        @endforeach
                       
                        
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection