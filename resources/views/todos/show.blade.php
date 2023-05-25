<x-layout>

    <x-slot name="title">
        {{ $todo->title }} - Today's todo
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('todos.index') }}">back</a>
    </div>

    <h2>
        <span>{{ $todo->title }}</span>
        <a href="{{ route('todos.edit', $todo)}} ">[Edit]</a>
        <form method="post" action="{{ route('todos.destroy', $todo) }} " id="delete">
            @method('DELETE')
            @csrf
            <button class="button">x</button>
        </form>

    </h2>
    <p>{!! nl2br(e($todo->detail)) !!}</p>

    <script>
        'use strict'
        {
            document.getElementById('delete').addEventListener('submit', e=> {
                e.preventDefault();

                if (!confirm('Sure to delete?')) {
                    return;
                }

                e.target.submit();
            });
        }
    </script>

</x-layout>

