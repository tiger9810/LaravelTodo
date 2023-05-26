<x-layout>

    <x-slot name="title">
        {{ $todo->title }} - Today's todo
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('todos.index') }}">back</a>
    </div>

    <h1>
        <span>{{ $todo->title }}</span>
        <a href="{{ route('todos.edit', $todo)}} ">[Edit]</a>
        <form method="post" action="{{ route('todos.destroy', $todo) }} " class="delete">
            @method('DELETE')
            @csrf
            <button class="button">x</button>
        </form>

    </h1>
    <p>{!! nl2br(e($todo->detail)) !!}</p>

    <h2>Comments</h2>
    <ul>
        <li>
            <form action="{{ route('comments.store', $todo) }}" method="post" class="comment-form">
                @csrf
                <input type="text" name="body">
                <button>Add</button>
            </form>
        </li>
        @foreach ($todo->comments()->latest()->get() as $comment)
        <li class="list-item">
            {{ $comment->body }}
            {{ $comment->created_at }}
            <form method="post" action="{{ route('comments.destroy', $comment) }}" class="delete">
                @method('DELETE')
                @csrf
                <button class="button">x</button>
            </form>
        </li>
        @endforeach

    </ul>

    <script>
        'use strict'
        {
            // document.getElementById('delete').addEventListener('submit', e => {
            //     e.preventDefault();

            //     if (!confirm('Sure to delete?')) {
            //         return;
            //     }

            //     e.target.submit();
            // });

            document.querySelectorAll('.delete').forEach(form => {
                form.addEventListener('submit', e => {
                    e.preventDefault();

                    if (!confirm('Sure to delete?')) {
                    return;
                }

                form.submit();
                });
            });
        }
    </script>

</x-layout>

