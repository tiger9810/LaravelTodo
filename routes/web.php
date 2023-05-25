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
Route::get('/todos/{todo}', [TodoController::class, 'show'])
    ->name('todos.show')
    ->where('post', '[0-9]+');

Route::post('/todos/store', [TodoController::class, 'store'])
    ->name('todos.store');

    // todoControllerにshowメソッドを作って、引数に{id}を渡す
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])
    ->name('todos.edit')
    ->where('post', '[0-9]+');

Route::patch('/todos/{todo}/update', [TodoController::class, 'update'])
    ->name('todos.update')
    ->where('post', '[0-9]+');
