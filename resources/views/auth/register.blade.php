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

                         <form class="mb-3" action="" method="POST">
                             @csrf
                             <div class="mb-3">
                                 <label for="username" class="form-label">Username</label>
                                 <input type="text" class="form-control" id="username" name="username"
                                     placeholder="Masukkan username anda" autofocus />
                             </div>
                             <div class="mb-3">
                                 <label for="email" class="form-label">Email</label>
                                 <input type="text" class="form-control" id="email" name="email"
                                     placeholder="Masukkan email anda" />
                             </div>
                             <div class="mb-3 form-password-toggle">
                                 <label class="form-label" for="password">Password</label>
                                 <div class="input-group input-group-merge">
                                     <input type="password" id="password" class="form-control" name="password"
                                         placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                         aria-describedby="password" />
                                     <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                 </div>
                             </div>

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
