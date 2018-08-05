@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №6</h3>
                <p><b>Чем отличается оператор == от === ?​</b></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    $a = 1;
    $b = "1";

    echo $a==$b;  //true
    echo $a===$b; //false
                </pre>
            </div>
            <br>
            <div class="result">
                <b>Результат:</b>
                <p><span>== - сравнивает значения переменных</span></p>
                <p><span>=== - сравнивает значения переменных и их типы</span></p>
            </div>
        </div>
    </main>
@endsection