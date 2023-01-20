<?php

namespace App\Http\Controllers;

use App\Models\Preferensi;
use Illuminate\Http\Request;

class PreferensiController extends Controller
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
        return view('admin.preferensi.index', [
            'title' => 'Preferensi',
            'preferensi' => Preferensi::all(),
            'active' => 'preferensi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.preferensi.create', [
            'title' => 'Preferensi',
            'active' => 'preferensi',
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
            'keterangan' => 'required|min:3',
            'nilai' => 'required'
        ]);
        Preferensi::create($request->all());
        return redirect()->route('admin-preferensi')->with('success', 'Data Berhasil Ditambahkan');
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
        $data = Preferensi::find($id);
        return view('admin.preferensi.edit', [
            'title' => 'Preferensi',
            'active' => 'preferensi',
            'preferensi' => $data
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
        $data = Preferensi::find($id);
        $data->update($request->all());
        return redirect()->route('admin-preferensi')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Preferensi::find($id);
        $data->delete();
        return redirect()->route('admin-preferensi')->with('success', 'Data Berhasil Dihapus');
    }
}