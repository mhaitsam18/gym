<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerMemberController extends Controller
{
    public function index()
    {
        $title = 'Data Member';
        return view('trainer.member.index', compact('title'));
    }
}
