<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerBodyMeasurementController extends Controller
{
    public function index()
    {
        $title = 'Body Measurement';
        return view('trainer.body-measurement.index', compact('title'));
    }
}
