@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №5</h3>
                <p><b>​Нужно поменять 2 переменные местами без использования третьей:</b></p>
                <p><i>​$а = [1,2,3,4,5];</i></p>
                <p><i>​$b = ‘Hello world’;</i></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    $a = [1,2,3,4,5];
    $b = 'Hello World';

    list($a, $b) = [$b, $a];

    echo $a;
    print_r($b);
                </pre>
            </div>
            <br>
            <div class="result">
                <b>Результат:</b>
                <span>{{$a}}</span>
                <p><span><?php print_r($b)?></span></p>
            </div>
        </div>
    </main>
@endsection