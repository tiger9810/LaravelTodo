<x-layout>

    <x-slot name="title">
        Today's todo
    </x-slot>

    <h2>
        <span>Today's Todo</span>
    </h2>

    <form method="post" action="{{ route('todos.store') }}">
        @csrf
        <div class="form-group">
            <label for="">
                Title
                <input type="text" name="title" value="{{ old('title') }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">
                detail
                <textarea name="detail">{{ old('detail') }}</textarea>
            </label>
        </div>
        <div class="form-button">
            <button>Add</button>
        </div>

    </form>

    <ul>
        {{-- $todosという配列について、その要素が存在する限り以下の処理を行います。
            各要素の値を$todoという変数に、そしてその要素のインデックスを$iという変数に格納します。
            もし$todosが空の場合（つまり要素が一つも存在しない場合）は、@empty以下の処理を行います。」 --}}
        @forelse ($todos as $todo)
        <ul>
            <li class="list-item">
                <input type="checkbox" name="" id="">
                {{-- <a href="/todos/{{ $index }}"> --}}
                <a href="{{ route('todos.show', $todo) }}">
                    {{ $todo->title }}
                </a>
            </li>
        </ul>

        @empty
            <li>Todo Nothing!!</li>
        @endforelse
    </ul>
</x-layout>
