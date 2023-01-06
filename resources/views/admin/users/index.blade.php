@extends('layouts.main_admin')
@section('content')
    
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-header">
            <h5>{{ $title }}</h5>
            @include('partials.messages')
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
                                    <form action="{{ route('usercrud.destroy', $item->id) }}" method="POST">
                                        <a class="ps-5" href="{{ route('usercrud.edit', $item->id) }}">
                                            <i class='bx bx-edit crud-icon' style="font-size: 1.5em; color:green;"title="Edit"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="pe-5 bg-transparent border-0"
                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                            <i class='bx bxs-eraser' style="font-size: 1.5em; color:red;"title="Hapus"></i>
                                        </button>

                                        {{ $item->username }}
                                    </form>
                                </p>
                                
                            </td>
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
@endsection
