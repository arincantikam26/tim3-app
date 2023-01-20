<?php

namespace App\Http\Controllers;

use App\Models\JurusanSekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
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
        return view('admin.sekolah.index', [
            'title' => 'Jurusan Sekolah',
            'active' => 'sekolah',
            'sekolah' => JurusanSekolah::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sekolah.create', [
            'title' => 'Jurusan Sekolah',
            'active' => 'sekolah',
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
            'nama_jurusan' => 'required'
        ]);
        JurusanSekolah::create($request->all());

        return redirect()->route('admin-sekolah.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $data = JurusanSekolah::find($id);
        return view('admin.sekolah.edit', [
            'title' => 'Jurusan Sekolah',
            'active' => 'sekolah',
            'sekolah' => $data
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
        $data = JurusanSekolah::find($id);
        $data->update($request->all());
        return redirect()->route('admin-sekolah.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = JurusanSekolah::find($id);
        $data->delete();
        return redirect()->route('admin-sekolah.index')->with('success', 'Data Berhasil Dihapus');
    }
}