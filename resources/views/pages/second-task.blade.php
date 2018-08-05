@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №2</h3>
                <p><b>Реализовать алгоритм извлечения числовых значений со строки:</b></p>
                <p><i>This server has 386 GB RAM and 5000 GB storage</i></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    //first way
    $str = "This server has 386 GB RAM and 5000 GB storage";
    $str = preg_replace("/[^0-9]/", ' ', $str);


    //second way
    $str = "This server has 386 GB RAM and 5000 GB storage";
    $numbers = [];

    function get_numeric($item) {
        return is_numeric($item);
    }

    $numbers = array_filter(explode(' ', $str), "get_numeric");
                </pre>
            </div>
            <br>
            <div class="result">
                <b>Результат:</b>
                <span>{{$numbers}}</span>
            </div>
        </div>
    </main>
@endsection