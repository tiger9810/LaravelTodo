<x-layout>

    <x-slot name="title">
        Today's todo
    </x-slot>

    <h1>
        <span>Today's Todo</span>
    </h1>

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
                <input type="checkbox">
                <a href="{{ route('todos.show', $todo) }}">
                {{ $todo->title }}
                </a>
                <form method="post" action="{{ route('todos.destroy', $todo) }} " id="delete">
                    @method('DELETE')
                    @csrf
                    <button class="button">x</button>
                </form>
            </li>
          </ul>

        @empty
            <li>Todo Nothing!!</li>
        @endforelse
    </ul>

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
