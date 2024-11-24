<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Student Route
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::post('/', [StudentController::class, 'store'])->name('students.store');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
});

require __DIR__.'/auth.php';