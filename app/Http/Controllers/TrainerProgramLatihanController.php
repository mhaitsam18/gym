<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerProgramLatihanController extends Controller
{
    public function index()
    {
        $title = 'Program Latihan';
        return view('trainer.program-latihan.index', compact('title'));
    }
}
