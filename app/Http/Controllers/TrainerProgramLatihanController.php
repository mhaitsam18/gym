<?php

namespace App\Http\Controllers;

use App\Models\ProgramLatihan;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerProgramLatihanController extends Controller
{
    public function index()
    {
        $title = 'Program Latihan';

        $trainer = Trainer::where('user_id', auth()->user()->id)->first();
        $data_program_latihan = ProgramLatihan::where('trainer_id', $trainer->id)->get();
        return view('trainer.program-latihan.index', compact('title', 'data_program_latihan', 'trainer'));
    }

    public function create()
    {
    }

    public function show(ProgramLatihan $program_latihan)
    {
    }

    public function edit(ProgramLatihan $program_latihan)
    {
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'trainer_id' => 'required',
            'nama' => 'required'
        ]);

        ProgramLatihan::create($validateData);
        return back()->with('success', 'Program Latihan berhasil ditambahkan');
    }

    public function update(Request $request, ProgramLatihan $program_latihan)
    {
        $program_latihan->update(['nama' => $request->nama]);
        return back()->with('success', 'Program Latihan berhasil disimpan');
    }

    public function destroy(ProgramLatihan $program_latihan)
    {
        ProgramLatihan::destroy($program_latihan->id);
        back()->with('success', 'Program Latihan telah dihapus');
    }
}
