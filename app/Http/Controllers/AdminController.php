<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

use App\Models\Bodyfitt;
use App\Models\Absensi;
use App\Models\Iuran;
use App\Models\Ukur;
use App\Models\Assessment;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DateTime;
use App\Models\Langganan;
use App\Models\Membership;
use App\Models\Paket;
use App\Models\Trainee;
use App\Models\Trainer;

class AdminController extends Controller
{




  public function user()
  {
    $data = user::all();
    $id = Auth::user()->id;
    $usertype = Auth::user()->usertype;
    $data2 = User::where('id', $id)->value('name');
    $foto = User::where('id', $id)->value('profile_photo_path');
    return view("admin.users", compact("data", "usertype", "data2", "foto"));
  }

  public function viewadminjl()
  {
    $id = Auth::user()->id;
    $data = Assessment::where('user_id', $id)->get();
    $usertype = Auth::user()->usertype;
    $data2 = User::where('id', $id)->value('name');
    $id = Auth::user()->id;
    $foto = User::where('id', $id)->value('profile_photo_path');
    return view('admin.adminjl', compact("data2", "data", "usertype", 'foto'));
  }

  public function adminiuran()
  {
    $id = Auth::user()->id;
    $data = Event::where('user_id', $id)->get();
    $usertype = Auth::user()->usertype;
    $data2 = User::where('id', $id)->value('name');
    // $data2 = User::where('usertype',2)->get();
    $user_id = Auth::id();
    $date = date('Y-m-d', time());
    $id = Auth::user()->id;
    $foto = User::where('id', $id)->value('profile_photo_path');
    return view('admin.adminiuran', compact("data", "date", "usertype", "user_id", "data2", 'foto'));
  }


  public function adminabsen()
  {
    $id = Auth::user()->id;
    $data3 = User::where('id', $id)->get();
    $id = Auth::user()->id;
    $data2 = User::where('id', $id)->value('name');
    $usertype = Auth::user()->usertype;
    $date = date('Y-m-d', time());
    $data = Absensi::where('keterangan', null)->get();
    $id = Auth::user()->id;
    $foto = User::where('id', $id)->value('profile_photo_path');
    return view('admin.absen', compact("data", "data2", "date", "data3", "usertype", 'foto'));
  }



  public function bayar($id)
  {
    $data = User::find($id);
    $data2 = new Iuran;
    $date = date('Y-m-d', time());

    // dd($data->name);

    $data2->nama = $data->name;
    $data2->tanggal = $date;
    $data2->nominal = 5000;
    $data2->keterangan = "bayar";
    $data2->save();

    return redirect()->back();
  }

  public function tidakbayar($id)
  {
    $data = User::find($id);
    $data2 = new Iuran;
    $date = date('Y-m-d', time());

    // dd($data->name);

    $data2->nama = $data->name;
    $data2->tanggal = $date;
    $data2->nominal = 0;
    $data2->keterangan = "tidak bayar";
    $data2->save();

    return redirect()->back();
  }

  public function hadir($id)
  {
    $data = User::find($id);
    $data2 = new Absensi;
    $date = date('Y-m-d', time());

    // dd($data->name);

    $data2->nama = $data->name;
    $data2->tanggal = $date;
    $data2->keterangan = 'hadir';
    $data2->save();

    return redirect()->back();
  }

  public function alfa($id)
  {
    $data = User::find($id);
    $data2 = new Absensi;
    $date = date('Y-m-d', time());

    // dd($data->name);

    $data2->nama = $data->name;
    $data2->tanggal = $date;
    $data2->keterangan = 'alfa';
    $data2->save();

    return redirect()->back();
  }

  public function izin($id)
  {
    $data = User::find($id);
    $data2 = new Absensi;
    $date = date('Y-m-d', time());

    // dd($data->name);

    $data2->nama = $data->name;
    $data2->tanggal = $date;
    $data2->keterangan = 'izin';
    $data2->save();

    return redirect()->back();
  }

  public function back()
  {
    return redirect('adminiuran');
  }

