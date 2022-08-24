<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerAssessmentController extends Controller
{
    public function index()
    {
        $title = 'Assessment';
        return view('trainer.assessment.index', compact('title'));
    }
}
