<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompoundController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ExportController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware'=>['auth']], function() {
    Route::resource('users', UserController::class)->names('users');
    Route::resource('compounds', CompoundController::class)->names('compounds');
    Route::resource('projects', ProjectController::class)->names('projects');
    Route::get('imports', [ImportController::class, 'index'])->name('imports.index');
    Route::get('exports', [ExportController::class,'index'])->name('exports.index');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
