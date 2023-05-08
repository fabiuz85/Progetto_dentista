<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CollaboratorController;

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


Route::get('/', [PublicController::class, 'index'])->name('homepage');

Route::get('/staff', [CollaboratorController::class, 'index'])->name('staff.index');

Route::get('/staff/{id}/{name}-{surname}',[CollaboratorController::class,'details'])->name('staff.profile');
