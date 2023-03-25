<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotosController;

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


Route::get('/motos', [MotosController::class, 'index'])->name('motos.index');


Route::get('/motos/create', [MotosController::class, 'create'])->name('motos.create');

Route::get('/motos/{moto}', [MotosController::class, 'show'])->name('motos.show');

Route::get('/motos/{moto}/edit', [MotosController::class, 'edit'])->name('motos.edit');

Route::post('/motos', [MotosController::class, 'store'])->name('motos.store');

Route::put('/motos/{moto}', [MotosController::class, 'update'])->name('motos.update');

Route::delete('/motos/{moto}', [MotosController::class, 'destroy'])->name('motos.destroy');