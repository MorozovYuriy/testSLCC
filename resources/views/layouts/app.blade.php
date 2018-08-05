<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')

<body class="has-fixed-sidenav">
@include('includes.header')

@yield('content')

<script src="{{ asset('js/main.js') }}"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>
