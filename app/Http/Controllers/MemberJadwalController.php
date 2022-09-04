<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Presensi;
use App\Models\Trainee;
use App\Models\Waktu;
use Illuminate\Http\Request;

class MemberJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Jadwal Trainee";
        $id = auth()->user()->id;
        $trainee = Trainee::where('member_id', $id)
            ->where('expired_at', '>', date('Y-m-d H:i:s'))
            ->oldest()
            ->first();
        $data_jadwal = Jadwal::where('trainee_id', $trainee->id)->get();
        $jadwal_acc = Jadwal::where('trainee_id', $trainee->id)
            ->where('accepted_at', '!=', null)
            ->get()->count();
        $data_waktu = Waktu::all();

        $data_jadwal_trainer =
            Jadwal::where('trainer_id', $trainee->trainer_id)
            ->where('tanggal', '>', date('Y-m-d'))
            ->get();
        return view('member.trainee.jadwal', compact("title", "trainee", "data_jadwal", "data_jadwal_trainer", "data_waktu", "jadwal_acc"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'trainee_id' => 'required',
            'member_id' => 'required',
            'trainer_id' => 'required',
            'waktu_id' => 'required',
            'tanggal' => 'required'
        ]);
        $data_jadwal = Jadwal::where('trainer_id', $validateData['trainer_id'])
            ->where('tanggal', $validateData['tanggal'])
            ->where('waktu_id', $validateData['waktu_id'])->get();

        if ($data_jadwal->count() > 0) {
            return back()->with('gagal', 'Waktu Tidak tersedia / bentrok, silahkan memilih kembali jadwal yang kosong');
        } else {
            Jadwal::create($validateData);
            return back()->with('success', 'Berhasil Mengajukan Jadwal! Tunggu trainer mengkonfirmasi jadwalmu');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }

    public function terima(Jadwal $jadwal)
    {
        Jadwal::find($jadwal->id)->update(['accepted_at' => date('Y-m-d H:i:s')]);
        Presensi::create([
            'jadwal_id' => $jadwal->id,
            'user_trainer_id' => $jadwal->trainer->user_id,
            'user_member_id' => $jadwal->member_id
        ]);
        return back()->with("success", "Jadwal diterima");
    }
    public function tolak(Jadwal $jadwal)
    {
        Jadwal::find($jadwal->id)->update(['rejected_at' => date('Y-m-d H:i:s')]);
        return back()->with("success", "Jadwal ditolak");
    }
}
