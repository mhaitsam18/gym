<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AtlitController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberJadwalController;
use App\Http\Controllers\MemberLanggananController;
use App\Http\Controllers\MemberTraineeController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\TrainerAbsensiController;
use App\Http\Controllers\TrainerAssessmentController;
use App\Http\Controllers\TrainerBodyMassIndexController;
use App\Http\Controllers\TrainerBodyMeasurementController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TrainerJadwalController;
use App\Http\Controllers\TrainerMemberController;
use App\Http\Controllers\TrainerProgramLatihanController;
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
    Route::get('/editprofile', [UserController::class, 'editprofile'])->name('user.profile.show');


    Route::middleware(['auth.member'])->group(function () {
        Route::get('/event', [AdminController::class, 'index']);
        Route::get('/ukur', [AdminController::class, 'ukur']);
        Route::get('/member', [AdminController::class, 'member']);
        Route::get('/personal-trainer', [AdminController::class, 'trainer']);
        Route::get('/fitt', [AdminController::class, 'fitt']);

        Route::post('/uploadtrainer1/{id}', [AdminController::class, 'uploadtrainer1']);
        Route::post('/uploadtrainer2/{id}', [AdminController::class, 'uploadtrainer2']);
        Route::post('/uploadtrainer3/{id}', [AdminController::class, 'uploadtrainer3']);

        Route::get('/back', [AdminController::class, 'back']);


        Route::get('/nambah_assessment', [AdminController::class, 'assessment']);

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

        Route::get('/member/langganan/berhenti-berlanggan/{langganan}', [MemberLanggananController::class, 'berhentiBerlanggan']);
        Route::resource('/member/langganan', MemberLanggananController::class);

        Route::get('/member/trainee/berhenti-berlanggan/{trainee}', [MemberTraineeController::class, 'berhentiBerlanggan']);
        // Route::get('/member/trainee/jadwal', [MemberTraineeController::class, 'jadwal']);
        Route::resource('/member/trainee/jadwal', MemberJadwalController::class);
        Route::resource('/member/trainee', MemberTraineeController::class);
    });

    Route::middleware(['auth.trainer'])->group(function () {
        Route::prefix('trainer')->group(function () {
            Route::get('/', [TrainerController::class, 'index'])->name("trainer.index");

            Route::prefix('jadwal')->group(function () {
                Route::get('/', [TrainerJadwalController::class, 'index'])->name("trainer.jadwal");
            });
            Route::prefix('absensi')->group(function () {
                Route::get('/', [TrainerAbsensiController::class, 'index'])->name("trainer.absensi");
            });
            Route::prefix('program-latihan')->group(function () {
                Route::get('/', [TrainerProgramLatihanController::class, 'index'])->name("trainer.program-latihan");
            });
            Route::prefix('assessment')->group(function () {
                Route::get('/', [TrainerAssessmentController::class, 'index'])->name("trainer.assessment");
            });
            Route::prefix('member')->group(function () {
                Route::get('/', [TrainerMemberController::class, 'index'])->name("trainer.member");
            });
            Route::prefix('body-measurement')->group(function () {
                Route::get('/', [TrainerBodyMeasurementController::class, 'index'])->name("trainer.body-measurement");
            });
            Route::prefix('body-mass-index')->group(function () {
                Route::get('/', [TrainerBodyMassIndexController::class, 'index'])->name("trainer.body-mass-index");
            });
        });


        Route::get('/pelatihjl', [PelatihController::class, 'viewjadwallatihan']);
        Route::post('/uploadjadwal', [PelatihController::class, 'uploadjadwal']);
        Route::get('/homepelatih', [PelatihController::class, 'homepelatih']);
    });
});

Route::post('/eventAjax', [AdminController::class, 'ajax']);


Route::post('/uploadukur', [AdminController::class, 'uploadukur']);

Route::post('/uploadfit', [AdminController::class, 'uploadfit']);


Route::post('/uploadmember1/{id}', [AdminController::class, 'uploadmember1']);

Route::post('/uploadmember2/{id}', [AdminController::class, 'uploadmember2']);

Route::post('/uploadmember3/{id}', [AdminController::class, 'uploadmember3']);










// Route::get('/atlitjl', [AtlitController::class, 'atlitjl']); KOSONG
// Route::get('/iuran', [AtlitController::class, 'iuran']); KOSONG
// Route::get('/memberabsen', [MemberController::class, 'memberabsen']); KOSONG