  public function dataiuran(Request $request)
  {
    $id = Auth::user()->id;
    $data = User::find($id);


    $image = $request->gambar;

    $imagename = time() . '.' . $image->getClientOriginalExtension();

    $request->gambar->move('pp', $imagename);

    $data->profile_photo_path   = $imagename;
    $data->username = $request->username;
    $data->jk_user = $request->jk;
    $data->tgl_lahir = $request->tgl_lahir;
    $data->alamat = $request->alamat;
    $data->nomer_hp = $request->nomer_hp;
    $data->save();
    $kkk = $request->tgl_lahir;
    // dd($kkk);
    return redirect()->back();
  }

  public function dataabsen()
  {
    $id = Auth::user()->name;
    $data = Absensi::where('nama', $id)->get();
    $usertype = Auth::user()->usertype;
    $data2 = User::where('id', $id)->value('name');
    $id = Auth::user()->id;
    $foto = User::where('id', $id)->value('profile_photo_path');
    return view('admin.dataabsen', compact('data', 'data2', 'usertype', 'foto'));
  }


  public function index(Request $request)
  {
    // on page load this ajax code block will be run
    if ($request->ajax()) {

      $id = Auth::user()->id;
      $data = Event::where('user_id', $id)->get();

      return response()->json($data);
    }

    return view('admin.fullcalender');
  }

  /**
   * This method is to handle event ajax operation
   *
   * @return response()
   */
  public function ajax(Request $request)
  {
    $user_id = Auth::id();
    switch ($request->type) {

        // For add event
      case 'add':
        $event = Event::create([
          'user_id' => $user_id,
          'title' => $request->title,
          'start' => $request->start,
          'end' => $request->end,
        ]);
        return response()->json($event);
        break;

        // For update event        
      case 'update':
        $event = Event::find($request->id)->update([
          'user_id' => $user_id,
          'title' => $request->title,
          'start' => $request->start,
          'end' => $request->end,
        ]);

        return response()->json($event);
        break;

        // For delete event    
      case 'delete':
        $event = Event::find($request->id)->delete();

        return response()->json($event);
        break;

      default:
        break;
    }
  }

  public function assessment(Request $request)
  {
    $data = new Assessment;
    $user_id = Auth::id();
    $data->user_id = $user_id;
    $data->sdanr =  $request->sdanr;
    $data->sr =  $request->sr;
    $data->plank =  $request->plank;
    $data->pushup =  $request->pushup;
    $data->spu =  $request->spu;
    $data->squat =  $request->squat;
    $data->curlup =  $request->curlup;
    $data->keterangan = $request->eval;

    $data->save();
    // dd($data);
    return redirect()->back();
  }

  public function ukur()
  {
    $id = Auth::user()->id;
    $usertype = Auth::user()->usertype;
    $data2 = User::where('id', $id)->value('name');
    $data = Ukur::where('user_id', $id)->get();
    $id = Auth::user()->id;
    $foto = User::where('id', $id)->value('profile_photo_path');
    return view('admin.ukur', compact('data2', 'data', 'usertype', 'foto'));
  }

  public function fitt()
  {
    $id = Auth::user()->id;
    $usertype = Auth::user()->usertype;
    $data2 = User::where('id', $id)->value('name');
    $data = Bodyfitt::where('user_id', $id)->get();
    $id = Auth::user()->id;
    $foto = User::where('id', $id)->value('profile_photo_path');
    return view('admin.fit', compact('data2', 'data', 'usertype', 'foto'));
  }

  public function uploadukur(Request $request)
  {
    $data = new Ukur;
    $id = Auth::user()->id;
    $data->user_id = $id;
    $data->bd = $request->bd;
    $data->b = $request->b;
    $data->vf = $request->vf;
    $data->cd = $request->cd;
    $data->bmi = $request->bmi;
    $data->ma = $request->ma;
    $data->sf = $request->sf;
    $data->a = $request->a;
    $data->l = $request->l;
    $data->t = $request->t;
    $data->c = $request->c;
    $data->w = $request->w;
    $data->h = $request->h;
    $data->th = $request->th;
    $data->calf = $request->calf;
    $data->arm = $request->arm;
    $data->fa = $request->fa;


    $data->save();

    return redirect()->back();
  }


