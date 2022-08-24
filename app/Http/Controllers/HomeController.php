<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\Foodchef;

use App\Models\Cart;
use App\Models\User;

use App\Models\Locations;


class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            return redirect('redirects');
        } else

            return view("home");
    }




    public function redirects(Request $request)
    {
        if (!auth()->user()) {
            return redirect('/login');
        }
        // $data2 = foodchef::all();

        $usertype = Auth::user()->usertype;
        $role_id = Auth::user()->role_id;


        $id = Auth::user()->id;
        $data2 = User::where('id', $id)->value('name');

        $foto = User::where('id', $id)->value('profile_photo_path');
        switch ($role_id) {
            case 1:
                return view('admin.adminhome', compact('data2', 'usertype', 'foto'));
                break;
            case 2:
                return view('trainer.home.index', compact('data2', 'usertype', 'foto'));
                break;

            default:
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login');
                break;
        }
    }
}
