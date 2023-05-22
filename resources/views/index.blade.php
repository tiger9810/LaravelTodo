{{-- <?php
dd($todos)
?> --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Today's Todo</h2>
            <ul>
                @forelse ($todos as $index => $todo)
                    <li>
                        <input type="checkbox" name="" id="">
                        <a href="/todos/{{ $index }}">
                            {{ $todo }}
                        </a>
                    </li>
                @empty
                    <li>Todo Nothing!!</li>
                @endforelse
            </ul>
    </div>
</body>
</html>
