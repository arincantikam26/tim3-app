@extends('layouts.main_users')
@section('content')
    <section id="main">
      <div class="card text-center mb-3">
          
        <div class="card-body">
          <h4 class="card-title badge rounded-pill bg-dark">Pilih Program Studi</h4>
          <div class="card-text mb-4">
              <p>Berikut jurusan yang bisa dipilih dari jurusan sekolah SMA-IPA</p>
          </div>
          <div class="table-responsive text-nowrap p-4">
            <table class="table table-bordered primary">
              <thead>
                <tr>
                  <th>Jurusan</th>
                  <th>Prodi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Teknik Sipil</td>
                  <td>D4 - PJJ</td>
                </tr>
              </tbody>
            </table>
          </div>
         
          <div class="d-grid gap-2 col-lg-6 mx-auto mt-3">
            <a href="#" class="btn btn-primary btn-lg">Proses</a>
          </div>

        </div>
      </div>
    </section>
@endsection