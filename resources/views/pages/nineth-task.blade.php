@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №9</h3>
                <p><b>Что выведет следующий код на JavaScript и почему:​</b></p>
                <p><i>​<pre>
    for( var i =0; i < 10; i++){
        setTimeout(function () {
            console.log(i);
        }, 100);
    }
                        </pre></i></p>
            </div>
            <br>
            <div class="result">
                <b>Результат: </b>
                <span>10</span>
                <p><span>В setTimeout создана функция вывода в консоль значения i. Входе работы цикла в переменную поочередно записываются значения 0-9. Спустя 0,1 секунду вызывается фукция вывода значения в консоль, в этот момент уже был осуществлен выход из цикла и в i записано значение - 10. Если убрать setTimeout, то каждое значение i от 0 до 9 выведется по порядку в консоль.</span></p>
            </div>
        </div>
    </main>
    <script>
        for( var i =0; i < 10; i++){
            setTimeout(function () {
                console.log(i);
            }, );

        }
    </script>
@endsection