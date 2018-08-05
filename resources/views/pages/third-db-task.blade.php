@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание по DB №3</h3>
                <p><b>Напишите запрос, который выберет название мероприятия (events.caption), по которому нет заявок</b></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    SELECT events.caption FROM events
    WHERE events.id NOT IN (SELECT id_event FROM bids);
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