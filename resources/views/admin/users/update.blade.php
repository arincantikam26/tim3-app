@extends('layouts.main_admin')
@section('content')
    <h1>Edit {{ $title }}</h1>
    <div class="card mb-5">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Edit {{ $user->username }}</h5>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <div class="row">
                <form class="needs-validation forms-sample" method="POST"
                    action="{{ route('admin-user.update', $user->id) }}" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-lg-6 offset-2 col-md-4">
                        @include('partials.messages')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap User</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap User"
                                aria-describedby="helpId" required="required" value="{{ $user->name }}">
                           
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username"
                                aria-describedby="helpId" required="required" value="{{ $user->username }}">
                           
                        </div>
                        <div class="mb-3">
                            <label for="is_permission" class="form-label">Role</label>
                            <select class="form-select form-select-lg" name="is_permission" id="is_permission">
                                <option>Pilih Role</option>
                                    @if ($user->is_permission == 1)
                                        <option selected value="{{ $user->is_permission }}">
                                            Admin
                                        </option>
                                    @else
                                        <option selected value="{{ $user->is_permission }}">
                                            User
                                        </option>
                                    @endif
                                </option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                             
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="email"
                                aria-describedby="helpId" required="required" value="{{ $user->email }}">
                            <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                       
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin-user.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
