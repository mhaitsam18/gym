<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Presensi;
use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Waktu;

class TrainerJadwalController extends Controller
{
    public function index()
    {
        $title = "Jadwal Pelatihan";
        $id = auth()->user()->id;
        $trainer = Trainer::where('user_id', $id)->first();

        $data_jadwal = Jadwal::where('trainer_id', $trainer->id)->where('tanggal', '>', date('Y-m-d'))->get();
        $data_waktu = Waktu::all();

        return view('trainer.jadwal.index', compact("title", "trainer", "data_jadwal", "data_waktu"));
    }

    public function terima(Jadwal $jadwal)
    {
        Jadwal::find($jadwal->id)->update(['accepted_at' => date('Y-m-d H:i:s')]);
        Presensi::create([
            'jadwal_id' => $jadwal->id,
            'user_trainer_id' => auth()->user()->id,
            'user_member_id' => $jadwal->member_id
        ]);
        return back()->with("success", "Jadwal diterima");
    }
    public function tolak(Jadwal $jadwal)
    {
        Jadwal::find($jadwal->id)->update(['rejected_at' => date('Y-m-d H:i:s')]);
        return back()->with("success", "Jadwal ditolak");
    }

    public function saranJadwal(Request $request, Jadwal $jadwal)
    {

        $data_jadwal = Jadwal::where('trainer_id', $request->trainer_id)
            ->where('tanggal', $request->tanggal)
            ->where('waktu_id', $request->waktu_id)->get();

        if ($data_jadwal->count() > 0) {
            return back()->with('gagal', 'Waktu Tidak tersedia / bentrok, silahkan memilih kembali jadwal yang kosong');
        } else {
            $jadwal->update([
                'tanggal' => $request->tanggal,
                'waktu_id' => $request->waktu_id,
                'is_saran' => 1
            ]);
            return back()->with("success", "Saran Jadwal Terkirim");
        }
    }
}
