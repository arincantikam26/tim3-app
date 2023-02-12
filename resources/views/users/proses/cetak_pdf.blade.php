<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Core CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .hasil-pilihan {
            border-radius: 50px;
            border: 0.5px solid rgb(54, 54, 54);     
            padding: 20px;
            width: 100%;
            
        }
        .txt-center {
            text-align: center;
        }
        table {
            table-layout: auto;
            width: 100%;
            border: 1px solid rgb(39, 39, 39);
            padding: 5px;
            margin: 10px;
        }
        tr {
            height: 20px;
        }
        td, th {
            border: 1px solid rgb(39, 39, 39);
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        table.center {
            margin-left: auto; 
            margin-right: auto;
        }
        .page-break {
            page-break-after: always;
        }

    </style>

</head>
<body>
    <div class="container">
        <h1 style="color:rgb(33, 33, 33);" class="txt-center">{!! $title !!}</h1>
        <br><br>
        <div class="hasil-pilihan txt-center">
            <div class="row p-4">
                <div class="col-md-12">
                    <h1>Halo, {{ auth()->user()->name }}</h1>
                    <h2>Rekomendasi Program Studi Terbaik untuk Anda adalah :<br><br> 
                        <span
                            style="color:red">{{ $result['prodi_max'] }}
                        </span>
                    </h2>
                </div>
            </div>
        </div>

        {{-- Hasil Perangkingan --}}
        <h3 class="txt-center">Hasil Perangkingan Program Studi</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama Prodi</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Peringkat</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $id_pref = 1;
                @endphp
                @foreach ($result['sort_rank'] as $index => $item)
                    <tr @if ($id_pref == 1) style="background: rgb(192, 221, 255);" @endif>
                        <td>{{ $index }}</td>
                        <td>{{ round($item, 2) }}</td>
                        <td>{{ $id_pref }}</td>
                        @php
                            $id_pref = $id_pref + 1;
                        @endphp
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="page-break"></div>
        {{-- Proses Perhitungan --}}

        {{-- Tabel Perbandingan Kriteria dan Alternatif --}}
        <div class="txt-center">
            <h3>Proses Perhitungan</h3><br>
            <h5>Tabel Perbandingan Kriteria dan Alternatif</h5>
        </div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama Prodi</th>
                    @foreach ($result['nama'] as $index => $item)
                        <th scope="col">{{ $item }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($result['data'] as $index => $item)
                    <tr>
                        <th>{{ $item['nama'] }}</th>
                        @foreach ($result['id'] as $value)
                            <td>
                                {{ $item['p' . $value] }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Max</th>
                    @foreach ($result['max'] as $item)
                        <td>{{ $item }}</td>
                    @endforeach

                </tr>
            </tfoot>
        </table>

        {{-- Tabel Normalisasi Perbandingan Alternatif dan Kriteria --}}
        <div class="txt-center">
            <h5>Tabel Perbandingan Kriteria dan Alternatif</h5>
        </div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama Prodi</th>
                    @foreach ($result['nama'] as $index => $item)
                        <th scope="col">{{ $item }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @php
                    $normal = [];
                    $id = 0;
                @endphp
                @foreach ($result['data'] as $item)
                    <tr>
                        <th>{{ $item['nama'] }}</th>

                        @foreach ($result['normalisasi'] as $index => $item)
                            <td>{{ round($item[$id], 2) }}</td>
                        @endforeach
                        @php
                            $id = $id + 1;
                        @endphp
                    </tr>
                @endforeach
            </tbody>
        </table>

         {{-- Tabel Nilai Preferensi --}}
         <div class="txt-center">
            <h5>Tabel Nilai Preferensi</h5>
        </div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama Prodi</th>
                    @foreach ($result['nama'] as $index => $item)
                        <th scope="col">{{ $item }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @php
                    $id_pref = 0;
                @endphp
                @foreach ($result['data'] as $item)
                    <tr>
                        <th>{{ $item['nama'] }}</th>
                        @foreach ($result['preferensi'] as $index => $pref)
                            <td>{{ round($pref[$id_pref], 2) }}</td>
                        @endforeach
                        @php
                            $id_pref = $id_pref + 1;
                        @endphp
                    </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
</body>

</html>
