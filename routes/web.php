<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UsersController;

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

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/{users}/edit', [UsersController::class, 'edit']);
Route::patch('/users/{users}', [UsersController::class, 'update']);
Route::delete('/{users}', [UsersController::class, 'destroy']);
