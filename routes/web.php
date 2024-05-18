<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Giảng viên
Route::middleware(['auth', 'lecturer'])->group(function(){
    Route::get('dashboard', [LecturerController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
