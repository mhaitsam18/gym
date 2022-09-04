<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
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
}
