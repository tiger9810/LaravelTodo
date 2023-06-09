<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{

    public function index() {

        // 更新日時が早いもの順にデータを取得する
        // $todos = Todo::orderBy('created_at', 'desc')->get();
        $todos = Todo::latest()->get();

        // viewのindexで$todosの内容をtodosという変数名で受け取るという処理
        return view('index')
            ->with(['todos' => $todos]);
    }
    public function show(Todo $todo) {

        return view('todos.show') //todos←はshow.blade.phpがあるフォルダ名
            ->with(['todo' => $todo]); //変数todoには$this->todo[$id]が格納されている
    }

    public function store(TodoRequest $request) {

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->detail = $request->detail;
        $todo->save();

        return redirect()
            ->route('todos.index');
    }

    public function edit(Todo $todo) {

        return view('todos.edit') //todos←はshow.blade.phpがあるフォルダ名
            ->with(['todo' => $todo]); //変数todoには$this->todo[$id]が格納されている
    }


    public function update(TodoRequest $request, Todo $todo) {

        $todo->title = $request->title;
        $todo->detail = $request->detail;
        $todo->save();

        return redirect()
            ->route('todos.show', $todo);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()
            ->route('todos.index');
    }

}
