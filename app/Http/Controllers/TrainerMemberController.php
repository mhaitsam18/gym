<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use App\Models\ProgramLatihan;
use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerMemberController extends Controller
{
    public function index()
    {
        $title = 'Data Member';
        return view('trainer.member.index', compact('title'));
    }

    public function trainee()
    {
        $title = 'Data Trainee';
        $id = auth()->user()->id;
        $trainer = Trainer::where('user_id', $id)->first();
        $data_trainee = Trainee::where('trainer_id', $trainer->id)
            ->where('expired_at', '>', date('Y-m-d H:i:s'))
            ->get();
        return view('trainer.member.trainee', compact('title', 'data_trainee'));
    }

    public function historiLatihan(Request $request)
    {
        $title = 'Histori Latihan';
        $data_histori = Presensi::where('user_member_id', $request->member_id)
            ->where('user_trainer_id', auth()->user()->id)
            ->get();
        return view('trainer.member.histori-latihan', compact('title', 'data_histori'));
    }
}
