<x-layout>

    <x-slot name="title">
        Edit todo
    </x-slot>


    <div class="back-link">
        &laquo; <a href="{{ route('todos.show', $todo) }}">back</a>
    </div>
    <h2>
        <span>Edit Todo</span>
    </h2>

    <form method="post" action="{{ route('todos.update', $todo) }} ">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="">
                Title
                <input type="text" name="title" value="{{ old('title', $todo->title) }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">
                detail
                <textarea name="detail">{{ old('detail', $todo->detail) }}</textarea>
            </label>
        </div>
        <div class="form-button">
            <button>Update</button>
        </div>

    </form>
</x-layout>
