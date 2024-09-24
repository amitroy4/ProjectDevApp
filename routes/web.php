<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.default');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/projects', function () {
    return view('dashboard.project.projects');
})->middleware(['auth', 'verified'])->name('projects');

Route::get('/dashboard/project/versions', function () {
    return view('dashboard.project.versions');
})->middleware(['auth', 'verified'])->name('project.versions');

Route::get('/dashboard/developer', function () {
    return view('dashboard.dev.developer');
})->middleware(['auth', 'verified'])->name('developer');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
