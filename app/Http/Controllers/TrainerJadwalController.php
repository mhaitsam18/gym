<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TrainerJadwalController extends Controller
{
    public function index()
    {
        $title = 'Jadwal Trainer';
        return view('trainer.jadwal.index', compact('title'));
    }
}
