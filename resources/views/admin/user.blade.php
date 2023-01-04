@extends('layouts.main_admin')
@section('content')
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-header">
        <div class="row">
                <div class="col-lg-8">
                    <h5>{{ $title }}</h5>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="#" class="btn btn-success"><i class='bx bx-plus-circle' style="font-size: 1.5em"></i> Tambah User</a>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($user as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                           <div class="row"> 
                                <div class="col-lg-6">
                                    <a href="#"><i class='bx bx-edit crud-icon' style="font-size: 1.5em; color:green;"></i></a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#"><i class='bx bxs-eraser' style="font-size: 1.5em; color:red;"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

  
@endsection