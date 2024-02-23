<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Films page  route
Route::get('/films', [FilmController::class, 'index'])->name('films.index');


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



require __DIR__ . '/auth.php';