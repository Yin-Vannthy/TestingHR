<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

//Default Users form url
Route::get('/admin/users', function () {
    return view('users.users');
});

//User List form and function fetch all data from table user
Route::get('/admin/users', [UsersController::class, 'index'])
    ->name('index_user');

//Create user form
Route::get('/admin/users/index_create', [UsersController::class, 'index_create'])
    ->name('index_create');

//After clicked summit
Route::post('/admin/users/create', [UsersController::class, 'create'])
    ->name('create_user');

//Confirm Delete user
Route::get('/admin/users/confirm_delete', [UsersController::class, 'confirm_delete'])
    ->name('confirm_delete');
//After Confirmed delete
Route::post('/admin/users/delete_user', [UsersController::class, 'delete_user'])
    ->name('delete_user');
