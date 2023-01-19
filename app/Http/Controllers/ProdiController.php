<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prodi.create', [
            'title' => 'Program Studi',
            'active' => 'prodi',
            'jurusan' => Jurusan::all(),
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
        // dd($request);
        $request->validate([
            'nama_prodi' => 'required',
            'jurusan_id' => 'required'
        ]);

        Prodi::create($request->all());

        return redirect()->route('admin-prodi')->with('success', 'Data Berhasil Ditambahkan');
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
    public function edit($id_prodi)
    {
        $prodi = Prodi::find($id_prodi);
        return view('admin.prodi.edit', [
            'title' => 'Program Studi',
            'active' => 'prodi',
            'jurusan' => Jurusan::all(),
            'prodi' => $prodi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_prodi)
    {
        $data = Prodi::find($id_prodi);
        $data->update($request->all());
        return redirect()->route('admin-prodi')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_prodi)
    {
        $data = Prodi::find($id_prodi);
        $data->delete();
        return redirect()->route('admin-prodi')->with('success', 'Data Berhasil Dihapus');
    }
}