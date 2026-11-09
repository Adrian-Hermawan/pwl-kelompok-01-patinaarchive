<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\CekStatusController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginOperatorController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KelolaAntreanController;
use App\Http\Controllers\LaporanPendapatanController;
use App\Http\Controllers\TugasCuciController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\LayananController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route halaman pendaftaran
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])
    ->name('pendaftaran');

Route::post('/pendaftaran', [PendaftaranController::class, 'store'])
    ->name('pendaftaran.store');

// Route halaman cek status
Route::get('/cek-status', [CekStatusController::class, 'index'])
    ->name('cek-status');

// Route halaman login admin
Route::get('/login-admin', [LoginAdminController::class, 'index'])
    ->name('login-admin');

// Route halaman login operator
Route::get('/login-operator', [LoginOperatorController::class, 'index'])
    ->name('login-operator');

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home');
})->middleware('auth')->name('logout');

// Proses halaman login admin
Route::post('/login-admin', [LoginAdminController::class, 'authenticate'])
    ->middleware('throttle:5,1') // Batasi percobaan login menjadi 5 kali per menit
    ->name('login-admin.store');

// Proses halaman login operator
Route::post('/login-operator', [LoginOperatorController::class, 'authenticate'])
    ->middleware('throttle:5,1') // Batasi percobaan login menjadi 5 kali per menit
    ->name('login-operator.store');

// Route khusus Admin
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])
        ->name('dashboard-admin');

    Route::get('/kelola-antrean-admin', [KelolaAntreanController::class, 'index'])
        ->name('kelola-antrean-admin');

    Route::get('/laporan-pendapatan-admin', [LaporanPendapatanController::class, 'index'])
        ->name('laporan-pendapatan-admin');

    Route::resource('layanan', LayananController::class)->except(['show']);

    Route::patch('/kelola-antrean-admin/{antrean}/status', [KelolaAntreanController::class, 'updateStatus'])
    ->name('antrean.update-status');

});

// Route khusus Operator
Route::middleware(['auth', 'role:operator'])->group(function () {

    Route::get('/tugas-cuci-operator', [TugasCuciController::class, 'index'])
        ->name('tugas-cuci-operator');

});