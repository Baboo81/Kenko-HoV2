<?php

use App\Http\Controllers\Themes\DixHuilesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\Themes\BasesController;
use App\Http\Controllers\Themes\CuisineController;
use App\Http\Controllers\Themes\DouleursController;
use App\Http\Controllers\Themes\EmotionsController;
use App\Http\Controllers\Themes\EnfantsController;
use Nette\Schema\Elements\Base;

// =======================
// ROUTES PRINCIPALES.  //
// =======================
Route::get('/', [HomeController::class, 'index'])->name('home');

// =======================
// ROUTES -> THEMES     //
// =======================

Route::get('/themes/bases', [BasesController::class, 'show'])->name('themes.bases');
Route::get('/themes/dixHuiles', [DixHuilesController::class, 'show'])->name('themes.dixHuiles');
Route::get('/themes/cuisine', [CuisineController::class, 'show'])->name('themes.cuisine');
Route::get('/themes/douleurs', [DouleursController::class, 'show'])->name('themes.douleurs');
Route::get('/themes/emotions', [EmotionsController::class, 'show'])->name('thmes.emotions');
Route::get('/themes/enfants', [EnfantsController::class, 'show'])->name('themes.enfants');

//Route pour envoyer un témoignage (POST)
Route::post('/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
