<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Todo $todo){

        $request->validate([
            'body' => 'required',
        ]);

        $comment = new Comment();
        $comment->todo_id = $todo->id;
        $comment->body = $request->body;
        $comment->save();

        return redirect()
            ->route('todos.show', $todo);
    }

    public function destroy(Comment $comment){
        $comment->delete();

        return redirect()
            ->route('todos.show', $comment->todo);
    }
}
