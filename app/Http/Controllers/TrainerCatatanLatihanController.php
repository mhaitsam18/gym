<?php

namespace App\Http\Controllers;

use App\Models\CatatanLatihan;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class TrainerCatatanLatihanController extends Controller
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

    public function jadwal(Jadwal $jadwal)
    {
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
            'jadwal_id' => 'required',
            'program_latihan_id' => '',
            'tinggi_badan' => '',
            'berat_badan' => '',
            'body_mass_index' => '',
            'dada' => '',
            'pinggang' => '',
            'pinggul_atas' => '',
            'pinggul_bawah' => '',
            'body_measurement' => '',
            'catatan' => '',
        ]);

        CatatanLatihan::create($validateData);
        return redirect('/trainer/catatan-latihan/jadwal/' . $validateData['jadwal_id'])->with('success', 'Catatan Latihan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatatanLatihan  $catatanLatihan
     * @return \Illuminate\Http\Response
     */
    public function show(CatatanLatihan $catatanLatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatatanLatihan  $catatanLatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(CatatanLatihan $catatanLatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatatanLatihan  $catatanLatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatatanLatihan $catatanLatihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatatanLatihan  $catatanLatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatatanLatihan $catatanLatihan)
    {
        //
    }
}
