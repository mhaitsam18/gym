<?php

namespace App\Http\Controllers;

use App\Models\Latihan;

use Illuminate\Http\Request;

class PelatihController extends Controller
{

    public function homepelatih() {
        return view('pelatih.pelatihhome');
    }
    
    public function viewjadwallatihan (){
        $data=Latihan::all();
        return View('pelatih.pelatihjl',compact("data"));
    }

    public function uploadjadwal(Request $request)
    {
        $data=new Latihan;
        $data->nama_latihan=$request->nama_latihan;
        $data->tanggal_latihan=$request->tanggal_latihan;
        $data->tempat_latihan=$request->tempat_latihan;
        $data->waktu_latihan=$request->waktu_latihan;
        $data->kategori_latihan=$request->kategori_latihan;

        $data->save();

        return redirect()->back();
    }
}
