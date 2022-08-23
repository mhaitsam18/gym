<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Latihan;
use App\Models\Iuran;
use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function atlitjl (){
        $data=Latihan::all();
        return View('atlit.atlitjl',compact("data"));
    }

    public function iuran(){
        $user= Auth::user()->name;
        $data= Iuran::where('nama',$user)->get();
        return View('atlit.atlitiuran',compact("data"));
    }

    public function memberabsen(){
        $user= Auth::user()->name;
        $data= Absensi::where('nama',$user)->get();
        return View('member.memberabsen',compact("data")); 
    }

    public function upte(){
        $user= Auth::user()->name;
        $data= Absensi::where('nama',$user)->get();
        return View('member.memberabsen',compact("data")); 
    }
}
