<?php

namespace App\Http\Controllers;

use App\Models\DetailProgramLatihan;
use Illuminate\Http\Request;

class TrainerDetailProgramLatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'program_latihan_id' => 'required',
            'nama' => 'required',
            'jumlah' => '',
        ]);

        DetailProgramLatihan::create($validateData);
        return back()->with('success', 'Program Latihan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailProgramLatihan  $detailProgramLatihan
     * @return \Illuminate\Http\Response
     */
    public function show(DetailProgramLatihan $detailProgramLatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailProgramLatihan  $detailProgramLatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailProgramLatihan $detailProgramLatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailProgramLatihan  $detailProgramLatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailProgramLatihan $detailProgramLatihan)
    {
        $detailProgramLatihan->update([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah
        ]);
        return back()->with('success', 'Detail Program Latihan berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailProgramLatihan  $detailProgramLatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailProgramLatihan $detailProgramLatihan)
    {
        DetailProgramLatihan::destroy($detailProgramLatihan->id);
        back()->with('success', 'Detail Program Latihan telah dihapus');
    }
}
