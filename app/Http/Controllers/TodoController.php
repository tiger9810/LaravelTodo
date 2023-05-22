<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $todos = [
        'title A',
        'title B',
        'title C',
    ];

    public function index() {

        // viewのindexで$todosの内容をtodosという変数名で受け取るという処理
        return view('index')
            ->with(['todos' => $this->todos]);
    }
    public function show($id) {
        return view('todos.show') //todos←はshow.blade.phpがあるフォルダ名
            ->with(['todo' => $this->todos[$id]]); //変数todoには$this->todo[$id]が格納されている
    }
}
