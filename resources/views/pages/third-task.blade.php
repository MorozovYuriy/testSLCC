@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №3</h3>
                <p><b>​Как получить первый элемент массива?</b></p>
                <p><i>​[2,3,56,65,56,44,34,45,3,5,35,345,3,5]</i></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    $arr = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];
    $first_elem = array_shift($arr);
                </pre>
            </div>
            <br>
            <div class="result">
                <b>Результат:</b>
                <span>{{$first_elem}}</span>
            </div>
        </div>
    </main>
@endsection