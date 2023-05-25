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

    </h2>
    <p>{!! nl2br(e($todo->detail)) !!}</p>
</x-layout>

