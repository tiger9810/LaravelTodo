<x-layout>

    <x-slot name="title">
        {{ $todo }} - Today's todo
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('todos.index') }}">back</a>
    </div>
    <h2>{{ $todo }}</h2>
</x-layout>

