<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\Kriteria;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.pertanyaan.index', [
            'title' => 'Pertanyaan',
            'active' => 'pertanyaan',
            'pertanyaan' => Pertanyaan::with(['prodi', 'kriteria'])->get()
         
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pertanyaan.create', [
            'title' => 'Pertanyaan',
            'active' => 'pertanyaan',
            'pertanyaan' => Pertanyaan::all(),
            'prodi' => Prodi::all(),
            'kriteria' => Kriteria::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_prodi' => 'required',
            'id_kriteria' => 'required',
            'pertanyaan' => 'required'
        ]);

        Pertanyaan::create($request->all());

        return redirect()->route('admin-pertanyaan.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('admin.pertanyaan.edit', [
            'title' => 'Pertanyaan',
            'active' => 'pertanyaan',
            'prodi' => Prodi::all(),
            'kriteria' => Kriteria::all(),
            'pertanyaan' => $pertanyaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pertanyaan::find($id);
        $data->update($request->all());
        return redirect()->route('admin-pertanyaan.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pertanyaan::find($id);
        $data->delete();
        return redirect()->route('admin-pertanyaan.index')->with('success', 'Data Berhasil Dihapus');
    }
}