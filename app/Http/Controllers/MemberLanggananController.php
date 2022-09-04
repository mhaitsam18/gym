<?php

namespace App\Http\Controllers;

use App\Models\Langganan;
use Illuminate\Http\Request;

class MemberLanggananController extends Controller
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
            'member_id' => 'required',
            'paket_id' => 'required',
            'expired_at' => 'required',
            'is_subscribe' => '',
            'is_paid' => 'image|file|max:10000'
        ]);

        if ($request->file('is_paid')) {
            // $image = $request->is_paid;

            // $imagename = time() . '.' . $image->getClientOriginalExtension();

            // $request->is_paid->move('bukti-transfer', $imagename);

            // $validateData['is_paid'] = 'bukti-transfer/' . $imagename;

            $validateData['is_paid'] = $request->file('is_paid')->store('bukti-transfer');
        }
        Langganan::create($validateData);
        return back()->with('success', 'Berhasil berlanggan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Langganan  $langganan
     * @return \Illuminate\Http\Response
     */
    public function show(Langganan $langganan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Langganan  $langganan
     * @return \Illuminate\Http\Response
     */
    public function edit(Langganan $langganan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Langganan  $langganan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Langganan $langganan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Langganan  $langganan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Langganan $langganan)
    {
        //
    }

    public function berhentiBerlanggan(Langganan $langganan)
    {
        Langganan::find($langganan->id)->update(['is_subscribe' => 0]);
        return back();
    }
}
