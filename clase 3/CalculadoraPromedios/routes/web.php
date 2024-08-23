<?php

use App\Http\Controllers\GradeController;

Route::get('/calificaciones', [GradeController::class, 'create'])->name('grades.create');
Route::post('/calificaciones', [GradeController::class, 'store'])->name('grades.store');

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
