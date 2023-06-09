<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CommentController;



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
    ->where('todo', '[0-9]+');

Route::patch('/todos/{todo}/update', [TodoController::class, 'update'])
    ->name('todos.update')
    ->where('todo', '[0-9]+');

Route::delete('/todos/{todo}/destroy', [TodoController::class, 'destroy'])
    ->name('todos.destroy')
    ->where('todo', '[0-9]+');

Route::post('/todos/{todo}/comments', [CommentController::class, 'store'])
    ->name('comments.store')
    ->where('todo', '[0-9]+');

Route::delete('/comments/{comment}/destroy', [CommentController::class, 'destroy'])
    ->name('comments.destroy')
    ->where('comment', '[0-9]+');
