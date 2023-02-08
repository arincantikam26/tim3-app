@extends('layouts.main_users')
@section('content')
    <h1>Hasil Pertanyaan</h1>
    <div class="card mb-3">
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
                      @foreach ($ahp['nama'] as $index => $item)
                        <th scope="col">{{ $item }}</th>   
                      @endforeach
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($saw['data'] as $index => $item)
                      <tr>
                        <th>{{ $item['nama'] }}</th>
                        <td>{{ $item['Minat'][0] }}</td>
                        <td>{{ $item['Bakat'][0] }}</td>
                        <td>{{ $item['Hobi'][0] }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <td><b>Max</b></td>
                        @foreach($saw['max_value'] as  $item)     
                          <td>{{ $item }}</td>
                        @endforeach
                    </tr>
                  </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Data SAW Metoda Next</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Nama Prodi</th>
                        @foreach ($ahp['nama'] as $index => $item)
                        <th scope="col">{{ $item }}</th>   
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @for ($i = 0; $i < count($saw['next']); $i++)
                        <tr>
                            <td><b>{{ $saw['data'][$i]['nama'] }}</b></td>
                            @for ($j = 0; $j < count($saw['next'][$i]); $j++)
                            <td>{{ $saw['next'][$i][$j] }}</td>
                            @endfor
                        </tr>
                    @endfor
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Hasil Pemilihan Program Studi</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                  <h1>Halo, {{ auth()->user()->name }}</h1>
                  <h2>Hasil pemilihan adalah <span style="color:red"></span></h2>
                </div>
            </div>
        </div>
    </div>
@endsection
