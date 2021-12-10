<?php

namespace App\Http\Controllers;

use App\Models\barangMasuk;
use Illuminate\Http\Request;

class barangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barangMasuk::all();
        return view('bMasuk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bMasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk = new barangMasuk;
        $masuk->kode = $request->kode;
        $masuk->nama = $request->nama;
        $masuk->jumlah = $request->jumlah;
        $masuk->tanggal = $request->tanggal;

        $masuk->save();
        return redirect('bMasuk');
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
        $masuk = barangMasuk::find($id);
        return view('bMasuk.edit', compact('masuk'));
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
        $masuk = barangMasuk::find($id);
        $masuk->nama = $request->nama;
        $masuk->jumlah = $request->jumlah;
        $masuk->tanggal = $request->tanggal;
        $masuk->save();
        return redirect('bMasuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masuk = barangMasuk::find($id);
        $masuk->delete();
        return redirect('bMasuk');
    }
}
