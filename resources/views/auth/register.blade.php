 @extends('auth.auth')
 @section('content')
     <div class="container-xxl">
         <div class="authentication-wrapper authentication-basic container-p-y">
             <div class="authentication-inner">
                 <!-- Register Card -->
                 <div class="card">
                     <div class="card-body">
                         <!-- Logo -->
                         <div class="app-brand justify-content-center mb-3">
                             <img src="/assets/image/logopoli.png" alt="logo" width="30%">
                         </div>
                         <!-- /Logo -->
                         <h4 class="mb-2 text-center">Selamat Datang 🚀</h4>
                         <p class="mb-4">Silahkan daftarkan akunmu pada form berikut!</p>

                         <form class="mb-3" action="{{ route('register.request') }}" method="POST">
                             @csrf
                             <div class="mb-3">
                                 <label for="name" class="form-label">Nama Lengkap</label>
                                 <input type="text" class="form-control" id="name" name="name"
                                     value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap Anda"
                                     required="required" autofocus />
                             </div>
                             <div class="mb-3">
                                 <label for="username" class="form-label">Username</label>
                                 <input type="text" class="form-control" id="username" name="username"
                                     placeholder="Masukkan username anda" required="required"
                                     value="{{ old('username') }}" />
                                 @if ($errors->has('username'))
                                     <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                 @endif
                             </div>
                             <div class="mb-3">
                                 <label for="floatingEmail" class="form-label">Email</label>
                                 <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                     placeholder="Masukkan email anda" required="required" />
                                 @if ($errors->has('email'))
                                     <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                 @endif
                             </div>
                             <div class="mb-3 form-password-toggle">
                                 <label class="form-label" for="password">Password</label>
                                 <div class="input-group input-group-merge">
                                     <input type="password" id="password" class="form-control" name="password"
                                         placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                         aria-describedby="password" required="required" />
                                     <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                 </div>
                                 @if ($errors->has('password'))
                                     <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                 @endif
                             </div>

                             <div class="mb-3 form-password-toggle">
                                 <label class="form-label" for="floatingConfirmPassword">Confirm Password</label>
                                 <div class="input-group input-group-merge">
                                     <input type="password" class="form-control" name="password_confirmation"
                                         placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                         aria-describedby="password" value="{{ old('password_confirmation') }}"
                                         placeholder="Confirm Password" required="required" />
                                     <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                 </div>
                                 @if ($errors->has('password_confirmation'))
                                     <span
                                         class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                 @endif

                             </div>

                             <input type="hidden" value="2" name="is_permission">

                             <div class="mb-3">
                                 &nbsp;
                             </div>
                             <button class="btn btn-primary d-grid w-100">Daftar</button>
                         </form>

                         <p class="text-center">
                             <span>Sudah punya akun?</span>
                             <a href="/login">
                                 <span>Masuk di sini!</span>
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
