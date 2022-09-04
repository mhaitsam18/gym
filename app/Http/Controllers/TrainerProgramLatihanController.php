<?php

namespace App\Http\Controllers;

use App\Models\DetailProgramLatihan;
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

    public function show(ProgramLatihan $programLatihan)
    {
        $title = 'Detail Program Latihan: ' . $programLatihan->nama;

        $data_detail_program_latihan = DetailProgramLatihan::where('program_latihan_id', $programLatihan->id)->get();
        return view('trainer.program-latihan.show', compact('title', 'programLatihan', 'data_detail_program_latihan'));
    }

    public function edit(ProgramLatihan $programLatihan)
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

    public function update(Request $request, ProgramLatihan $programLatihan)
    {
        $programLatihan->update(['nama' => $request->nama]);
        return back()->with('success', 'Program Latihan berhasil disimpan');
    }

    public function destroy(ProgramLatihan $programLatihan)
    {
        ProgramLatihan::destroy($programLatihan->id);
        back()->with('success', 'Program Latihan telah dihapus');
    }
}
