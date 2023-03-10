@extends('layouts.main_admin')
@section('content')
<div class="card mb-3">
  @include('partials.messages')
  <div class="row align-items-center">
    <div class="col-md-4 text-center">
      <img src="{{ asset('assets/image/logopoli.png') }}" alt class=""/>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title mb-3">Profile Saya</h2>
        <table class="table-responsive table-borderles text-nowrap w-auto p-2">
          <tr>
            <td>Name</td>
            <th>:</th>
            <th> {{ $user->name }}</th>
          </tr>
          <tr>
            <td>Username</td>
            <th>:</th>
            <th> {{ $user->username }}</th>
          
          </tr>
          <tr>
            <td>Email</td>
            <th>:</th>
            <th> {{ $user->email }}</th>
          
          </tr>
        </table>
         <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Edit Profile
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="needs-validation forms-sample" method="POST"
                action="/edit-profile/{{ $user->id }}" novalidate>
                @csrf
                @method('PUT')
                <div class="col-lg-6 offset-2 col-md-4">
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
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email"
                            aria-describedby="helpId" required="required" value="{{ $user->email }}">
                        <div class="form-text">You can use letters, numbers & periods</div>
                    </div>
                   
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection