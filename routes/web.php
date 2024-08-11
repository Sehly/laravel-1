<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\StudentsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tracks',[TrackController::class,'index'])->name('tracks.index');
Route::get('/tracks/{id}',[TrackController::class,'view'])->name('tracks.view');
Route::delete('/tracks/{id}', [TrackController::class, 'destroy'])->name('tracks.destroy');
Route::get('/students',[StudentsController::class, 'index'])->name('students.index');
Route::get('/students.create', [StudentsController::class, 'create'])->name('students.create');
Route::post('students',[StudentsController::class, 'store'])->name('students.store');
Route::get('/students/{id}/edit', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}/update', [StudentsController::class, 'update'])->name('students.update');
Route::get('students/{id}', [StudentsController::class, 'view'])->name('students.view');
Route::delete('/students/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');


Route::resource('courses',CourseController::class);
