<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorsController;
use App\Http\Controllers\EditController;

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

// All the users should be able to see the dashboard without being logged in.
// Once inside, the non registered users would see the option 'Log in/Register', and the rest the option 'Profile'.
Route::view('/', 'dashboard')->name('home');

Route::resource('groups', GroupController::class)->except(['show']);

Route::middleware('auth')->group(function () {

    Route::resource('formations', FormationController::class)->except(['show']);

    Route::resource('lectures', LectureController::class)->except(['show']);

    Route::resource('professors', ProfessorController::class)->except(['show']);

    Route::resource('subjects', SubjectController::class)->except(['show']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
