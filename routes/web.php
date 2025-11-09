<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataScienceController;
use App\Http\Controllers\NetworkSecurityController;
use App\Http\Controllers\WritersController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\AboutUsController;

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/writers', [WritersController::class, 'index'])->name('writers');

Route::get('/detail/{id}', [MataKuliahController::class, 'index'])->name('matakuliah.detail');

Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::prefix('matakuliah')->group(function () {
    Route::get('/datascience', [DataScienceController::class, 'index'])->name('matakuliah.datascience');

    Route::get('/networksecurity', [NetworkSecurityController::class, 'index'])->name('matakuliah.networksecurity');

    Route::get('/{writer_id}', [WritersController::class, 'matakuliah'])->name('matakuliah.writer');
});
