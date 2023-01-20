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
                    <a href="{{ route('admin-user.create') }}" class="btn btn-success"><i class='bx bx-plus-circle'
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
                            <span class="ps-5">Username</span>
                        </th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($user as $index => $item)
                        <tr>
                            <th class="text-center" scope="row">{{ $index + 1 }}</th>
                            <td>
                                <p>
                                    <a class="ps-5" href="{{ route('admin-user.edit', $item->id) }}">
                                        <i class='bx bx-edit crud-icon'
                                            style="font-size: 1.5em; color:green;"title="Edit"></i>
                                    </a>
                                    <button type="button" class="bg-transparent border-0" data-bs-toggle="modal"
                                        data-bs-target="#basicModal{{ $item->id }}">
                                        <i class='bx bxs-eraser' style="font-size: 1.5em; color:red;"title="Hapus"></i>
                                    </button>
                                    {{ $item->username }}
                                </p>
                            </td>
                            {{-- Modal --}}
                            <div class="modal fade" id="basicModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Hapus Data {{ $title }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Apakah Anda Yakin Ingin Menghapus?</div>
                                        <div class="modal-footer">
                                            <form action="{{ route('admin-user.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>

                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">
                                                Batal
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- end modal --}}
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                @if ($item->is_permission == 1)
                                    Admin
                                @else
                                    User
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
@endsection
