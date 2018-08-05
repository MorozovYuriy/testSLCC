@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="task">
                <h3>Задание по DB №1</h3>
                <p><b>В базе данных хранится список мероприятий (таблица events) и список заявок на
                        покупку билетов на указанные мероприятия (таблица bids).</b></p>
                <p><i>Сделать скрипты для подготовки базы данных(миграции)</i></p>
            </div>
            <br>
            <div class="code-example">
                <p><span>Пример кода:</span></p>
                <pre class="language-php">
    //table EVENTS
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('caption', 60);
        });
    }

    //table BIDS
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('id_event')->unsigned();
            $table->string('name',60);
            $table->string('email',60)->unique();
            $table->float('price');

            $table->foreign('id_event')->references('id')->on('events');
        });
    }
                </pre>
            </div>
            <br>
        </div>
    </main>
@endsection