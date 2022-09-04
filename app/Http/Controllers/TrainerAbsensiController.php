<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use App\Models\ProgramLatihan;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerAbsensiController extends Controller
{
    public function index()
    {
        $title = 'Absensi / Presensi';
        $data_presensi = Presensi::where('user_trainer_id', auth()->user()->id)->get();
        $trainer = Trainer::where('user_id', auth()->user()->id)->first();
        $data_program_latihan = ProgramLatihan::where('trainer_id', $trainer->id)->get();
        return view('trainer.absensi.index', compact('title', 'data_presensi', 'data_program_latihan'));
    }
}
