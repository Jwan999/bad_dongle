<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TaskController::class, 'index']);
Route::post('/', [TaskController::class, 'store']);
Route::get('/api/tasks', [TaskController::class, 'show']);
Route::delete('/task/{id}', [TaskController::class, 'destroy']);



