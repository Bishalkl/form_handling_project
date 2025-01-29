<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// -------------------UserController--------------------//
Route::controller(UserController::class)->group(function(){

    Route::get('/','showUsers')->name('home');
    Route::get('/user/{id}', 'singleUser')->name('view.user');
    Route::delete('/delete/{id}', 'deleteUser')->name('delete.user');
    Route::get('/add', 'addUser')->name('add.form');
    Route::post('/user','addUser')->name('add.user');
    Route::get('/user/{id}/edit', 'editPage')->name('edit.user');
    Route::put('/user/{id}', 'updateUser')->name('update.user');
});



