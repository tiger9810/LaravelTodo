<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $todos = [
        'title A',
        'title B',
        'title C',
    ];
    // viewのindexで$todosの内容をtodosという変数名で受け取るという処理
    return view('index')
        ->with(['todos' => $todos]);
});
