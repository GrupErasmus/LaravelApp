<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

use App\Http\Controllers\UserController;

//Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/',[TaskController::class,'index']);
Route::get('/users',[UserController::class,'index']);

Route::get('/contact',[PagesController::class,'contact']);

Route::get('/about',[PagesController::class,'about']);


Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
