<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::middleware('auth')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contacts/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
    Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');
});


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');