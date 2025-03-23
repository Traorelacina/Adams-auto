<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/voitures-a-vendre', function () {
    return view('cars.for-sale');
})->name('cars.for-sale');

Route::get('/voitures-a-louer', function () {
    return view('cars.for-rent');
})->name('cars.for-rent');

// Route pour la page détaillée d'une voiture
Route::get('/voitures/{car}', function (App\Models\Car $car) {
    return view('cars.show', compact('car'));
})->name('cars.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
