<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('admin.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transaksi.create');
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
            'id_trans' => 'required',
            'tanggal' => 'required',
            'id_karyawan' => 'required',
            'id_pelanggan' => 'required',
            'berat' => 'required',
            'id_jenis' => 'required',
            'tarif' => 'required',
            'total' => 'required',
            'note' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->id_trans = $request->id_trans;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->id_karyawan = $request->id_karyawan;
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->berat = $request->berat;
        $transaksi->id_jenis= $request->id_jenis;
        $transaksi->tarif = $request->tarif;
        $transaksi->total = $request->total;
        $transaksi->note = $request->note;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        $validated = $request->validate([
            'id_trans' => 'required',
            'tanggal' => 'required',
            'id_karyawan' => 'required',
            'id_pelanggan' => 'required',
            'berat' => 'required',
            'id_jenis' => 'required',
            'tarif' => 'required',
            'total' => 'required',
            'note' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->id_trans = $request->id_trans;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->id_karyawan = $request->id_karyawan;
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->berat = $request->berat;
        $transaksi->id_jenis= $request->id_jenis;
        $transaksi->tarif = $request->tarif;
        $transaksi->total = $request->total;
        $transaksi->note = $request->note;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
