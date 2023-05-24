<x-layout>

    <x-slot name="title">
        {{ $todo->title }} - Today's todo
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('todos.index') }}">back</a>
    </div>
    <h2>{{ $todo->title }}</h2>
    <p>{{ $todo->detail }}</p>
</x-layout>

