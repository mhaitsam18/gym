<?php

namespace App\Http\Controllers;

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
}
