<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $productos = Producto::all();
    return view('dashboard', compact('productos'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('productos', ProductoController::class)->except(['show']);
});

require __DIR__.'/auth.php';