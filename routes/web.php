<?php

use App\Http\Controllers\DatatablesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// ======================== BACKEND MENU USERS > BANNER =================================
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users{id}/show', [UsersController::class, 'show'])->name('users.show');
Route::get('/users{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users{id}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users{id}', [UsersController::class, 'destroy'])->name('users.destroy');



// =========================== DATATABLES =====================================
Route::get('/datatablesusers', [DatatablesController::class, 'users'])->name('be.datatables.users');
