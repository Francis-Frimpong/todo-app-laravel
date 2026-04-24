<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'store']);
Route::patch('/todos', [TodoController::class, 'update']);
Route::delete('/todos', [TodoController::class, 'destroy']);
