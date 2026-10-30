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

// Route halaman dashboard admin
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])
    ->name('dashboard-admin');

// Route halaman kelola antrean
Route::get('/kelola-antrean-admin', [KelolaAntreanController::class, 'index'])
    ->name('kelola-antrean-admin');

// Route halaman laporan pendapatan
Route::get('/laporan-pendapatan-admin', [LaporanPendapatanController::class, 'index'])
    ->name('laporan-pendapatan-admin');

// Route halaman tugas cuci
Route::get('/tugas-cuci-operator', [TugasCuciController::class, 'index'])
    ->name('tugas-cuci-operator');