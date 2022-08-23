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




    public function redirects()
    {


        $data2 = foodchef::all();

        $usertype = Auth::user()->usertype;


        $id = Auth::user()->id;
        // dd($usertype);
        $data2 = User::where('id', $id)->value('name');

        $foto = User::where('id', $id)->value('profile_photo_path');
        return view('admin.adminhome', compact('data2', 'usertype','foto'));
    }
}
