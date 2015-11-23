<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
    </head>
    <body>
    <a href="{{url('auth/logout')}}">Uitloggen</a>
        @yield('content')
    </body>
</html>
