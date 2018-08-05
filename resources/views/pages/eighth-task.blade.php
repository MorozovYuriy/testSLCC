@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание №8</h3>
                <p><b>Какие данные пользователя сайта из перечисленных можно считать на 100% достоверными: cookie, данные сессии, IP-адрес пользователя , User-Agent? Почему?​</b></p>
            </div>
            <br>
            <div class="result">
                <b>Результат: </b>
                <span>Ни одни из данных нельзя считать на 100% достоверными. Все данные можно подменить на строне клиента.</span>
            </div>
        </div>
    </main>
@endsection