<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\PdfController;
Route::get('/riders', [RiderController::class, 'riders'])->name('riders');
Route::get('/race', [RaceController::class, 'race'])->name('races');
Route::get('/riders/{id}', [RiderController::class, 'ridersdata'])->name('ridersdata');
Route::get('/rider-pdf', [PdfController::class, 'streamRacePDF']);
Route::get('/download-pdf', [PdfController::class, 'regeneratePDFs'])->name('download.pdf');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardgraph'])->name('dashboard');
    Route::get('/dashboard-tinymce', [DashboardController::class, 'dashboardtinymce'])->name('dashboard-tinymce');
    Route::get('/dashboard-create', [DashboardController::class, 'dashboardcreate'])->name('dashboard-create');
    Route::delete('/delete/{id}', [RaceController::class, 'delete'])->name('delete');
    Route::post('/dashboard/create', [DashboardController::class, 'store']);
    Route::get('/{default_name}/{id}/edit', [RaceController::class, 'edit'])->name('edit');
    Route::put('/raceupdate/{id}', [RaceController::class, 'update'])->name('update');
});
