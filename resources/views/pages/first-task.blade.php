@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №1</h3>
                <p><b>Написать алгоритм решения задачи:</b></p>
                <p><i>В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе занимаются спортом и сколько всего учеников в классе?</i></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    $stud = 28;
    $sport_stud_percent = 75;
    $sport_stud = $stud / 100 * $sport_stud_percent;
                </pre>
            </div>
            <br>
            <div class="result">
                <b>Результат:</b>
                <span>{{$sport_stud}}</span>
            </div>
        </div>
    </main>
@endsection