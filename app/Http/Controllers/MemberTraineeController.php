<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Http\Request;

class MemberTraineeController extends Controller
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
            'trainer_id' => 'required',
            'expired_at' => 'required',
            'is_subscribe' => '',
            'is_paid' => 'image|file|max:10000'
        ]);

        if ($request->file('is_paid')) {
            $validateData['is_paid'] = $request->file('is_paid')->store('bukti-transfer');
        }
        Trainee::create($validateData);
        return back()->with('success', 'Berhasil berlanggan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function show(Trainee $trainee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainee $trainee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainee $trainee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainee $trainee)
    {
    }

    public function berhentiBerlanggan(Trainee $trainee)
    {
        Trainee::find($trainee->id)->update(['is_subscribe' => 0]);
        return back();
    }

    // public function jadwal()
    // {
    //     $title = "Jadwal Trainee";
    //     $id = auth()->user()->id;
    //     $trainee = Trainee::where('member_id', $id)
    //         ->where('expired_at', '>', date('Y-m-d H:i:s'))
    //         ->oldest()
    //         ->first();
    //     $data_jadwal = Jadwal::where('trainee_id', $trainee->id)
    //         ->get();

    //     $data_jadwal_trainer =
    //         Jadwal::where('trainer_id', $trainee->trainer_id)
    //         ->where('tanggal', '>', date('Y-m-d'))
    //         ->get();
    //     return view('member.trainee.jadwal', compact("title", "trainee", "data_jadwal", "data_jadwal_trainer"));
    // }
}
