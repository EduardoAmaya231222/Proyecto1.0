<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Models\Responsable;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [HomeController::class, 'index'])->name('welcome');

// Rutas para la gestión de usuarios

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

Route::get('/crear-responsable', function () {
    $responsable = new Responsable();
    $responsable->nombre = 'Eduardo';
    $responsable->save();
});
