@extends('layouts.main_users')
@section('content')
    <h1>List {{ $title }}</h1>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>{{ $title }}</h5>
                </div>

            </div>
        </div>
        <div class="table-responsive text-nowrap p-3">
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>
                            Nama Jurusan Sekolah
                        </th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($jurusan as $index => $item)
                        <tr>
                            <th class="text-center" scope="row">{{ $index + 1 }}</th>
                            <td>{{ $item->nama_jurusan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
