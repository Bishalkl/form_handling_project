<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'showUsers'])->name('home');
Route::get('/user/{id}', [UserController::class, 'singleUser'])->name('view.user');
Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');
Route::view('/add', 'addUser')->name('add.form');
Route::post('/add',[UserController::class, 'addUser'])->name('add.user');
