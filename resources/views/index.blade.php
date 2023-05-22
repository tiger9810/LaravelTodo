<x-layout>

    <x-slot name="title">
        Today's todo
    </x-slot>

    <h2>Today's Todo</h2>
    <ul>
        {{-- $todosという配列について、その要素が存在する限り以下の処理を行います。
            各要素の値を$todoという変数に、そしてその要素のインデックスを$iという変数に格納します。
            もし$todosが空の場合（つまり要素が一つも存在しない場合）は、@empty以下の処理を行います。」 --}}
        @forelse ($todos as $i => $todo)
            <li>
                <input type="checkbox" name="" id="">
                {{-- <a href="/todos/{{ $index }}"> --}}
                <a href="{{ route('todos.show', $i) }}">
                    {{ $todo }}
                </a>
            </li>
        @empty
            <li>Todo Nothing!!</li>
        @endforelse
    </ul>
</x-layout>
