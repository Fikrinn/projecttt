<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('admin.karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_karyawan' => 'required',
            'nama_karyawan' => 'required',
            'no_telp' => 'required',
        ]);

        $karyawan = new Karyawan;
        $karyawan->id_karyawan = $request->id_karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->no_telp = $request->no_telp;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(karyawan $karyawan)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('admin.karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(karyawan $karyawan)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('admin.karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, karyawan $karyawan)
    {
        $validated = $request->validate([
            'id_karyawan' => 'required',
            'nama_karyawan' => 'required',
            'no_telp' => 'required',
        ]);

        $karyawan = new Karyawan;
        $karyawan->id_karyawan = $request->id_karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->no_telp = $request->no_telp;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(karyawan $karyawan)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index');
    }
}
