<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');   // All the users should be able to see the dashboard without being logged in.
                        // Once inside, the non registered users would see the option 'Log in/Register', and the rest the option 'Profile'.

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/professor/{id}', [EditController::class, 'professor'])->name('professor.edit');
Route::post('/professor', [EditController::class, 'confirmEditProfessor'])->name('confirmEditProfessor');

Route::get('/formation/{id}', [EditController::class, 'formation'])->name('formation.edit');
Route::post('/formation', [EditController::class, 'confirmEditFormation'])->name('confirmEditFormation');

Route::get('/subject/{id}', [EditController::class, 'subject'])->name('subject.edit');
Route::post('/subject', [EditController::class, 'confirmEditSubject'])->name('confirmEditSubject');

Route::get('/group/{id}', [EditController::class, 'group'])->name('group.edit');
Route::post('/group', [EditController::class, 'confirmEditGroup'])->name('confirmEditGroup');

Route::get('/lecture/{id}', [EditController::class, 'lecture'])->name('lecture.edit');
Route::post('/lecture', [EditController::class, 'confirmEditLecture'])->name('confirmEditLecture');

require __DIR__.'/auth.php';

// DEBUG!!! (delete later)
Route::get('/table', function(){ return view('table'); });
Route::get('/custom', function(){ return view('custom'); });