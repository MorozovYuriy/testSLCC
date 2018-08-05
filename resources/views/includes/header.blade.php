<header>
    <div class="navbar-fixed">
        <nav class="navbar gradient-45deg-purple-deep-orange">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Home</a>
                <ul id="nav-mobile" class="right">
                    <li class="hide-on-med-and-down">
                        <a href="https://semalt.com" class="logo-semalt" target="_blank" title="Semalt">
                            <img align="center" class="logo-semalt" src="https://semalt.com/img/logo-semalt-2017.png" alt="">
                        </a>
                    </li>
                </ul>
                <a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
            </div>
        </nav>
    </div>
    <ul id="sidenav-left" class="sidenav sidenav-fixed">
        <li>
            <ul class="collapsible coll-accordion">
                <li class="first-task second-task">
                    <a class="collapsible-header"><i class="fa fa-sitemap"></i>Алгоритмы<i class="material-icons chevron">chevron_left</i></a>
                    <div class="collapsible-body first-task second-task">
                        <ul>
                            <li class="first-task"><a class="waves-effect" href="{{route('first-task')}}">Задание №1</a></li>
                            <li class="second-task"><a class="waves-effect" href="{{route('second-task')}}">Задание №2</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <ul class="collapsible coll-accordion">
                <li class="third-task fourth-task">
                    <a class="collapsible-header"><i class="fas fa-hands"></i>Как получить...<i class="material-icons chevron">chevron_left</i></a>
                    <div class="collapsible-body third-task fourth-task">
                        <ul>
                            <li class="third-task"><a class="waves-effect" href="{{route('third-task')}}">Задание №3</a></li>
                            <li class="fourth-task"><a class="waves-effect" href="{{route('fourth-task')}}">Задание №4</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="fifth-task"><a class="waves-effect" href="{{route('fifth-task')}}">Задание №5</a></li>
        <li>
            <ul class="collapsible coll-accordion">
                <li class="sixth-task seventh-task">
                    <a class="collapsible-header"><i class="fas fa-balance-scale"></i>Чем отличаются...<i class="material-icons chevron">chevron_left</i></a>
                    <div class="collapsible-body sixth-task seventh-task">
                        <ul>
                            <li class="sixth-task"><a class="waves-effect" href="{{route('sixth-task')}}">Задание №6</a></li>
                            <li class="seventh-task"><a class="waves-effect" href="{{route('seventh-task')}}">Задание №7</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="eighth-task"><a class="waves-effect" href="{{route('eighth-task')}}">Задание №8</a></li>
        <li class="nineth-task"><a class="waves-effect" href="{{route('nineth-task')}}">Задание №9</a></li>
        <li>
        <ul class="collapsible coll-accordion">
            <li class="first-db-task second-db-task third-db-task fourth-db-task fifth-db-task">
                <a class="collapsible-header"><i class="fa fa-database"></i>Базы данных<i class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body first-db-task second-db-task third-db-task fourth-db-task fifth-db-task">
                    <ul>
                        <li class="first-db-task"><a class="waves-effect" href="{{route('first-db-task')}}">Задание №1</a></li>
                        <li class="second-db-task"><a class="waves-effect" href="{{route('second-db-task')}}">Задание №2</a></li>
                        <li class="third-db-task"><a class="waves-effect" href="{{route('third-db-task')}}">Задание №3</a></li>
                        <li class="fourth-db-task"><a class="waves-effect" href="{{route('fourth-db-task')}}">Задание №4</a></li>
                        <li class="fifth-db-task"><a class="waves-effect" href="{{route('fifth-db-task')}}">Задание №5</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        </li>
    </ul>
</header>
