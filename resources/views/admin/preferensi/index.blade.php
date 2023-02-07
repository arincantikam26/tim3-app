 {{-- {{ dd($metoda['total']) }} --}}
 @extends('layouts.main_admin')
 @section('content')
     <h1>
         {{ $title }}</h1>
     <div class="card">

         <div class="card-header">
             <div class="row">
                 <div class="col-lg-8">
                     <h5>{{ $title }}</h5>
                 </div>
                 <div class="col-lg-4 text-end mb-3">
                     <a href="{{ route('admin-preferensi.create') }}" class="btn btn-success"><i class='bx bx-plus-circle'
                             style="font-size: 1.5em"></i> Tambah
                         {{ $title }}</a>
                 </div>
                 @include('partials.messages')
             </div>
         </div>
         <div class="table-responsive text-nowrap p-3">
             {{-- Tabel Preferensi --}}
             <table class="table table-striped datatable">
                 <thead>
                     <tr>
                         <th class="text-center">No</th>
                         <th class="ps-5">Action</th>
                         <th class="ps-5">Keterangan</th>
                         <th>Bobot</th>
                         <th>Kriteria 1</th>
                         <th>Kriteria 2</th>
                         <th>Dibuat Pada</th>
                     </tr>
                 </thead>
                 <tbody class="table-border-bottom-0">
                     @foreach ($preferensi as $index => $item)
                         <tr>
                             <th class="text-center" scope="row">{{ $index + 1 }}</th>
                             <td>
                                 <a class="ps-5" href="{{ route('admin-preferensi.edit', $item->id) }}">
                                     <i class='bx bx-edit crud-icon'
                                         style="font-size: 1.5em; color:green;"title="Edit"></i>
                                 </a>

                                 <button type="button" class="bg-transparent border-0" data-bs-toggle="modal"
                                     data-bs-target="#basicModal{{ $item->id }}">
                                     <i class='bx bxs-eraser' style="font-size: 1.5em; color:red;"title="Hapus"></i>
                                 </button>
                                 {{-- Modal Delete --}}
                                 <div class="modal fade" id="basicModal{{ $item->id }}" tabindex="-1"
                                     aria-hidden="true">
                                     <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h5 class="modal-title" id="exampleModalLabel1">Hapus Data
                                                     {{ $title }}</h5>
                                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                     aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">Apakah Anda Yakin Ingin Menghapus?</div>
                                             <div class="modal-footer">
                                                 <form action="{{ route('admin-preferensi.destroy', $item->id) }}"
                                                     method="POST">
                                                     @csrf
                                                     @method('DELETE')
                                                     <button type="submit" class="btn btn-danger">Hapus</button>
                                                 </form>

                                                 <button type="button" class="btn btn-outline-secondary"
                                                     data-bs-dismiss="modal">
                                                     Batal
                                                 </button>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 {{ $item->keterangan }}
                             </td>
                             <td>{{ $item->nilai }}</td>

                             @foreach ($item->kriteria()->get() as $kriteria)
                                 <td>{{ $kriteria->nama_kriteria }} </td>
                             @endforeach

                             @foreach ($item->kriteria_two()->get() as $kriteria2)
                                 <td>{{ $kriteria2->nama_kriteria }} </td>
                             @endforeach
                             <td>{{ $item->created_at->diffForHumans() }}</td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
             {{-- End Tabel Preferensi --}}

             @if ($preferensi->count())
                 <div class="card-body">
                     {{-- Tabel Matriks Perbandingan Kriteria --}}
                     <div class="row col-md-12">
                         <strong class="mt-3 fs-5 mb-2">Matriks Perbandingan Berpasangan</strong>
                         <table class="table table-striped">
                             <thead>
                                 <th>Kriteria</th>
                                 @for ($i = 0; $i < count($metoda['namaKriteria']); $i++)
                                     <th>{{ $metoda['namaKriteria'][$i] }}</th>
                                 @endfor
                             </thead>
                             <tbody>
                                 @for ($i = 0; $i < count($metoda['namaKriteria']); $i++)
                                     <tr>
                                         <th>{{ $metoda['namaKriteria'][$i] }}</th>
                                         @for ($j = 0; $j < count($metoda['namaKriteria']); $j++)
                                             <td>{{ round($metoda['comparation'][$i][$j], 3) }}</td>
                                         @endfor
                                     </tr>
                                 @endfor
                             </tbody>
                             <tfoot>
                                 <tr>
                                     <td><b>Jumlah</b></td>
                                     @for ($j = 0; $j < count($metoda['namaKriteria']); $j++)
                                         <td><b>{{ round($metoda['total'][$j], 3) }}</b></td>
                                     @endfor
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                     {{-- End Tabel Matriks Perbandingan Kriteria --}}

                     <div class="row col-md-12">

                         {{-- Tabel Matriks Nilai Kriteria --}}
                         <strong class="mt-3 fs-5 mb-2">Matriks Nilai Kriteria</strong>
                         <table class="table table-striped border-1">
                             <thead>
                                 <th>Kriteria</th>
                                 @for ($i = 0; $i < count($metoda['namaKriteria']); $i++)
                                     <th>{{ $metoda['namaKriteria'][$i] }}</th>
                                 @endfor
                                 <th>Total</th>
                                 <th>Priority Vector</th>
                                 <th>Eigen Value</th>
                             </thead>
                             <tbody>
                                 @for ($i = 0; $i < count($metoda['namaKriteria']); $i++)
                                     <tr>
                                         <th>{{ $metoda['namaKriteria'][$i] }}</th>
                                         @for ($j = 0; $j < count($metoda['namaKriteria']); $j++)
                                             <td>{{ round($metoda['normalisasi'][$i][$j], 3) }}</td>
                                         @endfor
                                         <td>
                                             {{ round($metoda['jmlbarisnormalisasi'][$i], 3) }}
                                         </td>
                                         <td>
                                             {{ round($metoda['prioritas'][$i], 3) }}
                                         </td>
                                         <td>
                                             {{ round($metoda['eigen'][$i], 3) }}
                                         </td>
                                     </tr>
                                 @endfor
                             </tbody>
                             <tfoot>
                                 <tr>
                                     <td><b>Total</b></td>
                                     <td colspan="5">&nbsp;</td>
                                     <td> <strong>{{ round($metoda['totaleigen'], 3) }}</strong> </td>
                                 </tr>
                                 <tr>
                                     <td><b>Consistency Index</b></td>
                                     <td colspan="5">&nbsp;</td>
                                     <td> <strong>{{ round($metoda['ci'], 3) }}</strong> </td>
                                 </tr>
                                 <tr>
                                     <td><b>Consistency Ratio</b></td>
                                     <td colspan="5">&nbsp;</td>
                                     <td> <strong>{{ round($metoda['cr'], 3) }}</strong> </td>
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                     {{-- End Tabel Matriks Nilai Kriteria --}}
                     <br>

                     {{-- Alert --}}
                     @if ($metoda['cr'] < 0.1)
                         <div class="alert alert-success text-center" role="alert">
                             <i class="bx bx-check"></i>
                             Nilai Consistency Ratio kurang dari 10% <br>
                             Hasil perhitungan dinyatakan Konsisten
                         </div>
                     @else
                         <div class="alert alert-danger text-center" role="alert">
                             <i class="bx bx-info-circle"></i>
                             Nilai Consistency Ratio melebihi 10% !!! <br> Mohon input kembali tabel perbandingan...
                         </div>
                     @endif
                 </div>
             @else
                 &nbsp;
             @endif

         </div>
     </div>
 @endsection
