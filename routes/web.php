<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;

Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');

Route::get('/', [ConferenceController::class, 'index'])->name('home');


