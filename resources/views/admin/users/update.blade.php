@extends('layouts.main_admin')
@section('content')
    <h1>{{ $title }}</h1>
    <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Update Pengguna</h5>
            <a href="{{ route('usercrud.index') }}" class="btn btn-primary">Back to home</a>
          </div>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-user"></i
                  ></span>
                  <input
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="John Doe"
                    aria-label="John Doe"
                    aria-describedby="basic-icon-default-fullname2"
                  />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Username</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class='bx bxs-user-badge'></i>
                    </span>
                  <input
                    type="text"
                    id="basic-icon-default-company"
                    class="form-control"
                    placeholder="ACME Inc."
                    aria-label="ACME Inc."
                    aria-describedby="basic-icon-default-company2"
                  />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Email</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input
                    type="text"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="john.doe"
                    aria-label="john.doe"
                    aria-describedby="basic-icon-default-email2"
                  />
                  <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-phone">Password</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-phone2" class="input-group-text"
                    ><i class='bx bx-lock-alt' ></i>
                  </span>
                  <input
                    type="password"
                    id="basic-icon-default-phone"
                    class="form-control phone-mask"
                    placeholder="Fill Your Password"
                    aria-label="Fill Your Password"
                    aria-describedby="basic-icon-default-phone2"
                  />
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </div>
      </div>
@endsection