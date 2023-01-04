@extends('layouts.main_admin')
@section('content')
    <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5>{{ $title }}</h5>
                </div>
                <div class="col-lg-4 text-end mb-3">
                    <a href="" class="btn btn-success"><i class='bx bx-plus-circle' style="font-size: 1.5em"></i> Tambah
                        {{ $title }}</a>
                </div>
                @include('partials.messages')

            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>
                            <span class="ps-5">Action </span>
                            <span class="ps-5"> Nama Prodi</span>
                        </th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($prodi as $index => $item)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>
                                @foreach ($item->prodis()->get() as $prodi)
                                    <p>
                                    <form action="" method="POST">
                                        <a class="ps-5" href=""><i class='bx bx-edit crud-icon'
                                                style="font-size: 1.5em; color:green;" title="Edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="pe-5 bg-transparent border-0"
                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')"><i
                                                class='bx bxs-eraser' style="font-size: 1.5em; color:red;"
                                                title="Hapus"></i></button>
                                        {{ $prodi->nama_prodi }}
                                    </form>
                                    </p>
                                @endforeach
                            </td>
                            <td>{{ $item->nama_jurusan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
    <!-- Template Main JS File -->
    <script src="/assets/js/main2.js"></script>
@endsection