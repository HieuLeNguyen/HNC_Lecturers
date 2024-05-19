<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\TeachingController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;


use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});

//Giảng viên
Route::middleware(['auth', 'lecturer'])->group(function(){
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('introduction', [IntroductionController::class, 'index'])->name('introduction');
    Route::get('teaching', [TeachingController::class, 'index'])->name('teaching');
    Route::get('result', [ResultController::class, 'index'])->name('result');
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
});

require __DIR__.'/auth.php';
