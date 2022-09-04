<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;

class TrainerAbsensiController extends Controller
{
    public function index()
    {
        $title = 'Absensi / Presensi';
        $data_presensi = Presensi::where('user_trainer_id', auth()->user()->id)->get();
        return view('trainer.absensi.index', compact('title', 'data_presensi'));
    }
}
