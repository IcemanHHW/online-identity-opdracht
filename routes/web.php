<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminTaskController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'index']);

Route::get('registreren', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');


// Admin
Route::post('admin/tasks', [AdminTaskController::class, 'store'])->middleware('auth');
Route::get('admin/tasks/create', [AdminTaskController::class, 'create'])->middleware('auth');
Route::get('admin/tasks/{task}/edit', [AdminTaskController::class, 'edit'])->middleware('auth');
Route::patch('admin/tasks/{task}', [AdminTaskController::class, 'update'])->middleware('auth');
Route::delete('admin/tasks/{task}', [AdminTaskController::class, 'destroy'])->middleware('auth');
