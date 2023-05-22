<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

// Route::get('/', ['App\Http\Controllers\TodoController', 'index']);省略↓
// Route::get('/', [App\Http\Controllers\TodoController::class, 'index']);さらに省略↓
Route::get('/', [TodoController::class, 'index'])
    ->name('todos.index');

// todoControllerにshowメソッドを作って、引数に{id}を渡す
Route::get('/todos/{id}', [TodoController::class, 'show'])
    ->name('todos.show');
