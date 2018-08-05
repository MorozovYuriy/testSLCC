@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №4</h3>
                <p><b>Как вычислить остаток от деления 10/3​</b></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    $a = 10;
    $b = 3;
    $c = $a % $b;
                </pre>
            </div>
            <br>
            <div class="result">
                <b>Результат:</b>
                <span>{{$result}}</span>
            </div>
        </div>
    </main>
@endsection