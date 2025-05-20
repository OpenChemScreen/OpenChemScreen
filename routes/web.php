<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompoundController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class)->names('users');
    Route::get('compounds/{project?}',[CompoundController::class, 'index'])->name('compounds.index');
    Route::get('compounds/{compound}/view',[CompoundController::class, 'view'])->name('compounds.view');
    Route::get('compounds/create',[CompoundController::class, 'create'])->name('compounds.create');
    Route::post('compounds/store',[CompoundController::class, 'store'])->name('compounds.store');
    Route::post('compounds/{compound/edit',[CompoundController::class, 'edit'])->name('compounds.edit');
    Route::patch( 'compounds/{compound}/update',[CompoundController::class, 'update'])->name('compounds.update');
    Route::delete('compounds/{compound}/destroy',[CompoundController::class, 'destroy'])->name('compounds.destroy');
    Route::resource('projects', ProjectController::class)->names('projects');
    Route::get('imports', [ImportController::class, 'index'])->name('imports.index');
    Route::get('exports', [ExportController::class, 'index'])->name('exports.index');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
