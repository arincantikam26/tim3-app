@extends('auth.auth')
@section('content')
    <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <section>
        <div class="row mt-5">
            <h3 class="text-center">Data {{ $title }}</h3>
            <div class="col-lg-8 offset-2">
                <div class="table-responsive">
                    <table class="table table-info datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Prodi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusan as $index => $item)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $item->nama_jurusan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
    <!-- Template Main JS File -->
    <script src="/assets/js/main2.js"></script>
@endsection
