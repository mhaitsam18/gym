<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\PelatihController;



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


Route::get('event', [AdminController::class, 'index']);

Route::get('ukur', [AdminController::class, 'ukur']);

Route::get('fitt', [AdminController::class, 'fitt']);


Route::get('member', [AdminController::class, 'member']);

Route::get('trainer', [AdminController::class, 'trainer']);

Route::post('/uploadtrainer1/{id}', [AdminController::class, 'uploadtrainer1']);

Route::post('/uploadtrainer2/{id}', [AdminController::class, 'uploadtrainer2']);

Route::post('/uploadtrainer3/{id}', [AdminController::class, 'uploadtrainer3']);


Route::get('back', [AdminController::class, 'back']);

Route::post('eventAjax', [AdminController::class, 'ajax']);

Route::get('nambah_assessment', [AdminController::class, 'assessment']);

Route::post('/uploadukur', [AdminController::class, 'uploadukur']);

Route::post('/uploadfit', [AdminController::class, 'uploadfit']);


Route::post('/uploadmember1/{id}', [AdminController::class, 'uploadmember1']);

Route::post('/uploadmember2/{id}', [AdminController::class, 'uploadmember2']);

Route::post('/uploadmember3/{id}', [AdminController::class, 'uploadmember3']);


Route::get("/", [HomeController::class, "index"]);


Route::get("/redirects", [HomeController::class, "redirects"]);



Route::get("/users", [AdminController::class, "user"]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/pelatihjl', [PelatihController::class, 'viewjadwallatihan']);
Route::post('/uploadjadwal', [PelatihController::class, 'uploadjadwal']);
Route::get('/homepelatih', [PelatihController::class, 'homepelatih']);



Route::get('/adminjl', [AdminController::class, 'viewadminjl']);
Route::get('/adminiuran', [AdminController::class, 'adminiuran']);
Route::get('/absen', [AdminController::class, 'adminabsen']);
Route::post('/dataiuran', [AdminController::class, 'dataiuran']);
Route::get('/dataabsen', [AdminController::class, 'dataabsen']);

Route::get('/shiftdata', [AdminController::class, 'shiftdata']);

Route::get('/bayar/{id}', [AdminController::class, 'bayar']);
Route::get('/tidakbayar/{id}', [AdminController::class, 'tidakbayar']);

Route::get('/hadir/{id}', [AdminController::class, 'hadir']);
Route::get('/alfa/{id}', [AdminController::class, 'alfa']);
Route::get('/izin/{id}', [AdminController::class, 'izin']);


Route::get('/atlitjl', [AtlitController::class, 'atlitjl']);
Route::get('/iuran', [AtlitController::class, 'iuran']);
Route::get('/memberabsen', [MemberController::class, 'memberabsen']);



Route::get('/editprofile', [AdminController::class, 'editprofile']);
Route::post('editprofileee{id}', [AdminController::class, 'editprofileee']);
