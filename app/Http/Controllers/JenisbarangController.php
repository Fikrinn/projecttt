<?php

namespace App\Http\Controllers;

use App\Models\jenisbarang;
use Illuminate\Http\Request;

class JenisbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jb = Jenisbarang::all();
        return view('admin.jenisbarang.index', compact('jb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenisbarang.create');
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
            'id_jenis' => 'required',
            'nama_barang' => 'required',
            'tarif' => 'required',
        ]);

        $jb = new Jenisbarang;
        $jb->id_jenis = $request->id_jenis;
        $jb->nama_barang = $request->nama_barang;
        $jb->tarif = $request->tarif;
        $jb->save();
        return redirect()->route('jenisbarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenisbarang  $jenisbarang
     * @return \Illuminate\Http\Response
     */
    public function show(jenisbarang $jenisbarang)
    {
        $jb = Jenisbarang::findOrFail($id);
        return view('admin.jenisbarang.show', compact('jb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenisbarang  $jenisbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(jenisbarang $jenisbarang)
    {
        $jb = Jenisbarang::findOrFail($id);
        return view('admin.jenisbarang.edit', compact('jb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jenisbarang  $jenisbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenisbarang $jenisbarang)
    {
        $validated = $request->validate([
            'id_jenis' => 'required',
            'nama_barang' => 'required',
            'tarif' => 'required',
        ]);

        $jb = Jenisbarang::findOrFail($id);
        $jb->id_jenis = $request->id_jenis;
        $jb->nama_barang = $request->nama_barang;
        $jb->tarif = $request->tarif;
        $jb->save();
        return redirect()->route('jenisbarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenisbarang  $jenisbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenisbarang $jenisbarang)
    {
        $jb = Jenisbarang::findOrFail($id);
        $jb->delete();
        return redirect()->route('jenisbarang.index');
    }
}
