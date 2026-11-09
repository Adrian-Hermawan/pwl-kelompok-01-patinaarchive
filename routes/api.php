<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LayananController;

Route::name('api.')->group(function () {
    Route::get('/layanans', [LayananController::class, 'index'])
        ->name('layanans.index');
});
