<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

Route::fallback(function () {
    return 'Still got somewhere!';
});