  public function uploadfit(Request $request)
  {
    $data = new Bodyfitt();
    $id = Auth::user()->id;
    $data->user_id = $id;
    $data->kgs = $request->kgs;
    $data->rep = $request->rep;

    $data->save();

    return redirect()->back();
  }

  public function member()
  {
    $data = Auth::user();
    $data2 = User::where('id', $data)->value('name');
    $usertype = Auth::user()->usertype;
    $id = auth()->user()->id;
    $foto = User::where('id', $id)->value('profile_photo_path');
    $data_paket = Paket::all();
    $expired_at = date('Y-m-d H:i:s', strtotime('+1 month', strtotime(date('Y-m-d H:i:s'))));

    $langganan = Langganan::where('member_id', $id)
      ->where('expired_at', '>', date('Y-m-d H:i:s'))
      ->latest()
      ->first();

    return view('admin.member', compact('usertype', 'data2', 'data', 'foto', 'data_paket', 'expired_at', 'langganan'));
  }

  public function trainer()
  {
    $data = Auth::user();
    $data2 = User::where('id', $data)->value('name');
    $usertype = Auth::user()->usertype;
    $id = Auth::user()->id;
    $foto = User::where('id', $id)->value('profile_photo_path');
    $data_trainer = Trainer::all();
    $expired_at = date('Y-m-d H:i:s', strtotime('+1 month', strtotime(date('Y-m-d H:i:s'))));

    $trainee = Trainee::where('member_id', $id)
      ->where('expired_at', '>', date('Y-m-d H:i:s'))
      ->latest()
      ->first();
    return view('admin.trainer', compact('usertype', 'data2', 'data', 'foto', 'data_trainer', 'expired_at', 'trainee'));
  }

  public function uploadmember1(Request $request, $id)
  {

    $data = User::find($id);


    $image = $request->foto;

    $imagename = time() . '.' . $image->getClientOriginalExtension();

    $request->foto->move('buktitf', $imagename);

    $data->bukti_tf = $imagename;
    $data->usertype = 2;

    $a = date('Y-m-d', time());

    $date = date_create("a");
    $date->modify('+1 month');
    //  dd($date);
    $data->member_sampai = $date;

    $data->save();

    return redirect()->back();
  }

  public function uploadmember2(Request $request, $id)
  {

    $data = User::find($id);


    $image = $request->foto;

    $imagename = time() . '.' . $image->getClientOriginalExtension();

    $request->foto->move('buktitf', $imagename);

    $data->bukti_tf = $imagename;
    $data->usertype = 2;

    $a = date('Y-m-d', time());

    $date = date_create("a");
    $date->modify('+2 month');
    //  dd($date);
    $data->member_sampai = $date;

    $data->save();

    return redirect()->back();
  }

  public function uploadmember3(Request $request, $id)
  {

    $data = User::find($id);


    $image = $request->foto;

    $imagename = time() . '.' . $image->getClientOriginalExtension();

    $request->foto->move('buktitf', $imagename);

    $data->bukti_tf = $imagename;
    $data->usertype = 2;

    $a = date('Y-m-d', time());

    $date = date_create("a");
    $date->modify('+3 month');
    //  dd($date);
    $data->member_sampai = $date;

    $data->save();

    return redirect()->back();
  }

  public function uploadtrainer1(Request $request, $id)
  {

    $data = User::find($id);

    $data->trainer = "Juani Ft";


    // dd($data);


    $data->save();

    return redirect()->back();
  }

  public function uploadtrainer2(Request $request, $id)
  {

    $data = User::find($id);

    $data->trainer = "Kenzi";


    // dd($data);


    $data->save();

    return redirect()->back();
  }

  public function uploadtrainer3(Request $request, $id)
  {

    $data = User::find($id);

    $data->trainer = "Sumarto";


    // dd($data);


    $data->save();

    return redirect()->back();
  }

  public function editprofile()
  {
    $id = Auth::user()->id;
    $data2 = User::where('id', $id)->value('name');
    $foto = User::where('id', $id)->value('profile_photo_path');
    $usertype = Auth::user()->usertype;
    $data = User::where('id', $id)->first();
    return view('admin.editprofil', compact('data2', 'usertype', 'data', 'foto'));
  }
}
