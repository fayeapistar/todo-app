<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// Display a listing of the tasks
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');

// Show the form for creating a new task
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Store a newly created task in storage
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');

// Display the specified task
Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

// Show the form for editing the specified task
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Update the specified task in storage
Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

// Remove the specified task from storage
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
