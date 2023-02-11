<?php

namespace App\Http\Controllers;

use App\Metode\Hasil as MetodeHasil;
use App\Models\Prodi;
use App\Models\Pilihan;
use App\Models\Kriteria;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Models\JurusanSekolah;
use PDF;


class ProsesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pilihanProdi(Request $request)
    {
        $title = 'Dashboard';
        $active = 'user';
        $id = $request->jurusansekolah_id;
        $sekolah = JurusanSekolah::whereId($id)->first();
        $available = Pilihan::whereIdJurusanSekolah($id)->get();
        return view('users.proses.select', compact('available', 'sekolah', 'title', 'active'));
    }

    public function pertanyaan(Request $request)
    {
        $title = 'Dashboard';
        $active = 'user';
        $idProdi = $request->id_prodi;
        $prodi = Prodi::whereIn('id_prodi', $idProdi)->get();
        $kriteria = Kriteria::all();
        $pertanyaan = Pertanyaan::all();

        return view('users.proses.pertanyaan', compact('title', 'active', 'prodi', 'kriteria', 'pertanyaan'));
    }

    public function hasilPilihan(Request $request)
    {
        // return $request->all();
        // return Hasil::hasilakhir($request);

        return view('users.proses.hasil_pilihan', [
            'title' => 'Hasil',
            'active' => 'user',
            'result' => MetodeHasil::hasilakhir($request)
        ]);
    }

    public function createPDF()
    {
        // // retreive all records from db
        // $data = Kriteria::all();
        // // share data to view
        // view()->share('users.proses.cetak_hasil', $data);
        // // $pdf = PDF::loadView('pdf_view', $data);
        // // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');
    }
}