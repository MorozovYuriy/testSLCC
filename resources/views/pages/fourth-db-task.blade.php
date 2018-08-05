@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание по DB №4</h3>
                <p><b>Напишите запрос, который выберет название мероприятия (events.caption), по которому больше трех заявок</b></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    SELECT events.caption FROM events
    INNER JOIN bids ON events.id=bids.id_event
    GROUP BY events.caption
    HAVING COUNT(events.caption) > 3;
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