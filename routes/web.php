<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\JadwalController;
use App\Models\User;
use App\Models\Ortu;
use App\Models\Jadwal;
use App\Models\Imunisasi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('indexUser', [
        'jadwal' => Jadwal::All()
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'anak' => Ortu::All()
    ]);
});
Route::get('/dashboardAdmin', function () {
    // return User::all();
    return view('dashboardAdmin', [
        'anak' => Ortu::All(),
        'totalBalita' => Ortu::count(),
        'totalUser' => User::count(),
    ]);
});

Route::get('/halamanAdmin', function () {
    // return User::all();
    return view('halamanAdmin', [
        'anak' => Ortu::All()
    ]);
});
Route::get('/userAdmin', function () {
    // return User::all();
    return view('userAdmin', [
        // $walikelas = User::where('jabatan', 'walikelas')->get();
        'anak' => User::where('access', 'ortu')->get(),
        'ortu' => Ortu::all()
    ]);
});

Route::get('/jadwalAdmin', function () {
    // return User::all();
    return view('jadwalAdmin', [
        // $walikelas = User::where('jabatan', 'walikelas')->get();
        'anak' => User::where('access', 'ortu')->get(),
        'jadwal' => Jadwal::all()
    ]);
});
Route::get('/imunisasiAdmin', function () {
    // return User::all();
    return view('imunisasiAdmin', [
        'imunisasi' => Imunisasi::all()
    ]);
});

Route::get('/keluar', function () {
    // return User::all();
    return view('login', [
        'anak' => Ortu::All()
    ]);
});

Route::post('/masuk', [LoginController::class, 'authenticate']);

Route::post('/tambahDataBalita', [PosyanduController::class, 'tambahDataBalita']);
Route::post('/tambahDataUser', [PosyanduController::class, 'tambahDataUser']);
Route::get('/hapusUser/{id}', [PosyanduController::class, 'hapusUser']);

Route::post('/tambahImunisasi', [JadwalController::class, 'tambahImunisasi']);
Route::post('/tambahJadwal', [JadwalController::class, 'tambahJadwal']);
Route::get('/hapusJadwal/{id}', [JadwalController::class, 'hapusJadwal']);
Route::post('/editJadwal', [JadwalController::class, 'updateJadwal']);

Route::post('/editDataUser', [PosyanduController::class, 'updateUser']);
Route::post('/editBalita', [PosyanduController::class, 'updateBalita']);
Route::get('/hapusBalita/{id}', [PosyanduController::class, 'hapusBalita']);
