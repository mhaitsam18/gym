<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AtlitController;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\PelatihController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\MapLocation;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Auth::routes();


Route::get("/", [HomeController::class, "index"])->middleware('guest');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:web'])->group(function () {

    Route::get("/redirects", [HomeController::class, "redirects"]);
    Route::get("/users", [AdminController::class, "user"]);
    Route::get('/editprofile', [UserController::class, 'editprofile']);

    Route::middleware(['auth.member'])->group(function () {
        Route::get('event', [AdminController::class, 'index']);
        Route::get('ukur', [AdminController::class, 'ukur']);
        Route::get('member', [AdminController::class, 'member']);
        Route::get('trainer', [AdminController::class, 'trainer']);
        Route::get('fitt', [AdminController::class, 'fitt']);

        Route::post('/uploadtrainer1/{id}', [AdminController::class, 'uploadtrainer1']);
        Route::post('/uploadtrainer2/{id}', [AdminController::class, 'uploadtrainer2']);
        Route::post('/uploadtrainer3/{id}', [AdminController::class, 'uploadtrainer3']);

        Route::get('back', [AdminController::class, 'back']);


        Route::get('nambah_assessment', [AdminController::class, 'assessment']);

        Route::get('/adminjl', [AdminController::class, 'viewadminjl']);

        Route::get('/adminiuran', [AdminController::class, 'adminiuran']);
        Route::get('/absen', [AdminController::class, 'adminabsen']);
        Route::post('/dataiuran', [AdminController::class, 'dataiuran']);

        Route::get('/dataabsen', [AdminController::class, 'dataabsen']);

        // Route::get('/shiftdata', [AdminController::class, 'shiftdata']); GAK ADA

        Route::get('/bayar/{id}', [AdminController::class, 'bayar']);
        Route::get('/tidakbayar/{id}', [AdminController::class, 'tidakbayar']);

        Route::get('/hadir/{id}', [AdminController::class, 'hadir']);
        Route::get('/alfa/{id}', [AdminController::class, 'alfa']);
        Route::get('/izin/{id}', [AdminController::class, 'izin']);
    });

    Route::middleware(['auth.trainer'])->group(function () {
        Route::get('/pelatihjl', [PelatihController::class, 'viewjadwallatihan']);
        Route::post('/uploadjadwal', [PelatihController::class, 'uploadjadwal']);
        Route::get('/homepelatih', [PelatihController::class, 'homepelatih']);
    });
});

Route::post('eventAjax', [AdminController::class, 'ajax']);


Route::post('/uploadukur', [AdminController::class, 'uploadukur']);

Route::post('/uploadfit', [AdminController::class, 'uploadfit']);


Route::post('/uploadmember1/{id}', [AdminController::class, 'uploadmember1']);

Route::post('/uploadmember2/{id}', [AdminController::class, 'uploadmember2']);

Route::post('/uploadmember3/{id}', [AdminController::class, 'uploadmember3']);










// Route::get('/atlitjl', [AtlitController::class, 'atlitjl']); KOSONG
// Route::get('/iuran', [AtlitController::class, 'iuran']); KOSONG
// Route::get('/memberabsen', [MemberController::class, 'memberabsen']); KOSONG
