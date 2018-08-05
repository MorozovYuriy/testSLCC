@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание по DB №2</h3>
                <p><b>Напишите запрос, который выберет имя пользователя (bids.name) с самой высокой ценой заявки (bids.price)</b></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    SELECT bids.name FROM bids
    WHERE  price=(SELECT MAX(price) FROM bids);
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