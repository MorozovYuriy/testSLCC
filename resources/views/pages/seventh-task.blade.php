@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №7</h3>
                <p><b>Чем отличается require от include ?​</b></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    include('test.php');
    require('test.php');
                </pre>
            </div>
            <br>
            <div class="result">
                <b>Результат: </b>
                <span>require() возвращает FATAL ERROR, если файл не найден, include() возвращает WARNING.</span>
            </div>
        </div>
    </main>
@endsection