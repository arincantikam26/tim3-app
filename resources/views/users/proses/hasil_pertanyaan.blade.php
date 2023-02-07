@extends('layouts.main_users')
@section('content')
    <h1>Hasil Pertanyaan</h1>
    <div class="card mb-5">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Berikut adalah hasil perangkingan program studi yang anda pilih</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Nama Prodi</th>
                        <th scope="col">Minat</th>
                        <th scope="col">Bakat</th>
                        <th scope="col">Hobi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
