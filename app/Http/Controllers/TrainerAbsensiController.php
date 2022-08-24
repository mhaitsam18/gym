<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerAbsensiController extends Controller
{
    public function index()
    {
        $title = 'Absensi';
        return view('trainer.absensi.index', compact('title'));
    }
}
