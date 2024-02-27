<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailControllers;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookingFilmController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\TodayShowingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/email', [EmailControllers::class,'index']);


Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:member'])->group(function () {
    Route::get('/films', [FilmController::class, 'index'])->name('films.index');
   // Route::get('/email', [ReserveController::class,'store']);
    Route::post('/reserve-seats', [ReserveController::class, 'reserveSeats'])->name('reserve.seats');

    
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// google
Route::get('/auth/google/redirect', [LoginController::class, 'redirect']);
Route::get('/auth/google/callback', [LoginController::class, 'callback']);
// facebook
// Route::get('/login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
// Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);
// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('github')->user();

//     // $user->token
// });

// Route::get('/login/google', 'LoginController@redirectToGoogle')->name('login.google');
// Route::get('/login/google/callback', 'LoginController@handleGoogleCallback');

// booking route 
Route::get('/films/booking-film', [BookingFilmController::class, 'index'])->name('films.booking-film');

// TodayShowing route
Route::get('/films/todays-showing/{film_id}', [TodayShowingController::class, 'index'])->name('films.todays-showing');

//reserve 


Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });
require __DIR__ . '/auth.php';