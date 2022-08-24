<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerBodyMassIndexController extends Controller
{
    public function index()
    {
        $title = 'Body Mass Index';
        return view('trainer.body-mass-index.index', compact('title'));
    }
}
