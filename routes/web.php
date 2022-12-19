<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/genre', [GenreController::class, 'index'])->name('genre');
    Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');

    Route::get('/artist', [ArtistController::class, 'index'])->name('artist');
    Route::get('/artist/create', [ArtistController::class, 'create'])->name('artist.create');

    Route::get('/venue', [VenueController::class, 'index'])->name('venue');
    Route::get('/venue/create', [VenueController::class, 'create'])->name('venue.create');

    Route::get('/event', [EventController::class, 'index'])->name('event');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
