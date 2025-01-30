<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





// -------------------UserController--------------------//
Route::controller(UserController::class)->group(function(){
    Route::get('/','showUsers')->name('home');
    Route::get('/user/{id}', 'singleUser')->name('view.user');
    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
    Route::post('/add', 'addUser')->name('add.user');
    Route::get('/updatePage/{id}', 'updatePage')->name('update.page');
    Route::put('/update/{id}', 'updateUser')->name('update.user');
});
Route::view('/addUser', 'newUser');
