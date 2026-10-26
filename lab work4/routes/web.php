<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);
