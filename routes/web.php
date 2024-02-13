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

Route::get('/profesor/{id}', [EditController::class, 'profesor'])->name('profesor.edit');
Route::post('/profesor', [EditController::class, 'confirmEditProfesor'])->name('confirmEditProfesor');

Route::get('/formacion/{id}', [EditController::class, 'formacion'])->name('formacion.edit');
Route::post('/formacion', [EditController::class, 'confirmEditFormacion'])->name('confirmEditFormacion');

Route::get('/modulo/{id}', [EditController::class, 'modulo'])->name('modulo.edit');
Route::post('/modulo', [EditController::class, 'confirmEditModulo'])->name('confirmEditModulo');

require __DIR__.'/auth.php';
